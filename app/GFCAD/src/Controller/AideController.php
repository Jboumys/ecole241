<?php
/**
 * Created by PhpStorm.
 * User: Wilson
 * Date: 06/04/2019
 * Time: 01:27
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Compiler\ResolveBindingsPass;

class AideController extends AbstractController {


    public function index(){
        return $this->render('pages/aide.html.twig');
    }
}