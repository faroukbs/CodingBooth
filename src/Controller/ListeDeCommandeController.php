<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeDeCommandeController extends AbstractController
{
    /**
     * @Route("/liste/de/commande", name="liste_de_commande")
     */
    public function index(): Response
    {
        return $this->render('liste_de_commande/index.html.twig', [
            'controller_name' => 'ListeDeCommandeController',
        ]);
    }
}
