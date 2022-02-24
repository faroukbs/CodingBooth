<?php

namespace App\Controller;

use App\Entity\Eventl;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
    public function index(): Response
    {
        return $this->render('base-back/admin.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function afficher():Response
    {

        return $this->render('about/about.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function afficher1():Response
    {

        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/course", name="course")
     */
    public function afficher2():Response
    {

        return $this->render('course/courses.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function afficher3():Response
    {

        return $this->render('login/login.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/signup", name="signup")
     */
    public function afficher4():Response
    {

        return $this->render('signup/inscription.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/produit", name="produit")
     */
    public function afficher5():Response
    {

        return $this->render('produit/itemshop.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/shop", name="shop")
     */
    public function afficher6():Response
    {

        return $this->render('shop/shop.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    /**
     * @Route("/home", name="home")
     */
    public function afficher7():Response
    {

        return $this->render('base-front.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }



}
