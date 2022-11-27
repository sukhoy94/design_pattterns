<?php

/**
 * Class Singleton
 * 
 * Singleton pattern belongs to creational group of design patterns
 * 
 * pluses:
 *  - controlled access to only instance
 * minuses:
 *  - global object is not a OOP way
 *  - hard to test
 *  - concurrency problems
 */
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
