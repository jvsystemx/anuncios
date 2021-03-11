<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit373d959e0d9ba00bdd0bfdb7568f2831
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\Admin\\' => 13,
            'Models\\' => 7,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\Admin\\' => 18,
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Helpers',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controllers\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit373d959e0d9ba00bdd0bfdb7568f2831::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit373d959e0d9ba00bdd0bfdb7568f2831::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit373d959e0d9ba00bdd0bfdb7568f2831::$classMap;

        }, null, ClassLoader::class);
    }
}