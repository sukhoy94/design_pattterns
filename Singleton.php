<?php


class Singleton {
    public static $instance = null;
    
    public $name = 'default';
    
    private function __construct() {}    
    private function __clone() {}    
    
    public static function getInstance() {
        
        if (self::$instance === null) {
            self::$instance = new self();
            return self::$instance;
        }
        
        
        return self::$instance;        
    }
}

$user1 = Singleton::getInstance();
$user1->name = 'Andrii';

$user2 = Singleton::getInstance();
