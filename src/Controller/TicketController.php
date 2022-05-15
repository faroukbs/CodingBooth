<?php

namespace App\Controller;
use App\Form\TicketType;
use App\Form\EntityType;
use App\Entity\Eventl;
use App\Repository\TicketRepository;
use App\Entity\Ticket;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


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
        $t = $this->getDoctrine()->getRepository(Ticket::class);
        $ticket = $t->findAll();
        if ($request->isMethod("POST")) {
            $idticket = $request->get("idticket");
            $ticket = $t->findBy(array("idticket" => $idticket));

        }


        return $this->render('ticket/affiche.html.twig', array('ticket' => $ticket));
    }

    /**
     * @Route("/addticketl", name="addticket")
     */
    public function ajouterticket(Request $request)
    {

        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);
        $form->add('Ajouter', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {
            $file = $ticket->getImage();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('images_directory'), $filename);
            $em = $this->getDoctrine()->getManager();
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
    public function modifierticket(Request $request, $idticket)
    {
        $em = $this->getDoctrine()->getManager();

        $ticket = $em->getRepository(Ticket::class)->find($idticket);
        $form = $this->createForm(TicketType::class, $ticket);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $file = $ticket->getImage();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('images_directory'), $filename);
            $ticket->setImage($filename);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            $this->addFlash(
                'info1',
                'update successfuly !'
            );
            return $this->redirectToRoute('ticketAdmin');
        }
        return $this->render('ticket/updateticket.html.twig', [
            'ticketu' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ticket{id}", name="ticket")
     */
    public function ticketFront($id, Request $request): Response
    {
        $t = $this->getDoctrine()->getRepository(Ticket::class);
        $ticket = $t->findBy(['idevent' => $id]);

        if ($request->isMethod("POST")) {
            $typeticket = $request->get("typeticket");
            $ticket = $t->findBy(array("typeticket" => $typeticket));

        }


        return $this->render('ticket/ticket.html.twig', array('ticket' => $ticket));
    }

    /**
     * @Route("/Allticketl", name="AllticketJSON")
     */
    public function AllticketJSON(NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Ticket::class);
        $ticket = $repository->findAll();
        $jsonContent = $Normalizer->normalize($ticket, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/supprimerticket{idticket}", name="supprimerticket")
     */
    public function supprimerticket($idticket)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $this->getDoctrine()->getRepository(Ticket::class)->find($idticket);
        $em->remove($ticket);
        $em->flush();
        $this->addFlash(
            'info2',
            'delete successfuly !'
        );
        return $this->redirectToRoute('ticketAdmin');

    }

    /**
     * @Route("/addticket", name="addticket")
     */
    public function addjsonnewt(Request $req, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = new Ticket();

        $ticket->setTypeticket($req->get('typeticket'));
        $ticket->setDescription($req->get('description'));
        $ticket->setPrix($req->get('prix'));
        $idevent = $req->query->get('idevent');
        $ticket->setIdevent($this->getDoctrine()->getManager()->getRepository(Eventl::class)->find($idevent));
        $em->persist($ticket);
        $em->flush();


        $jsonContent = $Normalizer->normalize($ticket, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/deleteticketJSON/{idticket}", name="deleteticket")
     */

    public function deleteticketAction(Request $request, NormalizerInterface $Normalizer)
    {
        $idticket = $request->get("idticket");

        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository(Ticket::class)->find($idticket);
        if ($ticket != null) {
            $em->remove($ticket);
            $em->flush();


            $jsonContent = $Normalizer->normalize($ticket, 'json', ['groups' => 'post:read']);
            return new Response("Delete successfully" . json_encode($jsonContent));

        }

    }
    /**
     * @Route("/updateticket", name="update_ticket")
     */
    public function modifierEventl(Request $request ,NormalizerInterface $Normalizer) {
        $em = $this->getDoctrine()->getManager();
        $ticket = $this->getDoctrine()->getManager()
            ->getRepository(Ticket::class)
            ->find($request->get("id"));

        $ticket->setTypeticket($request->get("typeticket"));
        $ticket->setDescription($request->get("description"));
        $ticket->setPrix($request->get('prix'));
        $em->persist($ticket);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $jsonContent = $Normalizer->normalize($ticket,'json',['groups'=>'post:read']);
        return new Response("Update successfully".json_encode($jsonContent));

    }
}


