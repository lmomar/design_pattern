<?php
namespace lm\classes;

abstract class User
{

    protected $name;


    protected $email;

    abstract protected function getId();

}