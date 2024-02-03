<?php

namespace App;

use App\Response;
use App\Request;
use App\Controller;
class Main
{
    private static Main|null $instance = null;
    private Response|null $response = null;
    private Request|null $request = null;

    private function __construct(){
        $this->response = new Response();
    }

    public static function get_instance(): Main
    {
        if(!self::$instance) self::$instance = new self();
        return self::$instance;
    }

    public function set_request(Request $request): void
    {
        if (!$this->request) $this->request = $request;
    }

    public function handling(): static
    {
        $controller = Controller::factory($this->request);
        $result = $controller->call_action();
        $this->set_response_content($result);
        return $this;
    }

    public function set_response_content($content): void
    {
        $this->response->set_content($content);
    }

    public function get_response(): Response
    {
        return $this->response;
    }

}