<?php

namespace App\Controller;

use App\Entity\Salle;
use App\Form\SalleType;
use App\Repository\SalleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;

class SalleController extends AbstractController
{
    /**
     * @Route("/salle", name="salle")
     */
    public function index(): Response
    {
        return $this->render('Affiches.html.twig', [
            'controller_name' => 'SalleController',
        ]);
    }
    /**
     * @Route("/salle/affiche", name="salle_list")
     */
    public function afficher(SalleRepository  $rep)
    {
        $salle = $rep->findAll();
        return $this->render('salle/Affiches.html.twig', [
            'salle' => $salle,
        ]);
    }
    /**
     * @param $id
     * @param SalleRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/salle/affiche/delete/{idsalle}", name="del")
     */
    public function supprimer($idsalle,SalleRepository $rep)
    {
        $salle=$rep->find($idsalle);
        $em=$this->getDoctrine()->getManager();
        $em->remove($salle);
        $em->flush();
        return $this->redirectToRoute('salle_list');

    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/salle/list/add", name="s_add")
     */

    public function add(Request $req )
    {
        $salle=new Salle();
        $form=$this->createForm(SalleType::class,$salle);
        $form->add('Ajouter',SubmitType::class );
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid())
        {
            $file = $form->get('image')->getData();


            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('image_directory'), $filename);
            $salle->SetImage($filename);
            $em=$this->getDoctrine()->getManager();
            $em->persist($salle);
            $em->flush();
            return $this->redirectToRoute('salle_list');
        }
        return $this->render('salle/adds.html.twig', [
            'form' => $form->createView(),
        ]);


    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/salle/update/{idsalle}", name="mod")
     */
    public function update($idsalle,SalleRepository $rep,Request $request){
        $salle=$rep->find($idsalle);
        $form=$this->createForm(SalleType::class,$salle);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('salle_list');

        }
        return $this->render('salle/updates.html.twig', [
            'supdate' => $form->createView(),
        ]);


    }
}
