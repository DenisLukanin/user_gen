<?php

return [
    'db' => [
        'host' => 'localhost',
        'port' => '8080',
        'username' => 'root',
        'password' => 'root',
        'db_name' => 'user_gen'
    ],
    'routes' => [
        'get' => [
            '/' => [
                'controller' => 'web',
                'action' => 'index'
            ]
        ],
        'post' => [
            'rest/save_users' => [
                'controller' => 'rest',
                'action' => 'save_users'
            ],
            'rest/get_users' => [
                'controller' => 'rest',
                'action' => 'get_users'
            ]
        ]
    ]
];
