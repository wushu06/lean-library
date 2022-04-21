<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit116caea8ff64b432eefcdc5fd9e809a3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit116caea8ff64b432eefcdc5fd9e809a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit116caea8ff64b432eefcdc5fd9e809a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit116caea8ff64b432eefcdc5fd9e809a3::$classMap;

        }, null, ClassLoader::class);
    }
}
