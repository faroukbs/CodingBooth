<?php

namespace App\Controller;
use App\Entity\Evaluation;

use App\Entity\EventLike;
use App\Form\EventlType;
use App\Form\EvaluationType;
use App\Entity\Eventl;
use App\Entity\Utilisateur;
use App\Repository\EventlRepository;
use App\Repository\EventLikeRepository;
use App\Repository\EvaluationRepository;

use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\UtilisateurRepository;
use MercurySeries\FlashyBundle\FlashyNotifier;
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
            3 // Nombre de résultats par page
        );
        return $this->render('eventl/Affiche.html.twig', [
            'eventl' => $eventl,
        ]);

    }

    /**
     * @param $idevent
     * @param EventlRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/eventldelete/{idevent}", name="delevent")
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
            $file->move($this->getParameter('image_directory'), $filename);
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
     * @Route ("/modifierevent{idevent}", name="modevent")
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
            $file->move($this->getParameter('image_directory'), $filename);
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
     * @Route("/eventlist", name="eventlist")
     */
    public function afficherjson(EventlRepository $rep, SerializerInterface $serializerInterface)
    {


        $eventl = $rep->findAll();
        $json = $serializerInterface->serialize($eventl, 'json', ['groups' => 'eventl']);


        dump($json);
        die;

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
     * @Route("/event/{id}/like", name="event_like")
     */
    public function like(Eventl $eventl, EntityManagerInterface $entityManager, EventLikeRepository $eventLikeRepository): Response
    {
        $user=$this->getUser();

        if (!$user)  return $this->json(['code' => 403, 'message' => 'Unauthorized'], 403);

        if($eventl->isLikedByUser($user)){
            $like=$eventLikeRepository->findOneBy([
                'Eventl'=>$eventl,
                'Utilisateur'=>$user
            ]);
            $entityManager->remove($like);
            $entityManager->flush();
            return $this->json(['code' => 200, 'message' => 'like supprimé','likes' => $eventLikeRepository->count(['Eventl'=>$eventl])],200);
        }
        $like=new EventLike();
        $like->setEvent($eventl)
            ->setUser($user);
        $entityManager->persist($like);
        $entityManager->flush();
        return $this->json(['code' => 200, 'message' => 'like ajoutée','likes'=> $eventLikeRepository->count(['Eventl'=>$eventl])],200);

    }

}