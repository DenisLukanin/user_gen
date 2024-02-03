<?php

namespace App;

class Config
{
    protected $config_data = null;

    private static $instance = null;

    public function __construct(){
        $this->config_data = include_once __DIR__ . '/config.php';
    }
    public static function get($keys){
        if (!self::$instance) self::$instance = new self;
        return self::$instance->search($keys);
    }
    private function search($keys){
        $keys_arr = explode('.', $keys);
        $result = $this->config_data;
        foreach ($keys_arr as $key){
            if (!array_key_exists($key, $result)) return null;
            $result = $result[$key];
        }
        return $result;
    }
}