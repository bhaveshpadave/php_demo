<?php

spl_autoload_register('my_autoload');

function my_autoload($class) {
    $path = "classes/";
    $extension = ".php";
    $fullPath = $path . $class . $extension;

    include_once $fullPath;
}