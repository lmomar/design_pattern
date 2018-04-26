<?php
use lm\classes\Employee;
use lm\Autoloader;
require_once 'classes/Autoloader.php';
Autoloader::register();
var_dump(lm\DesignPattern\Singleton\Config::getInstance()->get('user'));



