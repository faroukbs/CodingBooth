<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');

    }




    /**
     * @Route("/loginJSON", name="loginJSON")
     */
    public function connexion(Request $request ,UtilisateurRepository $rep): Response
    {
        $email= $request->query->get('email');
        $password = $request->query->get('password');
        $user=$rep->findOneBy(['email'=>$email]);
        if($user){
            if(password_verify($password,$user->getPassword())){
                $serializer = new \Symfony\Component\Serializer\Serializer([new ObjectNormalizer()]);
                $formatted=$serializer->normalize($user);
                return new JsonResponse($formatted);

            }
            else return new Response("Password not found");
        }
        else return new Response("User not found");
    }





}