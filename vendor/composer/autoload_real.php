<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbcc7842ec3b3d467ae1bbd82555a7ab0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbcc7842ec3b3d467ae1bbd82555a7ab0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbcc7842ec3b3d467ae1bbd82555a7ab0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbcc7842ec3b3d467ae1bbd82555a7ab0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
