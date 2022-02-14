<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdherantController extends AbstractController
{
    /**
     * @Route("/adherant", name="adherant")
     */
    public function index(): Response
    {
        return $this->render('adherant/index.html.twig', [
            'controller_name' => 'AdherantController',
        ]);
    }
}
