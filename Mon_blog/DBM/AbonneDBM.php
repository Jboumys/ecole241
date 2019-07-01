<?php
/**
 * Created by PhpStorm.
 * User: Wil19
 * Date: 01/07/2019
 * Time: 16:13
 */

namespace DBM;

use Entity\Abonne;


class AbonneDBM extends DBM
{
    public function save(){

        $test = new Abonne();
        $test->getDateCreate();

        return $test->getDateCreate();
    }


}