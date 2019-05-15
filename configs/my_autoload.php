<?php

function my_autoload($class) {
    $dir[] = 'core';
    $dir[] = 'models';
    $dir[] = 'controllers';

    for ($i = 0; $i < count($dir); $i++) {
        if (file_exists($dir[$i] . "/" . $class . ".class.php")) {
            require_once $dir[$i] . "/" . $class . ".class.php";
            break;
        }
    }
}

spl_autoload_register("my_autoload");
