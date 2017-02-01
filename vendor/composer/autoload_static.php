<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e5dbd05d1f6b4862a9ec1bf6ef166fe
{
    public static $files = array (
        '27f1855bdac59f09b27fbc010f70cde3' => __DIR__ . '/../..' . '/src/taxiChatbot/configs.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TaxiChatbot\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TaxiChatbot\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/taxiChatbot',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e5dbd05d1f6b4862a9ec1bf6ef166fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e5dbd05d1f6b4862a9ec1bf6ef166fe::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8e5dbd05d1f6b4862a9ec1bf6ef166fe::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
