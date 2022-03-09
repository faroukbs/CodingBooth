<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Lignecommande;
use App\Entity\Produit;
use App\Form\LignecommandeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class LignecommandeController extends AbstractController
{

    /**
     * @Route("/lignecommande", name="lignecommande")
     */
    public function index(): Response
    {
        return $this->render('lignecommande/index.html.twig', [
            'controller_name' => 'LignecommandeController',
        ]);
    }



    /**
     * @Route("/ligneC", name="affichelignecommande")
     */
    public function afficherlignecommande(Request $request)
    {
        $l = $this->getDoctrine()->getRepository(Lignecommande::class);
        $lignecommande = $l->findAll();


        return $this->render('lignecommande/affichel.html.twig', [
            'ligne' => $lignecommande

        ]);

    }
    /**
     * @Route("/addligne{idlignecommande}", name="addLigne")
     */
    public function ajouterlignecommande(Request $request ,$idlignecommande){

        $ligne = new Lignecommande();
        $produit = $this->getDoctrine()->getRepository(Produit::class)->findOneBy(['id_produit'=>$idlignecommande]);
        $ligne->setIdProduit($produit);
        $form = $this->createForm(LignecommandeType::class,$ligne);
        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $em =$this->getDoctrine()->getManager();
            $em->persist($ligne);
            $em->flush();
            return $this->redirectToRoute('affichelignecommande');
        }

        return $this->render('lignecommande/ajouterlignec.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/update{idlignecommande}", name="updateligne")
     */
    public function modifierLigneC(Request $request,$idlignecommande){
        $em = $this->getDoctrine()->getManager();

        $ligne =$em->getRepository(Lignecommande::class)->find($idlignecommande);
        $form=$this->createForm(LignecommandeType::class,$ligne);
        $form->add('Modifier',SubmitType::class );
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($ligne);
            $em->flush();
            return $this ->redirectToRoute('affichelignecommande');
        }
        return $this->render('lignecommande/update.html.twig', [
            'ligne' => $form->createView(),
        ]);
    }
    /**
     * @Route("/supprimerLigne{idlignecommande}", name="supprimerligne")
     */
    public function supprimerLigne($idlignecommande){
        $em=$this->getDoctrine()->getManager();
        $ligne=$this->getDoctrine()->getRepository(Lignecommande::class)->find($idlignecommande);
        $em->remove($ligne);
        $em->flush();
        return $this->redirectToRoute('affichelignecommande');

    }


}
