<?php


namespace App\Controller;



use App\Entity\Cours;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;



class CoursController extends AbstractController
{
    /**
     * @Route("/cours", name="cours")
     */
    public function affihceclient(): Response
    {
        $cours = $this->getDoctrine()
        ->getRepository(Cours::class)
        ->findAll();
        return $this->render('cours/adhaffiche.html.twig', [
            'controller_name' => 'CoursController',
            'cours' => $cours,
        ]);
    }
      /**
     * @Route("/cours/affiche", name="cours_list")
     */
    public function afficher(CoursRepository  $rep)
    {
        $cours = $rep->findAll();
        return $this->render('cours/Affichec.html.twig', [
            'cours' => $cours,
        ]);
    }
   /**
     * @param $idcours
     * @param CoursRepository $rep
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("cours/delete/{idcours}", name="delc")
     */
    public function supprimer($idcours,CoursRepository $rep)
    {
        $cours=$rep->find($idcours);
        $em=$this->getDoctrine()->getManager();
        $em->remove($cours);
        $em->flush();
        return $this->redirectToRoute('cours_list');

    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/cours/list/add", name="add")
     */

    public function add(Request $req )
    {
        $cours=new Cours();
        $form=$this->createForm(CoursType::class,$cours);
        $form->add('Ajouter',SubmitType::class );
        $form->handleRequest($req);
        if($form->isSubmitted() && $form->isValid()){

            $file = $form->get('image')->getData();


            $filename = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $filename);
            $cours->SetImageCours($filename);
           
            $em=$this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
            return $this->redirectToRoute('cours_list');
        }
        return $this->render('cours/addc.html.twig', [
            'form' => $form->createView(),
        ]);


    }
    /**
     * @param Request $req
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/cours/update/{idcours}", name="c_mod")
     */
    public function update($idcours,CoursRepository $rep,Request $request){
        $cours=$rep->find($idcours);
        $form=$this->createForm(CoursType::class,$cours);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('cours_list');

        }
        return $this->render('cours/updatec.html.twig', [
            'cupdate' => $form->createView(),
        ]);

}
    }
