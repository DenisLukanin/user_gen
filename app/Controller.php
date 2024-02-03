<?php
namespace App;

use App\Config;
use App\Request;

class Controller
{
    private static string $controllers_namespace = 'App\Controller\\';

    public static function factory(Request $request)
    {
        $uri = $request->get_uri();
        $method = $request->get_method();
        $config = Config::get('routes.' . $method . '.' . $uri);

        $controller_name = ucfirst($config['controller']);
        $namespace = self::$controllers_namespace . $controller_name;

        return new $namespace($config);
    }

}