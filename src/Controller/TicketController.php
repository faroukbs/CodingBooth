<?php

namespace App\Controller;
use App\Form\TicketType;
use App\Form\EntityType;
use App\Entity\Eventl;
use App\Repository\TicketRepository;
use App\Entity\Ticket;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler;
use Doctrine\Common\Collections\ArrayCollection;

class TicketController extends AbstractController
{
    /**
     * @Route("/ticket", name="ticket")
     */
    public function index(): Response
    {
        return $this->render('ticket/index.html.twig', [
            'controller_name' => 'TicketController',
        ]);
    }
    /**
     * @Route("/ticketAdmin", name="ticketAdmin")
     */
    public function ticketAdmin(Request $request): Response
    {
        $t=$this->getDoctrine()->getRepository(Ticket::class);
        $ticket=$t->findAll();
        if ($request->isMethod("POST"))
        {
            $idticket = $request->get("idticket");
            $ticket=$t->findBy(array("idticket"=>$idticket));

        }


        return $this->render('ticket/affiche.html.twig', array('ticket'=>$ticket));
    }

    /**
     * @Route("/addticket", name="addticket")
     */
    public function ajouterticket(Request $request){

        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class,$ticket);
        $form->add('Ajouter',SubmitType::class  );

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $file = $ticket->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'),$filename);
            $em=$this->getDoctrine()->getManager();
            $ticket->setImage($filename);

            $em->persist($ticket);
            $em->flush();
            $this->addFlash(
                'info',
                'added successfuly !'
            );
            return $this->redirectToRoute('ticketAdmin');
        }
        return $this->render('ticket/ajouterticket.html.twig', [
            'ticket' => $form->createView(),
        ]);
    }

    /**
     * @Route("/modifierticket{idticket}", name="modt")
     */
    public function modifierticket(Request $request,$idticket){
        $em = $this->getDoctrine()->getManager();

        $ticket=$em->getRepository(Ticket::class)->find($idticket);
        $form=$this->createForm(TicketType::class,$ticket);
        $form->add('Modifier',SubmitType::class );
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $file = $ticket->getImage();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'),$filename);
            $ticket->setImage($filename);
            $em=$this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            $this->addFlash(
                'info1',
                'update successfuly !'
            );
            return $this ->redirectToRoute('ticketAdmin');
        }
        return $this->render('ticket/updateticket.html.twig', [
            'ticketu' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ticket{id}", name="ticket")
     */
    public function ticketFront( $id,Request $request): Response
    {
        $t=$this->getDoctrine()->getRepository(Ticket::class);
        $ticket=$t->findBy(['idevent'=> $id]);

        if ($request->isMethod("POST"))
        {
            $typeticket = $request->get("typeticket");
            $ticket=$t->findBy(array("typeticket"=>$typeticket));

        }




        return $this->render('ticket/ticket.html.twig', array('ticket'=>$ticket));
    }
    /**
     * @Route("/supprimerticket{idticket}", name="supprimerticket")
     */
    public function supprimerticket($idticket){
        $em=$this->getDoctrine()->getManager();
        $ticket=$this->getDoctrine()->getRepository(Ticket::class)->find($idticket);
        $em->remove($ticket);
        $em->flush();
        $this->addFlash(
            'info2',
            'delete successfuly !'
        );
        return $this->redirectToRoute('ticketAdmin');

    }

}
