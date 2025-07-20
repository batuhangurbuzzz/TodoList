<?php

return [
    'db' => [
        'host'     => getenv('DB_HOST') ?: '127.0.0.1',
        'dbname'   => getenv('DB_NAME') ?: 'default',
        'user'     => getenv('DB_USER') ?: 'username',
        'password' => getenv('DB_PASS') ?: '',
        'charset'  => getenv('DB_CHARSET') ?: 'utf8mb4'
    ]
];
