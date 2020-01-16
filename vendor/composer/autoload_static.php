<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0f60df5fae0e6facafb25d6fd46ce9c
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imgzip\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imgzip\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0f60df5fae0e6facafb25d6fd46ce9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0f60df5fae0e6facafb25d6fd46ce9c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
