<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdc189310617b4fce3bb5cc4b68567d9
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdc189310617b4fce3bb5cc4b68567d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdc189310617b4fce3bb5cc4b68567d9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
