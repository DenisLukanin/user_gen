<?php
namespace App\Controller;

use App\View;
use App\Controller\Base;

class Web extends Base
{
    public function index(){
        $view = new View('index', ['test' => 'test']);
        return $view->render();
    }
}