<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AproposController extends AbstractController{


    public function index(){
        return $this->render('pages/apropos.html.twig');
    }
}