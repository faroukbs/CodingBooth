<?php

namespace App\Controller;
use App\Entity\Ticket;
use App\Entity\Utilisateur;
use App\Entity\Eventl;
use App\Entity\Reservation;
use Dompdf\Dompdf;
use App\Repository\ReservationRepository;
use Dompdf\Options;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler;
use App\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;


class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }

    /**
     * @Route("/reservationAdmin", name="reservationadmin")
     */
    public function ResAdmin(Request $request): Response
    {
        $r = $this->getDoctrine()->getRepository(Reservation::class);
        $reservation = $r->findAll();


        return $this->render('reservation/MesReservationsAdmin.html.twig', array('reservations' => $reservation));

    }

    /**
     * @Route("/addReservation{id}", name="addReservation")
     */
    public function ajouterReservation(Request $request, $id)
    {


        $reservation = new Reservation();
        $ticket = $this->getDoctrine()->getRepository(Ticket::class)->findOneBy(['idticket' => $id]);

        $reservation->setIdTicket($ticket);
        $reservation->setDateReser(new \DateTime('now'));


        $form = $this->createForm(ReservationType::class, $reservation);


        $form->handleRequest($request);

        if ($form->isSubmitted() and $form->isValid()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('default');
        }
        return $this->render('reservation/ajouterreservation.html.twig', array('reservations' => $form->createView()));

    }

    /**
     * @Route("/MesReservation", name="MesReservation")
     */
    public function afficherReservation(Request $request)
    {
        $r = $this->getDoctrine()->getRepository(Reservation::class);
        $reservation = $r->findAll();


        return $this->render('reservation/MesReservations.html.twig', array('reservations' => $reservation));


    }


    /**
     * @Route("/modReservation{idreser}", name="modReservation")
     */
    public function modifierReservation(Request $request, $idreser)
    {
        $em = $this->getDoctrine()->getManager();

        $res = $em->getRepository(Reservation::class)->find($idreser);
        $form = $this->createForm(ReservationType::class, $res);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($res);
            $em->flush();
            return $this->redirectToRoute('MesReservation');
        }
        return $this->render('reservation/ajouterreservation.html.twig', array('reservations' => $form->createView()));

    }

    /**
     * @Route("/supReservation{idreser}", name="supReservation")
     */
    public function supprReservationP($idreser)
    {
        $em = $this->getDoctrine()->getManager();
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($idreser);
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute('MesReservation');

    }

    /**
     * @Route ("deleteAdminReser{id}",name="deleteAdminReser")
     */
    public function DeleteAdminReser($id)
    {
        $em = $this->getDoctrine()->getManager();
        $r = $this->getDoctrine()->getRepository(Reservation::class)->find($id);
        $em->remove($r);
        $em->flush();
        return $this->redirectToRoute('reservationadmin');
    }

    /**
     * @Route ("ComfirmationReservation{id}",name="ComfirmationReservation")
     */
    public function ComfirmationReservation($id, \Swift_Mailer $mailer)
    {
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findOneBy(['idreser' => $id]);
        $idu = $reservation->getIdUser();
        $idt = $reservation->getIdTicket();
        $dt = $reservation->getDateReser();
        $qt = $reservation->getQuantity();
        $utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->findOneBy(['id' => $idu]);
        $email = $utilisateur->getEmail();
        $nom = $utilisateur->getNom();
        $ticket = $this->getDoctrine()->getRepository(Ticket::class)->findOneBy(['idticket' => $idt]);
        $prix = $ticket->getPrix();
        $idevent = $ticket->getIdEvent();

        $eventl = $this->getDoctrine()->getRepository(Eventl::class)->findOneBy(['idevent' => $idevent]);
        $titre = $eventl->getTitre();


        $message = (new \Swift_Message('Confirmation Email'))
            ->setFrom('gogympi@gmail.com')
            ->setTo('gogympi@gmail.com')
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'email/contact.html.twig',
                    ['nom' => $nom,
                        'titre' => $titre,
                        'idt' => $idt,
                        'dt' => $dt,
                        'prix' => $prix,
                        'qt' => $qt]
                ),
                'text/html'

            );

        $mailer->send($message);

        $em = $this->getDoctrine()->getManager();
        $e = $em->getRepository(Reservation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->persist($e);
        $em->flush();

        return $this->redirectToRoute('MesReservation');


    }

    /**
     * @Route("/trireservationparid", name="trireservationparid")
     */

    public function Triid(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT r FROM App\Entity\Reservation r 
            ORDER BY r.Quantity'
        );


        $rep = $query->getResult();

        return $this->render('reservation/MesReservations.html.twig',
            array('reservations' => $rep));

    }

    /**
     * @param ReservationRepository $reservationrepository
     * @Route("/Lister{id}", name="Lister")
     */
    public function Lister(ReservationRepository $reservationrepository,$id)
    {
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->findOneBy(['idreser' => $id]);
        $idu = $reservation->getIdUser();
        $idt = $reservation->getIdTicket();
        $dt = $reservation->getDateReser();
        $qt = $reservation->getQuantity();
        $utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->findOneBy(['id' => $idu]);
        $email = $utilisateur->getEmail();
        $nom = $utilisateur->getNom();
        $ticket = $this->getDoctrine()->getRepository(Ticket::class)->findOneBy(['idticket' => $idt]);
        $prix = $ticket->getPrix();
        $idevent = $ticket->getIdEvent();

        $eventl = $this->getDoctrine()->getRepository(Eventl::class)->findOneBy(['idevent' => $idevent]);
        $titre = $eventl->getTitre();


        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $reservation = $reservationrepository->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('eventl/listp.html.twig', [
            'reservation' => $reservation,
            'nom' => $nom,
            'prix' => $prix,
            'titre' => $titre,
            'idt' => $idt,
            'dt' => $dt,
            'qt' => $qt
        ]);

        // Load HTML to Dompdf

        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);


    }
    /**
     * @Route("/MesReservationA", name="MesReservationA")
     */
    public function afficherReservation2(Request $request)
    {
        $r = $this->getDoctrine()->getRepository(Reservation::class);
        $reservation = $r->findAll();


        return $this->render('reservation/MesReservationsAdmin.html.twig', array('reservations' => $reservation));


    }
}
