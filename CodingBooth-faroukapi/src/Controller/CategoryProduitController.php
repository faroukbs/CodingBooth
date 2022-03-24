<?php

namespace App\Controller;

use App\Entity\Produit;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class CategoryProduitController extends AbstractController
{

    #show list des category#

    /**
     * @Route("/getall", name="cget")
     */
    public function indexaqsd(): Response
    {
        
        $category = $this->getDoctrine()->getManager()->getRepository(Category::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        
        $formatted = $serializer->normalize($category);

        return new JsonResponse($formatted);
    }    
    /**
     * @Route("/category/produit", name="category_produit")
     */
    public function index(SerializerInterface $serializer)
    {
        
        $category = $this->getDoctrine()->getManager()->getRepository(Category::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $this->get('serializer');
        $formatted = $serializer->normalize($category);

        return new JsonResponse($formatted);
    }

    #ADD category#
    /**
     * @Route("/category/new", name="category_new")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);


        $nom = $request->query->get("nom");
        


        $category->setNom($nom);
        

        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($category);
        $entityManager->flush();
        

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($category);
        return new JsonResponse($formatted);
    }
   
    #Update category #

    /**
     * @Route("/category/edit/{id}", name="category_edit")
     */
    public function edit(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $category = $this->getDoctrine()->getManager()
                        ->getRepository(Category::class)
                        ->find($request->get("id"));

        $category->setNom($request->get("nom"));
        

        $em->persist($category);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($category);
        return new JsonResponse("update a ete modifiee avec success.");

    }
    #delete category #
    /**
     * @param $id
     * @param CategoryRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/category/Delete/{id}", name="category_delete")
     * Method({"DELETE"})
     */
    public function Delete(Request $request)
    {

        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category::class)->find($id);
        if($category!=null ) {
            $em->remove($category);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("catregories a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id categorie invalide.");
    }    
}
