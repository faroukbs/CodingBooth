<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieCoursController extends AbstractController
{
    /**
     * @Route("/categorie/cours", name="categorie_cours")
     */
    public function index(): Response
    {
        return $this->render('categorie_cours/index.html.twig', [
            'controller_name' => 'CategorieCoursController',
        ]);
    }
}
