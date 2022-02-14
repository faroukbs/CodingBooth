<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SalleDeCoursController extends AbstractController
{
    /**
     * @Route("/salle/de/cours", name="salle_de_cours")
     */
    public function index(): Response
    {
        return $this->render('salle_de_cours/index.html.twig', [
            'controller_name' => 'SalleDeCoursController',
        ]);
    }
}
