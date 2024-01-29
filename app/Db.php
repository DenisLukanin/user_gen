<?php
namespace App;

class Db{
    private static $instance = null;
    private function __construct(){

    }

    public static function get_instance(){
        return self::$instance ?: new self();
    }
}
