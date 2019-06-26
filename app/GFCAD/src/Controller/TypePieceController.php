<?php

namespace App\Controller;

use App\Entity\TypePiece;
use App\Form\TypePieceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TypePieceController extends AbstractController
{
    /**
     * @Route("/type/piece", name="type_piece")
     */
    public function index()
    {
        return $this->render('type_piece/index.html.twig', [
            'controller_name' => 'TypePieceController',
        ]);
    }

    /**
     * @Route("/type/piece/new", name="type_piece_new")
     */
    public function add(Request $request){

        $typePiece = new TypePiece();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(TypePieceType::class, $typePiece);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){


            $em->persist($typePiece);
            $em->flush();

            $this->addFlash('success','Enregistrement affectué!');

        }
        return $this->render('type_piece/new.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
