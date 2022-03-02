<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Produit;
use App\Form\ProductType;
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
use App\Repository\UtilisateurRepository;
use App\Entity\Utilisateur;
use Mediumart\Orange\SMS\SMS;
use Mediumart\Orange\SMS\Http\SMSClient;

class ProductController extends AbstractController
{

    #show product coté admin #
    /**
     * @Route("/adminprod", name="adproduct")
     */
    public function listadmin(): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();


        return $this->render('product/list.html.twig', [
            'form' => $form,
        ]);
    }



    #show products coté client #
    /**
     * @Route("/product/list", name="list")
     */
    public function list(): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();
        $var = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();



        return $this->render('shop\shop.html.twig', [
            'form' => $form,
            'var' => $var,

        ]);
    }

    /**
     * @Route("/product/list/cat/{categoryprod}", name="list-cat")
     */
    public function listCat($categoryprod): Response
    {
        $cat = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        $var = $this->getDoctrine()
            ->getRepository(Category::class)
            ->find($categoryprod);
        $fetch = $this->getDoctrine()->getRepository(Produit::class)->findAll();


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
    public function listItem($id): Response
    {
        $form = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->find($id);


        $list = $this->getDoctrine()
            ->getRepository(Produit::class)
            ->findAll();



        return $this->render('shop/item.html.twig', [
            'form' => $form,
            'list' => $list,
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
            $file->move($this->getParameter('upload_directory'), $filename);
            $product->setImage($filename);



            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            foreach ($User as $User){

                $client = SMSClient::getInstance('2Yf3CBy0mWhiS0TcVCWonAOkEUXs6cLF', 'Bgflgfsi6lEN1e2V');
                $sms = new SMS($client);
                $sms->message('Nous avons ajouté un nouveau produit '.$product->getNomprod().'
'.$product->getDescription())
                    ->from('+21627300520')
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
            $file->move($this->getParameter('upload_directory'), $filename);
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
     * @Route("/search" ,name="ajax_search")
     
     */

    public function searchAction(ProduitRepository $produitRepository, Request $request)
    {



        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $product = $produitRepository->findEntitiesByString($requestString);

        if (!$product) {
            $result['product']['error'] = "Post Not found :( ";
        } else {
            $result['product'] = $this->getRealEntities($product);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($product)
    {
        foreach ($product as $product) {
            $realEntities[$product->getIdProduit()] = [$product->getImage(), $product->getNomprod()];
        }
        return $realEntities;
    }

   
}
