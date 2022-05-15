<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use App\Repository\CommandeRepository;
use App\Security\UtilisateurAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin/utilisateurs", name="utilisateur_showALL")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'AdminController'
        ]);
    }


    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function searchUsers(UtilisateurRepository $rep,Request $request, PaginatorInterface $paginator): Response
    {
        $term = $request->get("term", false);
        if($term && $term !== ""){
            $donnees = $rep->findEntitiesByString($term);
        }else{
            $donnees = $this->getDoctrine()->getRepository(Utilisateur::class)->findBy([], ['nom' => 'desc']);
        }
        $utilisateurs = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6);
        return $this->render('utilisateur/tableau_utilisateurs.html.twig', [
            'controller_name' => 'AdminController',
            'utilisateurs' => $utilisateurs
        ]);
    }

    /**
     * @Route("/admin", name="admin", methods={"GET"})
     */
    public function showALL(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em->getRepository(Utilisateur::class)->findAll();
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    /**
     * @Route("/modifier/{id}",name="modifierUtilisateur")
     * Method({"GET", "POST"})
     */
    public function update($id, Request $request): Response
    {
        $utilisateur = new utilisateur();
        $utilisateur = $this->getDoctrine()
            ->getRepository(utilisateur::class)
            ->find($id);


        $form = $this->createformbuilder($utilisateur)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', TextType::class)
            ->add('num_tel', IntegerType::class)
            ->add('image', FileType::class, [
                'mapped' => false,
                'label' => ' please upload a image'

            ])
            ->add('Edit', SubmitType::class, [
                "label_format" => " modifier ",
                "attr" => [

                    "class" => "btn btn-danger"

                ]

            ])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('image_directory'), $filename);
            $utilisateur->setImage($filename);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('utilisateur_showALL');
        }
        return $this->render('admin/modifierUtilisateur.html.twig', [
            'form' => $form->createView(),


        ]);
    }

    /**
     * @Route("/Delete/{id}" ,name="delete_admin")
     *
     */
    public function Delete(Request $request, $id)
    {
        $utilisateur = $this->getDoctrine()
            ->getRepository(utilisateur::class)
            ->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($utilisateur);
        $entityManager->flush();


        return $this->redirectToRoute('utilisateur_showALL');

    }

    /**
     * @Route("/search" ,name="ajax_search")
     */

    public function searchAction(UtilisateurRepository $utilisateurRepository, Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $users = $utilisateurRepository->findEntitiesByString($requestString);
        return new JsonResponse($users);
    }

    public function getRealEntities($user)
    {
        foreach ($user as $user) {
            $realEntities[$user->getId()] = [$user->getImage(), $user->getNom(), $user->getNumTel()];
        }
        return $realEntities;
    }


    /**
     * @Route("utilisateur/{id}/desactiver", name="desactiver-user")
     */
    public function desactiverUser($id)
    {
        $user = $this->getDoctrine()->getRepository(utilisateur::class)->find($id);
        $user->setIsVerified(0);
        $user->setRoles(["ROLE_USER", "ROLE_BLOQ"]);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('admin');
    }

    /**
     * @Route("utilisateur/{id}/activer", name="activer-user")
     */
    public function activerUser($id)
    {
        $user = $this->getDoctrine()->getRepository(Utilisateur::class)->find($id);
        $user->setIsVerified(1);
        $user->setRoles(["ROLE_USER"]);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('admin');
    }
     /**
     * @Route("/stats", name="stats")
     */
    public function statistiques(CommandeRepository $comRepo){
        // On va chercher toutes les commandes

        $commandes = $comRepo->countByDate();

        $dates = [];
        $commandesCount = [];


        // On va chercher le nombre de commande par date
        foreach($commandes as $Commande){
            $dates[] = $Commande ['dateCommande'];
            $commandesCount[] = $Commande['count'];
        }

        //dump($commandesCount);

        return $this->render('admin/stats.html.twig', [
            'dates' => json_encode($dates),
            'commandesCount' => json_encode($commandesCount),
        ]);
    }


}