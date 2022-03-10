<?php

namespace App\Controller;
use App\Form\EventlType;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request,\Swift_Mailer $mailer){
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {

            $contact = $form->getData();
            $message = (new \Swift_Message('Mail Tuneasy User'))
                ->setFrom($contact['email'])->setTo('farah.hasnaoui22@gmail.com')
                ->setBody($this->renderView('email/contact.html.twig',compact('contact')),'text/html');
            $mailer->send($message);
            $this->addFlash('message','le message a été bien envoyé!');

            return $this->redirectToRoute('event_list');
        }

        return $this->render('contact/index.html.twig', [
            'contactform' => $form->createView()
        ]);
    }


    }

