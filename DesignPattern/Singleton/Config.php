<?php
namespace lm\DesignPattern\Singleton;

class Config
{
    
    private $settings = [];

    private static $_instance;
    private $id;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }
    
    public function __construct()
    {
        $this->id = uniqid();
        $this->settings = require __DIR__ . '/config/config.php';
    }

    public function get($key){
        if(isset($this->settings[$key])){
            return $this->settings[$key];
        }
    }
}