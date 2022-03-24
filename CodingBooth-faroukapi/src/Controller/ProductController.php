<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Produit;
use App\Form\ProductType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;

class ProductController extends AbstractController
{

    #show product coté admin #
    /**
     * @Route("/adminprod", name="adproduct")
     */
    public function listadmin(): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($form);

         return new JsonResponse($formatted);


        
        
    }



    #show products coté client #
    /**
     * @Route("/product/list", name="list")
     */
    public function list(): Response
    {
        $form = $this->getDoctrine()->getManager()->getRepository(Produit::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($form);
   
        return new JsonResponse($formatted);
       
   



        return $this->render('shop\shop.html.twig', [
            'form' => $form,
            

        ]);
    }

    /**
     * @Route("/product/list/cat/{categoryprod}", name="list-cat")
     */
    public function listCat($categoryprod): Response
    {
        $cat = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        $var = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($categoryprod);
        $fetch = $this->getDoctrine()->getRepository(Produit::class)->findAll();


        return $this->render('shop\shopCat.html.twig', [
            'cat' => $cat,
            'var' => $var,
            'form' => $fetch,
        ]);
    }
    #show item coté client #
    /**
     * @Route("/product/list/{id}", name="list-item")
     */
    public function listItem($id): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->find($id);


        $list = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();



        return $this->render('shop/item.html.twig', [
            'form' => $form,
            'list' => $list,
        ]);
    }
    #add product #
    /**
     * @Route("/product/new", name="new")
     * Method({"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Produit();
        $form = $this->createForm(ProductType::class, $product);
         $nomprod = $request->query->get("nomprod");
         $description = $request->query->get("description");
         $image = $request->query->get("image");
         $prix = $request->query->get("prix");
         $quantity = $request->query->get("quantity");
        
         $product->setNomprod($nomprod);
         $product->setDescription($description);
         $product->setImage($image);
         $product->setPrix($prix);
         $product->setQuantity($quantity);
        
        $form->handleRequest($request);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
          
        
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($product);
            return new JsonResponse("added");
    
    }

    #update product #

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
            ->add('nomprod', TextType::class)
            ->add('description', TextType::class)
            ->add('prix', MoneyType::class)
            ->add('quantity', IntegerType::class)
            ->add('CategoryProd', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'nom',
                'label' => 'Category'
            ])


            ->add('image', FileType::class, [
                'mapped' => false,
                'label' => ' please upload a image'

            ])
            ->add('edit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $filename);
            $product->setImage($filename);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush(); 

            return $this->redirectToRoute('list');
        }
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($product);
        return new JsonResponse($formatted);
        // return $this->render('Product/update.html.twig', [
        //     'form' => $form->createView(),


        // ]);
    }

    #delete product #
    /**
     * @Route("/product/Delete/{id}" ,name="sup_product")
     *Method({"DELETE"})
     */
    public function Delete($id)
    {
        $product = $this->getDoctrine()
            ->getRepository(produit::class)
            ->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($product);
        $entityManager->flush();


        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($product);
        return new JsonResponse($formatted);


        // return $this->redirectToRoute('adproduct');
    }

}
