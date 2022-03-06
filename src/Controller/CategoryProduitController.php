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

class CategoryProduitController extends AbstractController
{

    #show list des category#

    /**
     * @Route("/category/produit", name="category_produit")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('CategoryProduit/list.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #ADD category#
    /**
     * @Route("/category/new", name="category_new")
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($category);
            $entityManager->flush();

            return $this->redirectToRoute('category_produit');
        }

        return $this->render('CategoryProduit/add.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }
    # show category  par id #}
    // /**
    //  * @Route("/category/{id}", name="category_show")
    //  */
    // public function show(Category $category): Response
    // {
    //     return $this->render('CategoryProduit/show.html.twig', [
    //         'category' => $category,
    //     ]);
    // }


    #Update category #

    /**
     * @Route("/category/edit/{id}", name="category_edit")
     */
    public function edit(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('category_produit');
        }

        return $this->render('CategoryProduit/update.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }
    #delete category #
    /**
     * @Route("/category/Delete/{id}", name="category_delete")
     * Method({"Post"})
     * 
     */
    public function Delete( $id)
    {

        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($category);
        $entityManager->flush();


        return $this->redirectToRoute('category_produit');
    }
}