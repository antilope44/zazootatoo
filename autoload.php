<?php

function autoload_class_multiple_directory($class_name) 
{
    # List all the class directories in the array.
    $array_paths = [
    'Controllers/', 
    'repository/',
    ];
    $fileNames = explode('\\', $class_name);

    foreach($array_paths as $path)
    {
        $file = sprintf('%s/%s.php', $path, end($fileNames));
        if(is_file($file)) 
        {
            require $file;
        } 

    }
}

spl_autoload_register('autoload_class_multiple_directory');
