<?php

namespace App\Controller;
use App\Entity\Evaluation;

use App\Entity\Ticket;
use App\Form\EventlType;
use App\Form\EvaluationType;
use App\Entity\Eventl;
use App\Entity\Utilisateur;
use App\Repository\EventlRepository;
use App\Repository\EvaluationRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\UtilisateurRepository;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class EventlController extends AbstractController
{
    /**
     * @Route("/eventl/{id}", name="eventl")
     */
    public function index(): Response
    {
        return $this->render('eventl/like.html.twig', [
            'controller_name' => 'EventlController',
        ]);
    }

    /**
     * @Route("/eventlAdmin", name="event_list")
     */
    public function afficher(EventlRepository $rep, Request $request, PaginatorInterface $paginator)
    {


        if ($request->isMethod("POST")) {
            $recherche = $request->get("recherche");
            $eventl = $rep->findByKey($recherche);

        } else

            $eventl = $rep->findAll();
        $eventl = $paginator->paginate(
            $eventl, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            4 // Nombre de résultats par page
        );
        return $this->render('eventl/Affiche.html.twig', [
            'eventl' => $eventl,
        ]);

    }

    /**
     * @param $idevent
     * @param EventlRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/eventldelete/{idevent}", name="del")
     */
    public function supprimer($idevent, EventlRepository $rep,FlashyNotifier $flashy)
    {
        $eventl = $rep->find($idevent);
        $em = $this->getDoctrine()->getManager();
        $em->remove($eventl);
        $em->flush();
        $this->addFlash(
            'info5',
            'delete successfuly !'
        );
        $flashy->error('Uh Oh', 'http://your-awesome-link.com');
        return $this->redirectToRoute('event_list');

    }

    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/eventladd", name="r_add")
     */

    public function add(Request $req,FlashyNotifier $flashy)
    {
        $eventl = new Eventl();
        $form = $this->createForm(EventlType::class, $eventl);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $eventl->getPhoto();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('images_directory'), $filename);
            $em = $this->getDoctrine()->getManager();
            $eventl->setPhoto($filename);
            $em->persist($eventl);
            $em->flush();

            $flashy->success('Addedd succefully', 'http://your-awesome-link.com');

            return $this->redirectToRoute('event_list');
        }
        return $this->render('eventl/add.html.twig', [
            'form' => $form->createView(),
        ]);


    }

    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifierevent{idevent}", name="mod")
     */
    public function update($idevent, EventlRepository $rep, Request $request,FlashyNotifier $flashy)
    {
        $eventl = $rep->find($idevent);
        $form = $this->createForm(EventlType::class, $eventl);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $file = $eventl->getPhoto();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('images_directory'), $filename);
            $eventl->setPhoto($filename);
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $flashy->warning('update successfuly !!', 'http://your-awesome-link.com');
            return $this->redirectToRoute('event_list');

        }
        return $this->render('eventl/update.html.twig', [
            'fupdate' => $form->createView(),
        ]);


    }

    /**
     * @param EventlRepository $repo
     * @return Response
     * @Route ("/AfficheEPublic", name= "AfficheEvenementsPublic")
     */
    public function afficheEvenementsPublic(EventlRepository $repo, Request $request)
    {
        // $repo = $this->getDoctrine()->getRepository(Eventl::class);

        $eventl = $repo->findAll();


        return $this->render('eventl/Affichepublic.html.twig',
            ['eventl' => $eventl]);


    }

    /**
     * @Route("/detailEvent{id}", name="detailEvent")
     */
    public function readevent(int $id,Request $request,Eventl $eventl,EntityManagerInterface $entityManager,EvaluationRepository $evaluationRepository,EventlRepository $rep): Response
    {



        $value = $eventl->getView();
        $value = $value + 1 ;
        $eventl->setView($value);
        $entityManager->flush();

        $idevent = $request->get('idevent');

        $eventl = $rep->find($id);

        $eventl->setNombreParticipants($eventl->getNombreParticipants() - 1);

        $nouveaNombreParticipants = $eventl->getNombreParticipants();

        $entityManager->flush();
        //// initialisation note
        $evaluation = new Evaluation();
        $noteform = $this->createForm(EvaluationType::class,$evaluation);
        $noteform->add('ajouter',SubmitType::class);
        $noteform->handleRequest($request);

        if ($noteform->isSubmitted() && $noteform->isValid()) {

            $evaluation->setIdevent($eventl);
            $em=$this->getDoctrine()->getManager();

            $em->persist($evaluation);
            $em->flush();




            return $this->redirectToRoute('detailEvent', ['id' => $eventl->getIdevent()]);
        }
        $e = $this->getDoctrine()->getRepository(Eventl::class);
        $eventl = $e->find($id);
        return $this->render('eventl/det.html.twig',
            [
                'eventl'=> $eventl,
                'noteform' => $noteform->createView(),
                'evaluations'=> $evaluationRepository->findByNom($eventl->getTitre()),
                "nouveaNombreParticipants" => $nouveaNombreParticipants
            ]);

    }
    /**
     * @Route("/applyajax", name="participer_event")
     */
    public function applyToEvent(Request $request,EntityManagerInterface $entityManager)
    {
        // $eventl= $rep->find($idevent);
        $idevent = $request->get('idevent');
        $eventl = $this->getDoctrine()->getRepository(Eventl::class)->findOneById($idevent);
        // $utilisateur = $this->getDoctrine()->getRepository(Utilisateur::class)->findOneById(1);
        //$eventl->addUser($utilisateur);
        // $utilisateur->addEvent($eventl);

        $eventl->setNombreParticipants($eventl->getNombreParticipants() - 1);

        $nouveaNombreParticipants = $eventl->getNombreParticipants();

        $entityManager->flush();

        return $this->render('eventl/det.html.twig', [
            "nouveaNombreParticipants" => $nouveaNombreParticipants
        ]);

    }






    /**
     * @Route("/addevent/new", name="addeventj")
     */
    public function addjson(Request $req, SerializerInterface $serializerInterface, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $eventl = new Eventl();
        $datedebut = $req->query->get("datedebut");
        $datefin = $req->query->get("datefin");
        $eventl->setTitre($req->get('titre'));
        $eventl->setDescription($req->get('description'));
        $eventl->setDatedebut(new \DateTime($datedebut));
        $eventl->setDateFin(new \DateTime($datefin));

        $eventl->setPhoto($req->get('photo'));
        $em->persist($eventl);
        $em->flush();
        $json = $serializerInterface->serialize($eventl, 'json', ['groups' => 'eventl']);
        return new Response('event aded succefully');
    }



    /**
     * @Route("/Allevents", name="display_reclamation")
     * @Method("PUT")
     */
    public function allRecAction()
    {

        $eventl = $this->getDoctrine()->getManager()->getRepository(Eventl::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($eventl);

        return new JsonResponse($formatted);

    }


    /**
     * @Route("/addeventl", name="addeventnew")
     */
    public function addjsonnew(Request $req,MailerInterface $mailer, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $eventl = new Eventl();
        $nom = $eventl->getTitre();
        $eventl->setTitre($req->get('titre'));
        $eventl->setVille($req->get('ville'));
        $eventl->setPhoto($req->get('photo'));
        $eventl->setDescription($req->get('description'));
        $datedebut = new \DateTime('now');
        $eventl->setDatedebut($datedebut);
        $em->persist($eventl);
        $em->flush();

        $message = (new Email())
            ->from('farah.hasnaoui22@gmail.com')
            ->to('farah.hasnaoui22@gmail.com')
            ->subject("Go gym")
            ->html("<p>bonjour</p><p> une nouvelle evenement a ete ajoute ". $eventl->getTitre()."</p> dans la ville ". $eventl->getVille()."<p></p><p> Merci pour votre Confiance </p>");

        $mailer->send($message);

        $jsonContent = $Normalizer->normalize($eventl,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/updateeventJSON/{id}", name="updatestudentJSON")
     */

    public function updatestudentJSON(Request $req, NormalizerInterface $Normalizer, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $eventl = $em->getRepository(Eventl::class)->find($id);
        $eventl->setTitre($req->get('titre'));
        $eventl->setVille($req->get('ville'));
        $eventl->setDescription($req->get('description'));
        $em->flush();
        $jsonContent = $Normalizer->normalize($eventl, 'json', ['groups' => 'event:read']);
        return new Response("Information updated successfully" . json_encode($jsonContent));;
    }





    /**
     * @Route("/updateevent", name="update_reclamation")
     */
    public function modifierEventl(Request $request ,NormalizerInterface $Normalizer) {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $this->getDoctrine()->getManager()
            ->getRepository(Eventl::class)
            ->find($request->get("id"));

        $reclamation->setTitre($request->get("titre"));
        $reclamation->setVille($request->get("ville"));
        $reclamation->setPhoto($request->get("photo"));
        $em->persist($reclamation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $jsonContent = $Normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
        return new Response("Update successfully".json_encode($jsonContent));

    }





    /**
     * @Route("/deleteeventJSON/{idevent}", name="deleteevent")
     */

    public function deleteReclamationAction(Request $request,NormalizerInterface $Normalizer) {
        $idevent = $request->get("idevent");

        $em = $this->getDoctrine()->getManager();
        $eventl = $em->getRepository(Eventl::class)->find($idevent);
        if($eventl!=null ) {
            $em->remove($eventl);
            $em->flush();


            $jsonContent = $Normalizer->normalize($eventl,'json',['groups'=>'post:read']);
            return new Response("Delete successfully".json_encode($jsonContent));

        }



    }



    /**
     * @Route("/detailevent/{titre}", name="detail_reclamation")
     * @Method("GET")
     */

    //Detail Reclamation
    public function detailReclamationAction(Request $request,$titre,NormalizerInterface $Normalizer)
    {
        $reclamation = $this->getDoctrine()->getManager()->getRepository(Eventl::class)->findByKey($titre);

        $jsonContent = $Normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/Allevent", name="Allevent")
     */
    public function AllVoyageJSON(NormalizerInterface $Normalizer)
    {
        $repository= $this->getDoctrine()->getRepository(Eventl::class);
        $eventl = $repository->findAll();
        $jsonContent = $Normalizer->normalize($eventl,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }


    //trie selon destination

    /**
     * @Route("/order_By_ville", name="order_By_ville" )
     */
    public function order_By_ville(Request $request,EventlRepository $repository,NormalizerInterface $Normalizer): Response
    {
//list of students order By Dest

        $repository= $this->getDoctrine()->getRepository(Eventl::class);
        $eventl = $repository->orderByVille();
        $jsonContent = $Normalizer->normalize($eventl,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/order_By_Nom", name="order_By_Nom" ,methods={"GET"})
     */
    public function order_By_Nom(Request $request,EventlRepository $eventlRepository): Response
    {
//list of students order By Dest
        $EventByNom = $eventlRepository->order_By_Nom();

        return $this->render('eventl/Affiche.html.twig', [
            'eventl' => $EventByNom,
        ]);

        //trie selon Date normal

    }
    /**
     * @Route("/detaileventl/{id}", name="detail_reclamation1")
     * @Method("GET")
     */

    //Detail Reclamation
    public function detailReclamationAction1(Request $request,$id,NormalizerInterface $Normalizer)
    {
        $reclamation = $this->getDoctrine()->getManager()->getRepository(Eventl::class)->find($id);

        $jsonContent = $Normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/addrate", name="addrate")
     */
    public function addjsonnewrate(Request $req, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $rate= new Evaluation();

        $rate->setNote($req->get('note'));

        $idevent = $req->query->get('idevent');
        $rate->setIdevent($this->getDoctrine()->getManager()->getRepository(Eventl::class)->find($idevent));
        $em->persist($rate);
        $em->flush();


        $jsonContent = $Normalizer->normalize($rate, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }
}
