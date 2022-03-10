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
}
