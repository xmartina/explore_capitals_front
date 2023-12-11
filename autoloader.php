<?php

class Autoloader
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);
    }

    private static function autoload($className)
    {
        $classPath = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';

        if (file_exists($classPath)) {
            require_once $classPath;
        } else {
            // Handle class not found (you can log or throw an exception)
            // Example: throw new Exception("Class $className not found");
        }
    }
}

Autoloader::register();
