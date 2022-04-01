<?php

namespace App\Controller;
use phpDocumentor\Reflection\DocBlock\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Repository\ReclamationRepository;
use App\Entity\Reclamation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="app_reclamation")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }
    /**
     *@Route("/AllReclamations", name="AllReclamations")
     * @Method({"GET"})
     */
    public function AllReclamations(Request $request, NormalizerInterface $normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation = $repository->findAll();
        $jsonContent = $normalizer->normalize($reclamation, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     *@Route("/Reclamation/{id}", name="Reclamation_ID")
     */
    public function ReclamationId(Request $request,$id, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);
        $jsonContent = $normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     *@Route ("/addReclamationJSON", name="addReclamationJSON")
     * @Method({"POST"})
     */
    public function addReclamationJSON(Request $request, NormalizerInterface $normalizer)
    {

        $reclamation = new Reclamation();
        $em = $this->getDoctrine()->getManager();
        $reclamation->setSubject($request->get('subject'));
        $reclamation->setName($request->get('name'));
        $reclamation->setEmail($request->get('email'));
        $reclamation->setMessage($request->get('message'));
        $reclamation->setType($request->get('type'));
        $reclamation->setIdCommande($request->get('idCommande'));
        $reclamation->setEtat($request->get('etat'));



        $em->persist($reclamation);
        $em->flush();
        $jsonContent = $normalizer->normalize($reclamation, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }








    /**
     *@Route("/updateReclamationJSON/{id}", name="updateReclamationJSON")
     * @Method({"PUT"})
     */
    public function updateReclamationJSON(Request $request,NormalizerInterface $normalizer,$id)
    {
        $parametersAsArray = [];
        if ($content = $request->getContent()) {
            $parametersAsArray = json_decode($content, true);
        }
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);
        $reclamation->setSubject($parametersAsArray['subject']);
        $reclamation->setName($parametersAsArray['name']);
        $reclamation->setEmail($parametersAsArray['email']);
        $reclamation->setMessage($parametersAsArray['message']);
        $reclamation->setType($parametersAsArray['type']);
        $reclamation->setIdCommande($parametersAsArray['idCommande']);
        $reclamation->setEtat($parametersAsArray['etat']);
        $em->flush();
        $jsonContent = $normalizer->normalize($reclamation, 'json',['groups'=>'post:read']);
        return new Response("Information updated successfully".json_encode($jsonContent));
    }


    /**
     * @Route("/deleteReclamationJSON/{id}")
     * @Method({"DELETE"})
     *
     *
     */

    public function deleteReclamationJSON(Request $request, NormalizerInterface $normalizer, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclamation::class)->find($id);
        $em->remove($reclamation);
        $em->flush();
        $jsonContent = $normalizer->normalize($reclamation,'json',['groups'=>'post:read']);
        return new Response("Reclamation deleted successfully".json_encode($jsonContent));
    }

}
