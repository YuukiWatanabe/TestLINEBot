<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba514a9ce17cdbdb4c0b4d71dd5f51b6
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitba514a9ce17cdbdb4c0b4d71dd5f51b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba514a9ce17cdbdb4c0b4d71dd5f51b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
