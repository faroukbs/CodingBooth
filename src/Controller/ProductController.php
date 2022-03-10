<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Produit;
use App\Entity\Note;
use App\Form\ProductType;
use App\Form\NoteType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
use App\Repository\NoteRepository;
use App\Repository\UtilisateurRepository;
use App\Entity\Utilisateur;
use Mediumart\Orange\SMS\SMS;
use Mediumart\Orange\SMS\Http\SMSClient;
use Knp\Component\Pager\PaginatorInterface;
use Dompdf\Dompdf;
use Dompdf\Options;


class ProductController extends AbstractController
{

    #show product coté admin #
    /**
     * @Route("/adminprod", name="adproduct")
     */
    public function listadmin(Request $request,PaginatorInterface $paginator): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();
            $form = $paginator->paginate(
                $form, /* query NOT result */
                $request->query->getInt('page', 1), /*page number*/
            5 /*limit per page*/
            );


        return $this->render('product/list.html.twig', [
            'form' => $form,
        ]);
    }



    #show products coté client #
    /**
     * @Route("/product/list", name="list")
     */
    public function list( Request $request,PaginatorInterface $paginator): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();
        $var = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

            
            $form = $paginator->paginate(
                $form, /* query NOT result */
                $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
            );


        return $this->render('shop\shop.html.twig', [
            'form' => $form,
            'var' => $var,

        ]);
    }

    /**
     * @Route("/product/list/cat/{categoryprod}", name="list-cat")
     */
    public function listCat(Request $request,$categoryprod,PaginatorInterface $paginator): Response
    {
        $cat = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        $var = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($categoryprod);
        $fetch = $this->getDoctrine()->getRepository(Produit::class)->findAll();

        $fetch = $paginator->paginate(
            $fetch, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
        3 /*limit per page*/
        );


        return $this->render('shop\shopCat.html.twig', [
            'cat' => $cat,
            'var' => $var,
            'form' => $fetch,
        ]);
    }
    #show item coté client #
    /**
     * @Route("/product/list/{id}", name="list-item")
     */
    public function listItem(Request $request,ProduitRepository $rep,NoteRepository $noteRepository,$id): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->find($id);


        $list = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();
        
        $note = new Note();      
        $noteform = $this->createForm(NoteType::class,$note);
        $noteform->add('ajouter',SubmitType::class);
        $noteform->handleRequest($request);

        

        if ($noteform->isSubmitted() && $noteform->isValid()) {
           
            $note->setIdProduit($form);
            $em=$this->getDoctrine()->getManager();
            
            $em->persist($note);
            $em->flush();
            
            
            

            return $this->redirectToRoute('list-item', ['id' => $form->getIdProduit()]);
        }



        return $this->render('shop/item.html.twig', [
            'form' => $form,
            'list' => $list,
            'noteform' => $noteform->createView(),
            'Notes'=> $noteRepository->findByNom($form->getNomprod()),
        ]);
    }
    #add product #
    /**
     * @Route("/product/new", name="new")
     * Method({"GET", "POST"})
     */
    public function new(Request $request): Response
    {
        $product = new Produit();
        $form = $this->createForm(ProductType::class, $product);
        $User = $this->getDoctrine()->getRepository(Utilisateur::class)->findAll();


        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image')->getData();


            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('image_directory'), $filename);
            $product->setImage($filename);



            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            foreach ($User as $User){

                $client = SMSClient::getInstance('nEoxkRRL52MtHzUNAoaXc0ngnNVl9KDC', 'zSB1YIu2CSwoLnBL');
                $sms = new SMS($client);
                $sms->message('Nous avons ajouté un nouveau produit '.$product->getNomprod().'
'.$product->getDescription())
                    ->from('+21651464577')
                    ->to($User->getNumTel())
                    ->send();
            }
            return $this->redirectToRoute('list');
        }

        return $this->render('product/add.html.twig', [
            'form' => $form->createView(),

        ]);
    }

    #update product #

    /**
     * @Route("/product/edit/{id}",name="update_product")
     * Method({"GET", "POST"})
     */
    public function update($id, Request $request)
    {
        $product = new produit();
        $product = $this->getDoctrine()
            ->getRepository(produit::class)
            ->find($id);


        $form = $this->createformbuilder($product)
            ->add('nomprod', TextType::class)
            ->add('description', TextType::class)
            ->add('prix', MoneyType::class)
            ->add('quantity', IntegerType::class)
            ->add('CategoryProd', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'nom',
                'label' => 'Category'
            ])


            ->add('image', FileType::class, [
                'mapped' => false,
                'label' => ' please upload a image'

            ])
            ->add('edit', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('image_directory'), $filename);
            $product->setImage($filename);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('list');
        }
        return $this->render('Product/update.html.twig', [
            'form' => $form->createView(),


        ]);
    }

    #delete product #
    /**
     * @Route("/product/Delete/{id}" ,name="sup_product")
     *Method({"DELETE"})
     */
    public function Delete(Request $request, $id)
    {
        $product = $this->getDoctrine()
            ->getRepository(produit::class)
            ->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($product);
        $entityManager->flush();


        return $this->redirectToRoute('adproduct');
    }

    /**
     * @Route("/adminprod/search" ,name="ajax_search")
     
     */

    public function searchUsers(ProduitRepository $rep,Request $request, PaginatorInterface $paginator): Response
    {
        $term = $request->get("term", false);
        if($term && $term !== ""){
            $donnees = $rep->findEntitiesByString($term);
        }else{
            $donnees = $this->getDoctrine()->getRepository(Produit::class)->findBy([], ['nomprod' => 'desc']);
        }
        $form = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6);
        return $this->render('product\list.html.twig', [
            'controller_name' => 'ProductController',
            'form' => $form
        ]);
    }





    ///pdf genrator

    /**
     * @Route("/pdf", name="pdf")
     */
    public function pdfgenrator(ProduitRepository $ProduitRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $product=$ProduitRepository->findAll();
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('product\pdf.html.twig', [
            'product' => $product,
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A3', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Product.pdf", [
            "Attachment" => false
        ]);

    
        
    }

   
}
