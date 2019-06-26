<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TypeFichierController extends AbstractController
{
    /**
     * @Route("/type/fichier", name="type_fichier")
     */
    public function index()
    {
        return $this->render('type_fichier/index.html.twig', [
            'controller_name' => 'TypeFichierController',
        ]);
    }
}
