<?php

use App\Request;
use App\Main;

$request = Request::get_instance();

$main_class = Main::get_instance();
$main_class->set_request($request);

$response = $main_class->handling()->get_response();


echo $response->send();


