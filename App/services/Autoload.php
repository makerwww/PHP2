<?php

namespace App\services;

class Autoload
{

    public function loadClass($className)
    {
        $file = str_replace(
                ['App\\', '\\'],
                [dirname(__DIR__) . '/', '/'],
                $className
            ) . '.php';
        if (file_exists($file)) {
            include $file;
        }
    }

    // private $dirs = [
    //     'models', 'services'
    // ];

    // public function loadClass($className)
    // {
    //     foreach ($this->dirs as $dir) {
    //         $file = dirname(__DIR__) . "/{$dir}/{$className}.php";
    //         echo $className . "<br>";
    //        echo $file . "<br>";
    //         if (file_exists($file)) {
    //             include $file;
    //             break;
    //         }
    //     }
    // }

}
