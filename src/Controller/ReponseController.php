<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Entity\Reclamation;
use Symfony\Component\Mime\Address;
use App\Repository\ReponseRepository;
use App\Repository\DemandesRepository;
use App\Repository\ReclamationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReponseController extends AbstractController
{
    /**
     * @Route("/reponse", name="reponse")
     */
    public function index(): Response
    {
        return $this->render('reponse/index.html.twig', [
            'controller_name' => 'ReponseController',
        ]);
    }




      /**
     * @param ReclamationRepository $rep
     * @return Response
     * @Route("admin/reponse/recList", name="list_reclamation")
     */
    public function afficher(ReclamationRepository $rep,DemandesRepository $repp, Request $request, PaginatorInterface $paginator): Response
    {
        $demandes=$repp->findAll();

        $reclamations=$rep->findAll();
        $donnees = $paginator->paginate(
            $reclamations,
            $request->query->getInt('page', 1), 
            5 
        );
        return $this->render('reponse/listReclamationAdmin.html.twig', [
            'tab' => $donnees,
            'demandes'=>$demandes,
        ]);
    }

     /**
     * @Route("/response/deleteRec/{id}", name="reclam_delete")
     */

    public function Delete_reclamation($id, ReclamationRepository $rep){
        $response=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($response);
        $em->flush();

        return $this->redirectToRoute('list_reclamation');
    }

    

      /**
     * @param ReponseRepository $rep
     * @return Response
     * @Route("admin/reponse/list", name="reponse_list")
     */
    public function afficher_reponses(ReponseRepository $rep,DemandesRepository $repp, Request $request, PaginatorInterface $paginator): Response
    {
        $demandes=$repp->findAll();

        $reponses=$rep->findAll();
        $donnees = $paginator->paginate(
            $reponses,
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('reponse/listReponses.html.twig', [
            'tab1' => $donnees,
            'demandes'=>$demandes,
        ]);
    }

     /**
     * @return Reponse
     * @Route("/response/delete/{id}", name="response_delete")
     */

    public function Delete_reponse($id, ReponseRepository $rep){
        $response=$rep->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($response);
        $em->flush();

        return $this->redirectToRoute('reponse_list');
    }


    /**
     * @Route("reponse/update/{id}", name="reponse_update")
     */
    public function update_reponse(Request $request, $id, ReponseRepository $rep,DemandesRepository $repp)
    {
        $demandes=$repp->findAll();
       
        $reponse=$rep->find($id);

        $form=$this->createForm(ReponseType::class,$reponse);
       
        $form->add('update', SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'Your Response is added successfully');

            return $this->redirectToRoute('reponse_list');
        }
        return $this->render('reponse/update.html.twig', [
            'formA'=>$form->createView(),
            'demandes'=>$demandes,
        ]);
    }

}
