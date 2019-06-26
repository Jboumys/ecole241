<?php
/**
 * Created by PhpStorm.
 * User: Wilson
 * Date: 13/04/2019
 * Time: 06:10
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    public function index(){
        return $this->render('pages/contact.html.twig');
    }
}