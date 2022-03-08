<?php

namespace App\Controller;

use App\Repository\CommandeRepository;
use App\Entity\Commande;
use App\Entity\Lignecommande;
use App\Repository\LignecommandeRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;


class PdfController extends AbstractController
{
    /**
     * @Route("/pdf/{idcommande}", name="pdf")
     */
    public function index($idcommande,CommandeRepository $rep, LignecommandeRepository $ligneCommande): Response
    {

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);
        $pdfOptions->setIsHtml5ParserEnabled(true);



        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $dompdf->getOptions()->getChroot(); // something like 'C:\\laragon\\www\\your-local-website\\vendor\\dompdf\\dompdf'



        $commande=$rep->find($idcommande);
        $ligneCommande = $ligneCommande->findByidcommande($idcommande);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('commande/invoice.html.twig', [
            'tab' => $commande,
            'tab1'=>$ligneCommande

        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');



        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("facture.pdf", [
            "Attachment" => true
        ]);

    }



}