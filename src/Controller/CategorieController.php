<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->render('categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
    /**
     * @Route("/categorie/affiche", name="categorie_list")
     */
    public function afficher(CategorieRepository  $rep)
    {
        $categorie = $rep->findAll();
        return $this->render('categorie/Afficheca.html.twig', [
            'categorie' => $categorie,
        ]);
    }
    /**
     * @param $idcategorie
     * @param CategorieRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("categorie/deleteca/{idcategorie}", name="delca")
     */
    public function supprimer($idcategorie,CategorieRepository $rep)
    {
        $categorie=$rep->find($idcategorie);
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('categorie_list');

    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/categorie/list/add", name="addca")
     */

    public function add(Request $req )
    {
        $categorie=new Categorie();
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->add('Ajouter',SubmitType::class );
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('categorie_list');
        }
        return $this->render('categorie/addca.html.twig', [
            'form' => $form->createView(),
        ]);


    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/categorie/update/{idcategorie}", name="ca_mod")
     */
    public function update($idcategorie,CategorieRepository $rep,Request $request){
        $categorie=$rep->find($idcategorie);
        $form=$this->createForm(CategorieType::class,$categorie);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('categorie_list');

        }
        return $this->render('categorie/updateca.html.twig', [
            'caupdate' => $form->createView(),
        ]);

    }

    /**
     * @Route("/Allcategorie", name="Allcategorie")
     */
    public function AllcategorieJSON(NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Categorie::class);
        $categorie = $repository->findAll();
        $jsonContent = $Normalizer->normalize($categorie, 'json', ['groups' => 'salle:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/addcategorie", name="addcategorie")
     */
    public function addjsoncategorie(Request $req, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = new Categorie();

        $categorie->setNomCategorie($req->get('nomcategorie'));


        $em->persist($categorie);
        $em->flush();


        $jsonContent = $Normalizer->normalize($categorie, 'json', ['groups' => 'salle:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/deletecategorieJSON/{idcategorie}", name="deletecategorie")
     */

    public function deletecategorieAction(Request $request, NormalizerInterface $Normalizer)
    {
        $idcategorie = $request->get("idcategorie");

        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Categorie::class)->find($idcategorie);
        if ($categorie != null) {
            $em->remove($categorie);
            $em->flush();


            $jsonContent = $Normalizer->normalize($categorie, 'json', ['groups' => 'salle:read']);
            return new Response("Delete successfully" . json_encode($jsonContent));

        }

    }
    /**
     * @Route("/updatecategorie", name="updatecategorie")
     */
    public function modifiercategorie(Request $request ,NormalizerInterface $Normalizer) {
        $em = $this->getDoctrine()->getManager();
        $categorie = $this->getDoctrine()->getManager()
            ->getRepository(Categorie::class)
            ->find($request->get("id"));

        $categorie->setNomCategorie($request->get("nomcategorie"));

        $em->persist($categorie);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $jsonContent = $Normalizer->normalize($categorie,'json',['groups'=>'salle:read']);
        return new Response("Update successfully".json_encode($jsonContent));

    }
}
