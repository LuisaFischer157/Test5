<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb06504f45de84df522f1e63e15e325de
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luisafischer157\\Test5\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luisafischer157\\Test5\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb06504f45de84df522f1e63e15e325de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb06504f45de84df522f1e63e15e325de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb06504f45de84df522f1e63e15e325de::$classMap;

        }, null, ClassLoader::class);
    }
}
