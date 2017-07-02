<?php

class SingleTone{
    private $property = array();
    private static $instance;

    private function __construct(){}

    public static function getInstance(){
        if ( empty(self::$instance)){
            return self::$instance = new SingleTone();
        }
        return self::$instance;
    }

    public function setProperty($key, $value){
        $this->property[$key] = $value;
    }

    public function getProperty($key){
        return $this->property[$key];
    }
}