<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a81e53d4425e9985e2e7b22ccf82b25
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a81e53d4425e9985e2e7b22ccf82b25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a81e53d4425e9985e2e7b22ccf82b25::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a81e53d4425e9985e2e7b22ccf82b25::$classMap;

        }, null, ClassLoader::class);
    }
}