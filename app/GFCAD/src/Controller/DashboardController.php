<?php
/**
 * Created by PhpStorm.
 * User: Wilson
 * Date: 05/04/2019
 * Time: 01:24
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{

    public function index(){
        return $this->render('pages/dashboard.html.twig');
    }
}