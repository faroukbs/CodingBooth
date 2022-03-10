<?php

namespace App\Controller;


use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReclamationType;
use App\Repository\ReponseRepository;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


    /**
     * @Route("/reclamation/add", name="rec_add")
     */
    public function add (Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamations= new Reclamation();
        #$reclamations->setCreatedAt(new \DateTimeImmutable());
        $reclamations->setEtat("En cours");
        $form=$this ->createForm(ReclamationType::class,$reclamations);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {$em=$this->getDoctrine()->getManager();
            $em->persist($reclamations);
            $em->flush();
            $this->addFlash('success','Reclamation Added Successfully !');
            return $this->redirectToRoute('home');

        }

        return $this->render('reclamation/add.html.twig', [
            'formA'=>$form->createView(),
        ]);
    }




    /**
     * @param ReclamationRepository $rep
     * @return Response
     * @Route("reclamation/list/{value}", name="rec_list")
     */
    public function afficher($value, ReclamationRepository $rep): Response
    {
        $reclamations=$rep->findById($value);
        return $this->render('reclamation/listReclamation.html.twig', [
            'tab' => $reclamations,
        ]);
    }

    
    /** 
     * @Route("reclamation/etat/{id}", name="etat_rec")
     */
    public function afficheReponse($id, ReponseRepository $rep): Response
    {
        
       $reponse=$rep->find($id);
       #$reponseMessage=$reclamation->getReclamation();

        return $this->render('reclamation/reponse.html.twig', [
            'tab' => $reponse,
        ]);
    }

}


