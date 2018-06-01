<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 25.5.2018 г.
 * Time: 11:51
 */

function classAutoLoader($class){
    $class=strtolower($class);
    $the_path="includes/{$class}.php";

    if(is_file($the_path) && !class_exists($class)){
        require_once ($the_path);
    }
    else{
        die("The File {$class}.php was not found");
    }
}


function redirect($path){
    header("Location: " .$path);
}

spl_autoload_register('classAutoLoader');