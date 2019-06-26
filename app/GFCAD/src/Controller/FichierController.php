<?php

namespace App\Controller;

use App\Entity\Dossier;
use App\Entity\Fichier;
use App\Form\FichierType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;



class FichierController extends AbstractController
{
    /**
     * @Route("/fichier", name="fichier")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Fichier::class);
        $fichier = $repository->findAll();
        return $this->render('fichier/index.html.twig', [
            'fichiers' => $fichier
        ]);
    }

    /**
     * @Route("/fichier/new/{id}", name="fichier_new")
     */
    public function newAction(Request $request){

        $fichier = new Fichier();
        $dossier = new Dossier();

        $em = $this->getDoctrine()->getManager();

        $id = $request->get('id');
        $dossier = $em->getRepository(Dossier::class)->find($id);
        $dossier->setDateMAJ(new \DateTime());
        
        $form = $this->createForm(FichierType::class, $fichier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $fichier->setDossier($dossier);
            $em->persist($dossier);
            $em->persist($fichier);
            $em->flush();
            $this->addFlash('success','Fichier savegardé dans le dossier!');

            return $this->redirectToRoute('fichier_new', array('id'=>$dossier->getId()));
        }

        return $this->render('fichier/new.html.twig', [
            'form' => $form->createView()
        ]);

    }


    /**
     * @Route("/fichier/show/{id}", name="fichier_show")
     */
    public function show(Fichier $fichier){

        $em = $this->getDoctrine()->getManager();
        $id = $fichier->getId();
        $fichier = $em->getRepository(Fichier::class)->find($id);

        return $this->render('fichier/show.html.twig',[
            'fichier'=> $fichier
        ]);
    }


}
