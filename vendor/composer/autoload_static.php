<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite88a6e2bd70a5f1ce4214c99c7a98359
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Johns\\Entrainementgit\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Johns\\Entrainementgit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite88a6e2bd70a5f1ce4214c99c7a98359::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite88a6e2bd70a5f1ce4214c99c7a98359::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite88a6e2bd70a5f1ce4214c99c7a98359::$classMap;

        }, null, ClassLoader::class);
    }
}