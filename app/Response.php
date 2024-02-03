<?php

namespace App;

class Response
{

    public $content;
    public function set_content($content)
    {
        $this->content = $content;
    }
    public function send(){
        return $this->content;
    }
}