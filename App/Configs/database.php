<?php

return [
    'host'     => 'localhost',
    'dbName'   => 'gindaillefacile',
    'username' => 'root',
    'password' => 'root',
    'options'  => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];