<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/sonic' => '../App/Controllers/SonicController.php@index',
    '/sonic/create' => '../App/Controllers/SonicController.php@create',
    '/sonic/store' => '../App/Controllers/SonicController.php@store',
    '/sonic/edit/{id}' => '../App/Controllers/SonicController.php@edit',
    '/sonic/update/{id}' => '../App/Controllers/SonicController.php@update',
    '/sonic/delete/{id}' => '../App/Controllers/SonicController.php@delete',
    '/sonic/destroy/{id}' => '../App/Controllers/SonicController.php@destroy',
    '/sonic/confirm-delete/{id}' => '../App/Controllers/SonicController.php@confirmDelete',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',
];
