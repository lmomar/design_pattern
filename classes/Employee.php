<?php
namespace lm\classes;
use lm\Interfaces\UserInterface;

class Employee extends User implements UserInterface
{
    const id = 1;

    public function getId()
    {
        return self::id;
    }

    public function getFullName()
    {
        return "fullName";
    }

    public function getNom(){
        return "nom";
    }
}