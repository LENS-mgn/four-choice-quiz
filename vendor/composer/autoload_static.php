<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61155193b59960d286a78331b38fcf4e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit61155193b59960d286a78331b38fcf4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61155193b59960d286a78331b38fcf4e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}