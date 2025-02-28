<?php
class Autoloader
{
    static function init()
    {
        spl_autoload_register(function ($class_name) {
            // print('auto: ' . $class_name);
            $dir = ['/../app/controller/', '../app/view'];
            // print($dir);
            foreach ($dir as $path) {
                $path = __DIR__ . $path . $class_name . '.php';
                if (file_exists($path)) {
                    include_once($path);
                }
            }
        });
    }
}
