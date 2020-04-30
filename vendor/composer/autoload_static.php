<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit429e8cf16e4fe6f9e85ac8ad7f3bc4ee
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit429e8cf16e4fe6f9e85ac8ad7f3bc4ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit429e8cf16e4fe6f9e85ac8ad7f3bc4ee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
