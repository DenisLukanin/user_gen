<?php

namespace App;

class Request
{
    private static $instance;

    public $server;

    private function __construct(){
        $this->server = $_SERVER;
    }
    public static function get_instance(){
        if(!self::$instance) self::$instance = new self;
        return self::$instance;
    }
    public function get_uri(){
        return strtok($this->server['REQUEST_URI'], '?');
    }
    public function get_method(){
        return strtolower($this->server['REQUEST_METHOD']);
    }

}