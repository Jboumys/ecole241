<?php

namespace App\Controller;

use App\Entity\PieceIdentification;
use App\Form\PieceIdentificationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PieceIdentificationController extends AbstractController
{
    /**
     * @Route("/piece/identification", name="piece_identification")
     */
    public function index()
    {
        return $this->render('piece_identification/index.html.twig', [
            'controller_name' => 'PieceIdentificationController',
        ]);
    }

    /**
     * @Route("/piece/identification/new", name="piece_identification_new")
     */
    public function add(Request $request){

        $pieceIdentify = new PieceIdentification();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(PieceIdentificationType::class, $pieceIdentify);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $em->persist($pieceIdentify);
            $em->flush();

            $this->addFlash('success','Enregistrement affectué!');

        }
        return $this->render('piece_identification/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
