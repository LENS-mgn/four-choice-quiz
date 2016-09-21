<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit623067b3a3d6ac3e2809c745ad63fa99
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Torounit\\FCQ\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Torounit\\FCQ\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit623067b3a3d6ac3e2809c745ad63fa99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit623067b3a3d6ac3e2809c745ad63fa99::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}