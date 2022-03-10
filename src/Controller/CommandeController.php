<?php

namespace App\Controller;


use App\Entity\Commande;
use App\Entity\Produit;
use App\Form\CommandeBackType;
use App\Form\CommandeType;
use App\Services\cart\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType ;
use Symfony\Component\Form\Extension\Core\Type\TextType ;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Dompdf\Dompdf;
use Dompdf\Options;

class CommandeController extends AbstractController
{
    /**
     * @Route("/back", name="back")
     */
    public function index(): Response
    {

        return $this->render('base-back/admin.html.twig', [

        ]);
    }


    /**
     * @Route("/listC", name="commande")
     */
    public function index1(): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();

        return $this->render('commande/list.html.twig', [
            'form' => $form,
        ]);
    }
    /**
     * @Route("/afficheC", name="Affiche_commande")
     */
    public function affiche(): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();

        return $this->render('commande/affiche.html.twig', [
            'form' => $form,
        ]);
    }
    /**
     * @Route("/afficheDetail{idcommande}", name="Detail")
     */
    public function afficheDetail(int $idcommande): Response
    {

        $c = $this->getDoctrine()
            ->getRepository(Commande::class);
        $commande=$c->find($idcommande);



    }

    /**
     * @Route("/addC" ,name="addCommande")
     *Method({"GET", "POST"})
     */
    public function new(Request $request)
    {
        $Commande = new Commande();
        $form = $this->createForm(CommandeType::class,$Commande);
        $form->add('Ajouter',SubmitType::class) ;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Commande= $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();
            return $this->redirectToRoute('commande');
        }
        return $this->render('commande/add.html.twig', [
            'form' => $form->createView() ,

        ]);

    }





    /**
     * @Route("/ajouterC" ,name="ajout")
     *Method({"GET", "POST"})
     */
    public function add(Request $request,CartService $cartservice )
    {
        $dataPanier=$cartservice->getFullCart();
        $total=$cartservice->getTotal();
        $Commande = new Commande();
        $form = $this->createForm(CommandeBackType::class,$Commande);
        $form->add('Ajouter',SubmitType::class) ;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Commande= $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();
            $this->addFlash(
                'info',
                'added successfuly !'
            );

            return $this->redirectToRoute('checkout');
        }

        return $this->render('commande/ajoute.html.twig', [
            'formA' => $form->createView(),
            'total'=>$total,
            'elements'=>$dataPanier
        ]);

    }


    /**
     * @Route("/DeleteC{idcommande}" ,name="AdminDelete")
     *Method({"DELETE"})
     */
    public function Delete(Request $request,$idcommande)
    {
        $Commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($idcommande);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Commande);
        $entityManager->flush();


        return $this->redirectToRoute('commande');
    }

    /**
     * @Route("/editC{idcommande}",name="AdminUpdate")
     * Method({"GET", "POST"})
     */
    public function update($idcommande, Request $request)
    {
        $Commande = new Commande();
        $Commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($idcommande);

        $form = $this->createformbuilder($Commande)
            ->add('etat_commande',IntegerType::class)
            ->add('Edit',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('commande');
        }
        return $this->render('commande/update.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/modifierC{idcommande}",name="UserModify")
     * Method({"GET", "POST"})
     */
    public function updateUser($idcommande, Request $request)
    {
        $Commande = new Commande();
        $Commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($idcommande);

        $form = $this->createformbuilder($Commande)
            ->add('telephone',TextType::class)
            ->add('adresse',TextType::class)
            ->add('Edit',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('Affiche_commande');
        }
        return $this->render('commande/updateUser.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/DeleteU{idcommande}" ,name="UserDelete")
     *Method({"DELETE"})
     */
    public function DeleteCommande(Request $request,$idcommande)
    {
        $Commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($idcommande);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Commande);
        $entityManager->flush();


        return $this->redirectToRoute('Affiche_commande');
    }

    
        /**
         * @Route("/email{id}", name="email")
         */
        public function index2(Request $request,\Swift_Mailer $mailer,$id){
         
    
            $commande = $this->getDoctrine()->getRepository(Commande::class)->findOneBy(['idcommande' => $id]);
          
          
            $Date = $commande->getDate();
            $montant= $commande->getMontant();
            
            $nom_client = $commande->getNomClient();
            $prenom_client = $commande->getPrenomClient();
          
    
          
           
    
        $message = (new \Swift_Message('Mail Gogym User'))
        ->setFrom('gogympi@gmail.com')->setTo('gogympi@gmail.com')
            ->setBody($this->renderView('email/email.html.twig',
            ['nom_client' => $nom_client,
            'prenom_client' => $prenom_client,
              
                'Date' => $Date,
               
                'montant' => $montant]
              
        ),
        'text/html'

    );
        $mailer->send($message);
        $this->addFlash('message','le message a été bien envoyé!');
    
            return $this->redirectToRoute('Affiche_commande');
        }
    
       


}

