<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe7e035e986b195ae243877b245bace0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe7e035e986b195ae243877b245bace0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe7e035e986b195ae243877b245bace0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
