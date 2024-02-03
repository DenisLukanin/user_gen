<?php

namespace App\Controller;

use App\Controller\Base;

class Rest extends Base
{
    public function save_users(){
        return 'save_users';
    }

    public function get_users(){
        return 'get_users';
    }
}