<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index(): Response
    {
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
   /**
     * @Route("/category/affiche", name="category_list")
     */
    public function afficher(CategoryRepository  $rep)
    {
        $category = $rep->findAll();
        return $this->render('category/Afficheca.html.twig', [
            'category' => $category,
        ]);
    }
   /**
     * @param $idcategory
     * @param CategoryRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("category/delete/{idcategory}", name="delca")
     */
    public function supprimer($idcategory,CategoryRepository $rep)
    {
        $category=$rep->find($idcategory);
        $em=$this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();
        return $this->redirectToRoute('category_list');

    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/category/list/add", name="addca")
     */

    public function add(Request $req )
    {
        $category=new Category();
        $form=$this->createForm(CategoryType::class,$category);
        $form->add('Ajouter',SubmitType::class );
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {
           
            $em=$this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute('category_list');
        }
        return $this->render('category/addca.html.twig', [
            'form' => $form->createView(),
        ]);


    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/category/update/{idcategory}", name="ca_mod")
     */
    public function update($idcategory,CategoryRepository $rep,Request $request){
        $category=$rep->find($idcategory);
        $form=$this->createForm(CategoryType::class,$category);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('category_list');

        }
        return $this->render('category/updateca.html.twig', [
            'caupdate' => $form->createView(),
        ]);

}
}
