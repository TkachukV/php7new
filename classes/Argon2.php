<?php


namespace classes;


class Argon2
{
    public $pass;

    public function setPass($pass)
    {
        $this->pass=$pass;
    }

    public function hashPasswordArgon()
    {
        $argon2= $this->pass;
        $this->pass=password_hash($argon2,PASSWORD_ARGON2ID);
    }

}