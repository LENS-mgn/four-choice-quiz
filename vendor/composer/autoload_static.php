<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7edec677e0e7c2e0a0dc110219e3534c
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7edec677e0e7c2e0a0dc110219e3534c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7edec677e0e7c2e0a0dc110219e3534c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
