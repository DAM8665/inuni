<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5980dbf6e15e20ebc776fb2ff675ad7b
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5980dbf6e15e20ebc776fb2ff675ad7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5980dbf6e15e20ebc776fb2ff675ad7b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5980dbf6e15e20ebc776fb2ff675ad7b::$classMap;

        }, null, ClassLoader::class);
    }
}
