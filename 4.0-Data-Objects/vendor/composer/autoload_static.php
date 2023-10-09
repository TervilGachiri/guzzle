<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita905f6cf1905e2ed530f6ff33c1e88a4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita905f6cf1905e2ed530f6ff33c1e88a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita905f6cf1905e2ed530f6ff33c1e88a4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita905f6cf1905e2ed530f6ff33c1e88a4::$classMap;

        }, null, ClassLoader::class);
    }
}
