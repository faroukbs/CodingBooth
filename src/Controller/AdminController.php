<?php

namespace App\Controller;
use App\Entity\Commande;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/stats", name="stats")
     */
    public function statistiques(CommandeRepository $comRepo){
        // On va chercher toutes les commandes

        $commandes = $comRepo->countByDate();

        $dates = [];
        $commandesCount = [];


        // On va chercher le nombre de commande par date
        foreach($commandes as $Commande){
            $dates[] = $Commande ['dateCommande'];
            $commandesCount[] = $Commande['count'];
        }

        //dump($commandesCount);

        return $this->render('admin/stats.html.twig', [
            'dates' => json_encode($dates),
            'commandesCount' => json_encode($commandesCount),
        ]);
    }
}
