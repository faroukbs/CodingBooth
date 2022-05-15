<?php

namespace App\Controller;
use App\Entity\Categorie;
use App\Entity\Salle;
use App\Form\SalleType;
use App\Repository\SalleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
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
class SalleController extends AbstractController
{
    /**
     * @Route("/salle", name="salle")
     */
    public function index(): Response
    {
        return $this->render('Affiches.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }
    /**
     * @Route("/salle/affiche", name="salle_list")
     */
    public function afficher(SalleRepository  $rep)
    {
        $salle = $rep->findAll();
        return $this->render('salle/Affiches.html.twig', [
            'salle' => $salle,
        ]);
    }
    /**
     * @param $id
     * @param SalleRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/salle/affiche/delete/{idsalle}", name="del")
     */
    public function supprimer($idsalle,SalleRepository $rep)
    {
        $salle=$rep->find($idsalle);
        $em=$this->getDoctrine()->getManager();
        $em->remove($salle);
        $em->flush();
        return $this->redirectToRoute('salle_list');

    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/salle/list/add", name="s_add")
     */

    public function add(Request $req )
    {
        $salle=new Salle();
        $form=$this->createForm(SalleType::class,$salle);
        $form->add('Ajouter',SubmitType::class );
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {
            $file = $form->get('image')->getData();


            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('image_directory'), $filename);
            $salle->SetImage($filename);
            $em=$this->getDoctrine()->getManager();
            $em->persist($salle);
            $em->flush();
            return $this->redirectToRoute('salle_list');
        }
        return $this->render('salle/adds.html.twig', [
            'form' => $form->createView(),
        ]);


    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/salle/update/{idsalle}", name="mod")
     */
    public function update($idsalle,SalleRepository $rep,Request $request){
        $salle=$rep->find($idsalle);
        $form=$this->createForm(SalleType::class,$salle);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('salle_list');

        }
        return $this->render('salle/updates.html.twig', [
            'supdate' => $form->createView(),
        ]);


    }
    /**
     * @Route("/Allsalle", name="Allsalle")
     */
    public function AllsalleJSON(NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Salle::class);
        $salle = $repository->findAll();
        $jsonContent = $Normalizer->normalize($salle, 'json', ['groups' => 'salle:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/addsalle", name="addsalle")
     */
    public function addjsonsalle(Request $req, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $salle = new Salle();

        $salle->setNomSalle($req->get('nomsalle'));
        $salle->setDescription($req->get('description'));
        $idcategorie = $req->query->get('idcategorie');
        $salle->setIdCategorie($this->getDoctrine()->getManager()->getRepository(Categorie::class)->find($idcategorie));
        $em->persist($salle);
        $em->flush();


        $jsonContent = $Normalizer->normalize($salle, 'json', ['groups' => 'salle:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/deletesalleJSON/{idsalle}", name="deletesalle")
     */

    public function deletesalleAction(Request $request, NormalizerInterface $Normalizer)
    {
        $idsalle = $request->get("idsalle");

        $em = $this->getDoctrine()->getManager();
        $salle = $em->getRepository(Salle::class)->find($idsalle);
        if ($salle != null) {
            $em->remove($salle);
            $em->flush();


            $jsonContent = $Normalizer->normalize($salle, 'json', ['groups' => 'salle:read']);
            return new Response("Delete successfully" . json_encode($jsonContent));

        }

    }
    /**
     * @Route("/updatesalle", name="updatesalle")
     */
    public function modifiersalle(Request $request ,NormalizerInterface $Normalizer) {
        $em = $this->getDoctrine()->getManager();
        $salle = $this->getDoctrine()->getManager()
            ->getRepository(Salle::class)
            ->find($request->get("id"));

        $salle->setNomSalle($request->get("nomsalle"));
        $salle->setDescription($request->get("description"));

        $em->persist($salle);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $jsonContent = $Normalizer->normalize($salle,'json',['groups'=>'salle:read']);
        return new Response("Update successfully".json_encode($jsonContent));

    }

}
