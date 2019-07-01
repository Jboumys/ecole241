<?php
/**
 * Created by PhpStorm.
 * User: Wil19
 * Date: 01/07/2019
 * Time: 15:59
 */

namespace Entity;


class Abonne
{
    private $id;
    private $email;
    private $dateCreate;

    /**
     * Abonne constructor.
     */
    public function __construct()
    {
        $this->dateCreate = new \DateTime();
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * @param \DateTime $dateCreate
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
    }




}