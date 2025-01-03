<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4266f7b8a78e3665abaa5df6a6c237de
{
    public static $files = array (
        'b56cbb14337d64c0aacd0c5e4435eaff' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4266f7b8a78e3665abaa5df6a6c237de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4266f7b8a78e3665abaa5df6a6c237de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4266f7b8a78e3665abaa5df6a6c237de::$classMap;

        }, null, ClassLoader::class);
    }
}
