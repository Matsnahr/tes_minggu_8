<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit011cf63a21dc5cf5083310954931ca1e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit011cf63a21dc5cf5083310954931ca1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit011cf63a21dc5cf5083310954931ca1e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
