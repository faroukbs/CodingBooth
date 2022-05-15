<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;



/**
 * @Route("/utilisateur")
 */
class UtilisateurController extends AbstractController
{
    /**
     * @Route("/", name="utilisateur_index", methods={"GET"})
     */
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="utilisateur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/utilisateur/{id}", name="utilisateur_show", methods={"GET"})
     */
    public function show(): Response
    {
        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="utilisateur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            $filename = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'),$filename);
            $utilisateur->setImage($filename);
            $entityManager->flush();

            return $this->redirectToRoute('utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('utilisateur/edit.html.twig', [
            'utilisateur' => $this->getUser(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="utilisateur_delete", methods={"POST"})
     *
     */
    public function delete(Request $request, Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {

        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($utilisateur);
            $entityManager->flush();

        }


        $this->container->get('security.token_storage')->setToken(null);
        $this->container->get('session')->invalidate();

        return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/modifieruser",name="modifieruser")
     */
    public function modifieruser(Request $request)
    {       $id=$request->get('id');
        $nom=$request->query->get("nom");
        $password=$request->query->get("password");
        $email=$request->query->get("email");
        // $numTel=$request->query->get("numTel");
        $em = $this->getDoctrine()->getManager();

        $reclamation = $em->getRepository(Utilisateur::class)->find($id);

        $reclamation->setNom($request->get('nom'));
        $reclamation->setPrenom($request->get('prenom'));
        // $reclamation->setDateNaissance(new \DateTime($request->get('date_naissance')));
        $reclamation->setEmail($request->get('email'));
        // $reclamation->setNumTel($request->get('numTel'));
        /*$reclamation->setPassword(
            $userPasswordEncoder->encodePassword(
                $reclamation,
                $request->get('password')
            )*/

        /* if ($request->files->get('image')!=null);
         {
             $file=$request->files->get('image');
             $fileName=$file->getClientOriginalName();
             $file->move($fileName);
         }*/

        //$reclamation->setImage($request->get('image'));
        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return new JsonResponse("succés", 200);
        }
        catch(\Exception $ex){ return new Response("fail".$ex->getMessage());
        }
    }


    /**
     * @Route("/afficheruser",name="afficheruser")
     */
    public function afficheruser(Request $request, UtilisateurRepository $rep, SerializerInterface $serializer,NormalizerInterface $normalizer):Response
    {    $hey = $this->getUser();
        $utilisateur = $rep->affuser('hey');
        //$regions=$repository->findAll();
        $serializer = new \Symfony\Component\Serializer\Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($utilisateur);
        return new JsonResponse($formatted);

    }


    /**
     * @Route("/deleteuserr/{id}",name="deleteruser")
     */
    public function deleteruserjson(Request $request,UtilisateurRepository $rep,SerializerInterface $serializer,NormalizerInterface $normalizer,Utilisateur $utilisateur, EntityManagerInterface $entityManager)
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {


        }


        $this->container->get('security.token_storage')->setToken(null);
        $this->container->get('session')->invalidate();



        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($utilisateur);
            $em->flush();
            return new JsonResponse("succés", 200);
        }
        catch(\Exception $ex){ return new Response("fail".$ex->getMessage());
        }

    }


    /**
     * @Route("/connexion",name = "connexion")
     */
    public function signin(Request $request)
    {
        $email=$request->query->get("email");
        $password=$request->query->get("password");
        $em = $this->getDoctrine()->getManager();
        $user= $em->getRepository(Utilisateur::class)->findOneBy(['email'=>$email]);
        if($user)
        {
            if(password_verify($password,$user->getPassword()))
            {
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted);
            }else{
                return new Response("password not found");
            }
        }else
        {
            return new Response("user not found");
        }

    }


}
