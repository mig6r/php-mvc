<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20028860c367d08c694aa31c0d9c4263
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPInitiation\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPInitiation\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20028860c367d08c694aa31c0d9c4263::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20028860c367d08c694aa31c0d9c4263::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
