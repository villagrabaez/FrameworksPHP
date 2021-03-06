<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76f738c0c891b41127ffd8f2454bdff5
{
    public static $files = array (
        '8a1ea5cca6ed85bda43ed3df63b1120f' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76f738c0c891b41127ffd8f2454bdff5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76f738c0c891b41127ffd8f2454bdff5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit76f738c0c891b41127ffd8f2454bdff5::$classMap;

        }, null, ClassLoader::class);
    }
}
