<?php

namespace App\Controller;

use App\Request;

class Base
{
    private $route_config;

    public function __construct($route_config){
        $this->route_config = $route_config;
    }

    public function call_action(){

        $action = $this->route_config['action'];

        return $this->$action();
    }

}