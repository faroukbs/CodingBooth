<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImcController extends AbstractController
{
    /**
     * @Route("/imc", name="imc")
     */
    public function index(): Response
    {
        return $this->render('imc/index.html.twig', [
            'controller_name' => 'ImcController',
        ]);
    }
}
