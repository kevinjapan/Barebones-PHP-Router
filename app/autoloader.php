<?php


return function($class) {
        
    $file = str_replace('\\', '/', $class);

    // check for class in the controllers dir
    if (file_exists($path = CONTROLLERS_PATH.$file.'.php')) {
        require $path;
    }

    // check for class in the app dir
    if (file_exists($path = APP_PATH.$file.'.php')) {
        require $path;
    }
};