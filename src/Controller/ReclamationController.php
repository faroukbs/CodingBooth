<?php

namespace App\Controller;


use App\Entity\Eventl;
use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\EventlType;
use App\Form\ReclamationType;
use App\Repository\EventlRepository;
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
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        return $this->render('reclamation/contact.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


    /**
     * @Route("/reclamation/add", name="r_add")
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
            return $this->redirectToRoute('r_add');

        }

        return $this->render('reclamation/add.html.twig', [
            'formA'=>$form->createView(),
        ]);
    }




    /**
     * @param ReclamationRepository $rep
     * @return Response
     * @Route("reclamation/list", name="r_list")
     */
    public function afficher(ReclamationRepository $rep): Response
    {
        $reclamations=$rep->findall();
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

        return $this->render('reclamation/reponse.html.twig', [
            'tab' => $reponse,
        ]);
    }

    /**
     * @Route("/recAdmin", name="rec_list_admin")
     */
    public function afficheradmin (ReclamationRepository $rep)
    {
        $reclamation = $rep->findAll();
        return $this->render('reclamation/afficherReclamationBack.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/recAdminadd", name="r_admin_add")
     */

    public function add_admin(Request $req )
    {
        $reclamation=new Reclamation();
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $form->add('Ajouter',SubmitType::class  );
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $eventl->setPhoto($filename);
            $em->persist($eventl);
            $em->flush();
            $this->addFlash(
                'info7',
                'added successfuly !'
            );

            return $this->redirectToRoute('r_admin_list');
        }
        return $this->render('reclamation/add_admin.html.twig', [
            'form' => $form->createView(),
        ]);


    }
    /**
     * @param $id
     * @param ReclamationRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/recAdmin/delete/{id}", name="del")
     */
    public function supprimer($id,ReclamationRepository $rep)
    {
        $reclamation=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        $this->addFlash(
            'info5',
            'delete successfuly !'
        );
        return $this->redirectToRoute('rec_list_admin');

    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/recAdmin/update/{id}", name="mod")
     */
    public function update($id,ReclamationRepository $rep,Request $request){
        $reclamation=$rep->find($id);
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $form->add('Modifier',SubmitType::class );
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {
          
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash(
                'info6',
                'update successfuly !'
            );
            return $this->redirectToRoute('rec_list_admin');

        }
        return $this->render('reclamation/update.html.twig', [
            'fupdate' => $form->createView(),
        ]);


    }




}


