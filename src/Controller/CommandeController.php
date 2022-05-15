<?php

namespace App\Controller;


use App\Entity\Commande;
use App\Controller\CommandeRepository;
use App\Form\CommandeBackType;
use App\Form\CommandeType;
use App\Controller\EntityManagerInterface;
use App\Services\cart\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType ;
use Symfony\Component\Form\Extension\Core\Type\TextType ;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;

class CommandeController extends AbstractController
{
    /******************Ajouter Commande*****************************************/
    /**
     * @Route("/addCom", name="add_Comm")
     * @Method("POST")
     */

    public function ajouterCommandeAction(Request $request, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = new Commande();

        $commande->setNomClient($request->get('nom'));
        $commande->setPrenomClient($request->get('prenom'));
        $commande->setTelephone($request->get('telephone'));
        $commande->setAdresse($request->get('adresse'));
        $commande->setMontant($request->get('montant'));
        $commande->setModePaiement($request->get('mode_paiement'));

        $em->persist($commande);
        $em->flush();
        $json = $Normalizer->normalize($commande, 'json', ['groups' => 'produit:read']);
        return new Response('commande aded succefully');
    }

    /******************Supprimer commande*****************************************/
    /**
     * @Route("/deleteCommandeJSON/{idcommande}", name="deletecommande")
     */

    public function deletecommandeAction(Request $request, NormalizerInterface $Normalizer)
    {
        $idcommande = $request->get("idcommande");

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository(Commande::class)->find($idcommande);
        if ($commande != null) {
            $em->remove($commande);
            $em->flush();


            $jsonContent = $Normalizer->normalize($commande, 'json', ['groups' => 'produit:read']);
            return new Response("Delete successfully" . json_encode($jsonContent));

        }

    }

    /**
     * @Route("/updateCommande", name="update_commande")
     */
    public function modifierCommande(Request $request ,NormalizerInterface $Normalizer) {
        $em = $this->getDoctrine()->getManager();
        $commande = $this->getDoctrine()->getManager()
            ->getRepository(Commande::class)
            ->find($request->get("id"));


        $nom=$request->get("nomClient");
        $prenom=$request->get("prenomClient");

        $commande->setNomClient($nom);
        $commande->setPrenomClient($prenom);


        $em->persist($commande);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $jsonContent = $Normalizer->normalize($commande,'json',['groups'=>'produit:read']);
        return new Response("Update successfully".json_encode($jsonContent));


    }








    /******************affichage commande*****************************************/

    /**
     * @Route("/Allcom", name="display_commande")
     * @Method("PUT")
     */
    public function allCommande()
    {

        $commande = $this->getDoctrine()->getManager()->getRepository(Commande::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($commande);

        return new JsonResponse($formatted);

    }

    /******************Detail commande*****************************************/

    /**
     * @Route("/detailCommande/{idcommande}", name="detail_comm")
     * @Method("GET")
     */


    public function detailcommandeAction(Request $request)
    {
        $idcommande = $request->get("idcommande");

        $em = $this->getDoctrine()->getManager();
        $commande = $this->getDoctrine()->getManager()->getRepository(Commande::class)->find($idcommande);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($nom_client) {
            return $nom_client->getNomClient();
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($commande);
        return new JsonResponse($formatted);
    }



    /**
     * @Route("/back", name="back")
     */
    public function index(): Response
    {

        return $this->render('base-back/admin.html.twig', [

        ]);
    }


    /**
     * @Route("/listC", name="commande")
     */
    public function index1(): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();

        return $this->render('commande/list.html.twig', [
            'form' => $form,
        ]);
    }
    /**
     * @Route("/afficheC", name="Affiche_commande")
     */
    public function affiche(): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->findAll();

        return $this->render('commande/affiche.html.twig', [
            'form' => $form,
        ]);
    }


    /**
     * @Route("/addC" ,name="addCommande")
     *Method({"GET", "POST"})
     */
    public function new(Request $request)
    {
        $Commande = new Commande();
        $form = $this->createForm(CommandeType::class,$Commande);
        $form->add('Ajouter',SubmitType::class) ;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Commande= $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();
            return $this->redirectToRoute('commande');
        }
        return $this->render('commande/add.html.twig', [
            'form' => $form->createView() ,

        ]);

    }





    /**
     * @Route("/ajouterC" ,name="ajout")
     *Method({"GET", "POST"})
     */
    public function add(Request $request,CartService $cartservice )
    {
        $dataPanier=$cartservice->getFullCart();
        $total=$cartservice->getTotal();
        $Commande = new Commande();
        $form = $this->createForm(CommandeBackType::class,$Commande);
        $form->add('Ajouter',SubmitType::class) ;
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Commande= $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Commande);
            $entityManager->flush();
            $this->addFlash(
                'info',
                'added successfuly !'
            );

            return $this->redirectToRoute('checkout');
        }

        return $this->render('commande/ajoute.html.twig', [
            'formA' => $form->createView(),
            'total'=>$total,
            'elements'=>$dataPanier
        ]);

    }


    /**
     * @Route("/DeleteC{idcommande}" ,name="AdminDelete")
     *Method({"DELETE"})
     */
    public function Delete(Request $request,$idcommande)
    {
        $Commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($idcommande);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Commande);
        $entityManager->flush();


        return $this->redirectToRoute('commande');
    }

    /**
     * @Route("/editC{idcommande}",name="AdminUpdate")
     * Method({"GET", "POST"})
     */
    public function update($idcommande, Request $request)
    {
        $Commande = new Commande();
        $Commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($idcommande);

        $form = $this->createformbuilder($Commande)
            ->add('etat_commande',IntegerType::class)
            ->add('Edit',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('commande');
        }
        return $this->render('commande/update.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/modifierC{idcommande}",name="UserModify")
     * Method({"GET", "POST"})
     */
    public function updateUser($idcommande, Request $request)
    {
        $Commande = new Commande();
        $Commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($idcommande);

        $form = $this->createformbuilder($Commande)
            ->add('telephone',TextType::class)
            ->add('adresse',TextType::class)
            ->add('Edit',SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('Affiche_commande');
        }
        return $this->render('commande/updateUser.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/DeleteU{idcommande}" ,name="UserDelete")
     *Method({"DELETE"})
     */
    public function DeleteCommande(Request $request,$idcommande)
    {
        $Commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($idcommande);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Commande);
        $entityManager->flush();


        return $this->redirectToRoute('Affiche_commande');
    }


    /**
     * @Route("/email{id}", name="email")
     */
    public function index2(Request $request,\Swift_Mailer $mailer,$id){


        $commande = $this->getDoctrine()->getRepository(Commande::class)->findOneBy(['idcommande' => $id]);


        $Date = $commande->getDate();
        $montant= $commande->getMontant();

        $nom_client = $commande->getNomClient();
        $prenom_client = $commande->getPrenomClient();





        $message = (new \Swift_Message('Mail Gogym User'))
            ->setFrom('gogympi@gmail.com')->setTo('gogympi@gmail.com')
            ->setBody($this->renderView('email/email.html.twig',
                ['nom_client' => $nom_client,
                    'prenom_client' => $prenom_client,

                    'Date' => $Date,

                    'montant' => $montant]

            ),
                'text/html'

            );
        $mailer->send($message);
        $this->addFlash('message','le message a été bien envoyé!');

        return $this->redirectToRoute('Affiche_commande');
    }




}

