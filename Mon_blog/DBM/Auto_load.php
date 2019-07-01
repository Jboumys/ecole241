<?php
/**
 * Created by PhpStorm.
 * User: Wil19
 * Date: 01/07/2019
 * Time: 16:31
 */

namespace DBM;

use Entity\Abonne;

class Auto_load
{

    public function chargeClass(){
        require '../Entity/Abonne.php';
    }
}

spl_autoload_register('chargeClass');