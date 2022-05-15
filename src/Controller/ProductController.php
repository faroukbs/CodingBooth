<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Eventl;
use App\Entity\Produit;
use App\Entity\Ticket;
use App\Form\ProductType;
use Doctrine\ORM\EntityManagerInterface;
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
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
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
    /**
     * @Route("/product/list", name="list")
     */
    public function AllticketJSON(NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Produit::class);
        $product = $repository->findAll();
        $jsonContent = $Normalizer->normalize($product, 'json', ['groups' => 'produit:read']);
        return new Response(json_encode($jsonContent));
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
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($form);

        return new JsonResponse($formatted);
    }

    /**
     * @Route("/product/new", name="new")
     * Method({"GET", "POST"})
     */
    public function addjsonnewt(Request $req, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $product = new Produit();
        $form = $this->createForm(ProductType::class, $product);
        $nomprod = $req->query->get("nomprod");
        $description = $req->query->get("description");
        $image = $req->query->get("image");
        $prix = $req->query->get("prix");
        $quantity = $req->query->get("quantity");

        $product->setNomprod($nomprod);
        $product->setDescription($description);
        $product->setImage($image);
        $product->setPrix($prix);
        $product->setQuantity($quantity);
        $em->persist($product);
        $em->flush();


        $jsonContent = $Normalizer->normalize($product, 'json', ['groups' => 'produit:read']);
        return new Response(json_encode($jsonContent));
    }
    #update product #


    public function update($id, Request $request)
    {
        $id = $request->get("id");
        $product = new produit();
        $product = $this->getDoctrine()
            ->getRepository(produit::class)
            ->find($id);
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
        $form = $this->createFormBuilder($product)
            ->add('Done',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);



        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();



        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($product);
        return new JsonResponse($formatted);
        // return $this->render('Product/update.html.twig', [
        //     'form' => $form->createView(),


        // ]);
        $em = $this->getDoctrine()->getManager();
        $ticket = $this->getDoctrine()->getManager()
            ->getRepository(Ticket::class)
            ->find($request->get("id"));

        $ticket->setTypeticket($request->get("typeticket"));
        $ticket->setDescription($request->get("description"));
        $ticket->setPrix($request->get('prix'));
        $em->persist($ticket);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $jsonContent = $Normalizer->normalize($ticket,'json',['groups'=>'post:read']);
        return new Response("Update successfully".json_encode($jsonContent));
    }
    /**
     * @Route("/edit",name="update_product")
     */
    public function modifierEventl(Request $request ,NormalizerInterface $Normalizer) {
        $em = $this->getDoctrine()->getManager();
        $product = $this->getDoctrine()->getManager()
            ->getRepository(Produit::class)
            ->find($request->get("id_produit"));
        $product->setNomprod($request->get("nomprod"));
        $product->setDescription($request->get("description"));
        $product->setImage($request->get('image'));
        $product->setPrix($request->get('prix'));
        $product->setQuantity($request->get('quantity'));

        $em->persist($product);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $jsonContent = $Normalizer->normalize($product,'json',['groups'=>'produit:read']);
        return new Response("Update successfully".json_encode($jsonContent));

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
