<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
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
     * @Route("/listP", name="list")
     */
    public function list(): Response
    {
        $form = $this->getDoctrine()
        ->getRepository(Product::class)
        ->findAll();


        return $this->render('Product/list.html.twig', [
            'form' => $form,
        ]);
    }
        /**
     * @Route("/newP", name="new")
     * Method({"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Product();
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

        return $this->render('Product/add.html.twig', [
            'form' => $form->createView(),
            
        ]);
    }

    /**
     * @Route("/editP/{idproduit}",name="update_product")
     * Method({"GET", "POST"})
     */
    public function update($idproduit, Request $request)
    {
        $product = new product();
        $product = $this->getDoctrine()
            ->getRepository(product::class)
            ->find($idproduit);


        $form = $this->createformbuilder($product)
        ->add('prix',IntegerType::class)
            ->add('description',TextType::class)
            ->add('image',FileType::class,[
                'mapped'=> false,
                'label'=>' please upload a image'

            ])
            ->add('Edit',SubmitType::class)

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
     * @Route("/DeleteP/{idproduit}" ,name="sup_product")
     *Method({"DELETE"})
     */
    public function Delete(Request $request,$idproduit)
    {
            $product = $this->getDoctrine()
            ->getRepository(product::class)
            ->find($idproduit);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();

            
            return $this->redirectToRoute('list');
            
    }


}
