<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1b9d0ba56fe0384f964e9533141f0bcd
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

        spl_autoload_register(array('ComposerAutoloaderInit1b9d0ba56fe0384f964e9533141f0bcd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1b9d0ba56fe0384f964e9533141f0bcd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit1b9d0ba56fe0384f964e9533141f0bcd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
