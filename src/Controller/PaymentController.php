<?php

namespace App\Controller;

use Stripe\Checkout\Session;
use App\Services\cart\CartService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;


class PaymentController extends AbstractController
{
    /**
     * @Route("/payment", name="payment")
     */
    public function index(): Response
    {
        return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController',
        ]);
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function chekout(CartService $cartService): Response
    {

        \Stripe\Stripe::setApiKey('sk_test_51KYxUBEnoKwxjHMuZfsz3ipf9XIaoZKlQCMOdXfojbiKEsfaafU65adT2yoroAsBPCaDgUfPxiGWje2B3LOngaMD00l19Zgf0Z');

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Total Commande',
                    ],
                    'unit_amount' => $cartService->getTotal()*100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        return $this->redirect($session->url);


    }


    /**
     * @Route("/error", name="error")
     */
    public function error()
    {
        return $this->render('payment/Error.html.twig');
    }

    /**
     * @Route("/success", name="success")
     */
    public function success()
    {
        return $this->render('payment/Success.html.twig');
    }


}