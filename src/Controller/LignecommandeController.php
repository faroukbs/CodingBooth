<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Produit;

use App\Entity\Lignecommande;
use App\Form\LignecommandeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;



class LignecommandeController extends AbstractController
{

    /**
     * @Route("/lignecommande", name="lignecommande")
     */
    public function index(): Response
    {
        return $this->render('lignecommande/index.html.twig', [
            'controller_name' => 'LignecommandeController',
        ]);
    }



    /**
     * @Route("/ligneC", name="affichelignecommande")
     */
    public function afficherlignecommande(Request $request)
    {
        $l = $this->getDoctrine()->getRepository(Lignecommande::class);
        $lignecommande = $l->findAll();


        return $this->render('lignecommande/affichel.html.twig', [
            'ligne' => $lignecommande

        ]);

    }

    /**
     * @Route("/addligneC", name="addticketaddd")
     */
    public function addjsonnewttt(Request $req, NormalizerInterface $Normalizer, EntityManagerInterface $em)
    {
        $em = $this->getDoctrine()->getManager();
        $ligne= new Lignecommande();

        $idcommande=$req->query->get('idcommande');
        $ligne->setIdCommande($this->getDoctrine()->getManager()->getRepository(Commande::class)->find($idcommande));
        $id_produit=$req->query->get('id_produit');
        $ligne->setIdProduit($this->getDoctrine()->getManager()->getRepository(Produit::class)->find($id_produit));
        $quantite = $req->query->get("quantite");
        $ligne->setQuantite($quantite);
        $em->persist($ligne);
        $em->flush();



        $jsonContent = $Normalizer->normalize($ligne,'json',['groups'=>'produit:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/AllLigne", name="AllligneJSON")
     * @Method("PUT")
     */
    public function AllticketJSON(NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Lignecommande::class);
        $lignecommande = $repository->findAll();
        $jsonContent = $Normalizer->normalize($lignecommande, 'json', ['groups' => 'produit:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/deleteLigneJSON/{idlignecommande}", name="deletecom")
     */

    public function deleteReclamationAction(Request $request) {
        $idlignecommande = $request->get("idlignecommande");

        $em = $this->getDoctrine()->getManager();
        $ligne = $em->getRepository(Lignecommande::class)->find($idlignecommande);
        if($ligne!=null ) {
            $em->remove($ligne);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("lignecommande a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id lignecommande invalide.");


    }
    /**
     * @Route("/updateLignec", name="updateds")
     */
    public function modifierL(Request $request ,NormalizerInterface $Normalizer) {
        $em = $this->getDoctrine()->getManager();
        $ligne = $this->getDoctrine()->getManager()
            ->getRepository(Lignecommande::class)
            ->find($request->get("id"));

        $ligne->setQuantite($request->get("quantite"));


        $em->persist($ligne);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $jsonContent = $Normalizer->normalize($ligne,'json',['groups'=>'produit:read']);
        return new Response("Update successfully".json_encode($jsonContent));

    }


    /**
     * @Route("/supprimerLigne{idlignecommande}", name="supprimerligne")
     */
    public function supprimerLigne($idlignecommande){
        $em=$this->getDoctrine()->getManager();
        $ligne=$this->getDoctrine()->getRepository(Lignecommande::class)->find($idlignecommande);
        $em->remove($ligne);
        $em->flush();
        return $this->redirectToRoute('affichelignecommande');

    }


}
