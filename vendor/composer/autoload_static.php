<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f64623b1df6baae2c2965823090bf6f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f64623b1df6baae2c2965823090bf6f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f64623b1df6baae2c2965823090bf6f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
