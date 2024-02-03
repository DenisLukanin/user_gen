<?php

namespace App;
class View
{
    private static $view_folder_path = __DIR__ . '/source/views/';

    private $view_variables = [];
    private $view_path;
    public function __construct($view_name, $params = []){

        $this->view_path = self::$view_folder_path . $view_name . '.php';
        $this->view_variables = $params;

        return $this;
    }



    public function render(){
        extract($this->view_variables);

        $view_path = $this->view_path;
        ob_start();
        include $view_path;
        return ob_get_clean();
    }

}