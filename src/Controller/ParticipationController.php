<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Eventl;
use App\Form\ParticipationType;
use App\Repository\ParticipationRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Participation;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormTypeInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;




class ParticipationController extends AbstractController
{
    /**
     * @Route("/participation", name="participation")
     */
    public function index(): Response
    {
        return $this->render('participation/index.html.twig', [
            'controller_name' => 'ParticipationController',
        ]);
    }

    /**
     * @Route("/addparticipation{id}", name="addparticipation")
     */
    public function ajouterparticipation(Request $request ,$id){


        $participation = new Participation();
        $eventl = $this->getDoctrine()->getRepository(Eventl::class)->findOneBy(['idevent'=>$id]);
        $participation->setIdevent($eventl);
        $participation->setDateparticipation(new \DateTime('now'));
        $form = $this->createForm(ParticipationType::class,$participation);
        $form->handleRequest($request);



        if ($form->isSubmitted() and $form->isValid()) {
            $em =$this->getDoctrine()->getManager();
            $em->persist($participation);
            $em->flush();
            return $this->redirectToRoute('AfficheEvenementsPublic');
        }

        return $this->render('participation/ajouterparticipation.html.twig', array('participe' => $form->createView()));
    }
    /**
     * @Route("/Mesparticipation", name="Mesparticipation")
     */
    public function afficherReservationP(Request $request){
        $p=$this->getDoctrine()->getRepository(Participation::class);
        $participation=$p->findAll();



        return $this->render('participation/Mesparticipation.html.twig', [
            'participation' => $participation

        ]);

    }


}
