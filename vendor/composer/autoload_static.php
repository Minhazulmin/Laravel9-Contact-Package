<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1463dcfb44fa5944bce2284f24ae4d82
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Minhazulmin\\Contact\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Minhazulmin\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1463dcfb44fa5944bce2284f24ae4d82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1463dcfb44fa5944bce2284f24ae4d82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1463dcfb44fa5944bce2284f24ae4d82::$classMap;

        }, null, ClassLoader::class);
    }
}
