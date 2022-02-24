<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
   /**
     * @Route("/adminprod", name="adproduct")
     */
    public function listadmin(): Response
    {
        $form = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->findAll();


        return $this->render('product/list.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/product", name="product")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
     /**
     * @Route("/product/list", name="list")
     */
    public function list(): Response
    {
        $form = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->findAll();


        return $this->render('shop\shop.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/product/list/{id}", name="list-item")
     */
    public function listItem($id): Response
    {
        $form = $this->getDoctrine()
        ->getRepository(Produit::class)
        ->find($id);


        return $this->render('shop/item.html.twig', [
            'form' => $form,
        ]);
    }
        /**
     * @Route("/product/new", name="new")
     * Method({"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Produit();
        $form = $this->createForm(ProductType::class,$product);
        
        
 
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image')->getData();
            
           
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'),$filename);
            $product->setImage($filename);
           
        
 
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($product);
             $entityManager->flush();
             return $this->redirectToRoute('list');
        }

        return $this->render('product\add.html.twig', [
            'form' => $form->createView(),
            
        ]);
    }

    /**
     * @Route("/product/edit/{id}",name="update_product")
     * Method({"GET", "POST"})
     */
    public function update($id, Request $request)
    {
        $product = new produit();
        $product = $this->getDoctrine()
            ->getRepository(produit::class)
            ->find($id);


        $form = $this->createformbuilder($product)
        ->add('nomprod',TextType::class)
        ->add('description',TextType::class)
        ->add('prix',MoneyType::class)
        ->add('type_produit',TextType::class)
        
       
            ->add('image',FileType::class,[
                'mapped'=> false,
                'label'=>' please upload a image'
                
                ])
                ->add('edit',SubmitType::class)
        

        ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'),$filename);
            $product->setImage($filename);
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->flush();
             return $this->redirectToRoute('list');
         }
         return $this->render('Product/update.html.twig', [
             'form' => $form->createView(),


            ]);
    }
    /**
     * @Route("/product/Delete/{id}" ,name="sup_product")
     *Method({"DELETE"})
     */
    public function Delete(Request $request,$id)
    {
            $product = $this->getDoctrine()
            ->getRepository(produit::class)
            ->find($id);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();

            
            return $this->redirectToRoute('adproduct');
            
    }
}
