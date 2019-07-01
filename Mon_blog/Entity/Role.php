<?php
/**
 * Created by PhpStorm.
 * User: Wil19
 * Date: 01/07/2019
 * Time: 16:06
 */

namespace Entity;


class Role
{
    private $id;
    private $libelle;

    /**
     * Role constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }



}