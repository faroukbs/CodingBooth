<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignupController extends AbstractController
{
    /**
     * @Route("/signup", name="signup")
     */
    public function index(): Response
    {
        return $this->render('signup/inscription.html.twig', [
            'controller_name' => 'SignupController',
        ]);
    }
}
