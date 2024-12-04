<?php

use Core\App;

    $greeting = "Hello";

    $a = 5;
    $b = 2;

    $books = App::get('database')->selectAll('books');

    require '../resources/views/index.blade.php';