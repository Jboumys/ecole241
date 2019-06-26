<?php

namespace App\Controller;

use App\Entity\Dossier;
use App\Entity\Parcelle;
use App\Form\ParcelleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ParcelleController extends AbstractController
{
    /**
     * @Route("/parcelle", name="parcelle")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getRepository(Parcelle::class);
        $parcelle = $em->findAll();

        return $this->render('parcelle/index.html.twig', [
            'parcelle' => $parcelle,
        ]);
    }

    /**
     * @Route("/parcelle/new/{id}", name="parcelle_new")
     */
    public function add(Request $request)
    {
        $parcelle = new Parcelle();
        $dossier = new Dossier();

        $em = $this->getDoctrine()->getManager();

        $id = $request->get('id');
        $dossier = $em->getRepository(Dossier::class)->find($id);
        $dossier->setDateMAJ(new \DateTime());

        $form = $this->createForm(ParcelleType::class, $parcelle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $parcelle->setDossier($dossier);
            $em->persist($dossier);
            $em->persist($parcelle);
            $em->flush();

            $this->addFlash('success','Enregistrement affectué!');

            return $this->redirectToRoute('parcelle_new', array('id'=>$parcelle->getId()));
        }

        return $this->render('parcelle/new.html.twig', [
            'parcelle' => $parcelle,
            'form' => $form->createView()
        ]);
    }
}
