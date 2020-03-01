<?php

namespace App\Services;

class Autoload
{
    private $dirs = [
        'models', 'services'
    ];

    public function loadClass($className)
    {
        foreach ($this->dirs as $dir) {
            $file = dirname(__DIR__) . "/{$dir}/{$className}.php";
            echo $className . "<br>";
           echo $file . "<br>";
            if (file_exists($file)) {
                include $file;
                break;
            }
        }
    }
}
