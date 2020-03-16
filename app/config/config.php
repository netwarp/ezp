<?php

return [

    'database' => [
        'adapter'  => 'MariaDB',
        'host'     => 'localhost',
        'port'     => '3306',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'ezp',
    ],

    'application' => [
        'appDir'         => '../app/',
        'controllersDir' => '../app/controllers/',
        'modelsDir'      => '../app/models/',
        'migrationsDir'  => '../app/migrations/',
        'viewsDir'       => '../app/views/',
        'pluginsDir'     => '../app/plugins/',
        'libraryDir'     => '../app/library/',
        'cacheDir'       => '../cache/',
        'baseUri'        => '/',
    ],

    'models' => [
        'metadata' => [
            'adapter' => 'Memory'
        ]
    ]
];