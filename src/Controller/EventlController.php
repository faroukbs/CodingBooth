<?php

namespace App\Controller;
use App\Form\EventlType;
use App\Entity\Eventl;
use App\Repository\EventlRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class EventlController extends AbstractController
{
    /**
     * @Route("/eventl", name="eventl")
     */
    public function index(): Response
    {
        return $this->render('base-front.html.twig', [
            'controller_name' => 'EventlController',
        ]);
    }
    /**
     * @Route("/eventlAdmin", name="event_list")
     */
    public function afficher(EventlRepository $rep)
    {
        $eventl = $rep->findAll();
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
    public function supprimer($idevent,EventlRepository $rep)
    {
        $eventl=$rep->find($idevent);
        $em=$this->getDoctrine()->getManager();
        $em->remove($eventl);
        $em->flush();
        $this->addFlash(
            'info5',
            'delete successfuly !'
        );
        return $this->redirectToRoute('event_list');

    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/eventladd", name="r_add")
     */

    public function add(Request $req )
    {
        $eventl=new Eventl();
        $form=$this->createForm(EventlType::class,$eventl);
        $form->add('Ajouter',SubmitType::class  );
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {
            $file = $eventl->getPhoto();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$filename);
            $em=$this->getDoctrine()->getManager();
            $eventl->setPhoto($filename);
            $em->persist($eventl);
            $em->flush();
            $this->addFlash(
                'info7',
                'added successfuly !'
            );

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
    public function update($idevent,EventlRepository $rep,Request $request){
        $eventl=$rep->find($idevent);
        $form=$this->createForm(EventlType::class,$eventl);
        $form->add('Modifier',SubmitType::class );
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {
            $file = $eventl->getPhoto();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$filename);
            $eventl->setPhoto($filename);
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash(
                'info6',
                'update successfuly !'
            );
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
    public function afficheEvenementsPublic(EventlRepository  $repo,Request $request){
        // $repo = $this->getDoctrine()->getRepository(Eventl::class);

        $eventl= $repo->findAll();


        return $this->render('eventl/Affichepublic.html.twig',
            ['eventl'=>$eventl]);


    }
    /**
     * @Route("/detailEvent{id}", name="detailEvent")
     */
    public function readRestaurant(int $id): Response
    {

        $e=$this->getDoctrine()->getRepository(Eventl::class);
        $eventl=$e->find($id);
        return $this->render('eventl/det.html.twig', array('eventl'=>$eventl));

    }
}
