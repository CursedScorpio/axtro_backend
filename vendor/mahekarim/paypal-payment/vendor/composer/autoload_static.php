<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7f8d37a283f9b9cd9ff3a80ca4f0ea82
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mahekarim\\PaypalPayment\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mahekarim\\PaypalPayment\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7f8d37a283f9b9cd9ff3a80ca4f0ea82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7f8d37a283f9b9cd9ff3a80ca4f0ea82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7f8d37a283f9b9cd9ff3a80ca4f0ea82::$classMap;

        }, null, ClassLoader::class);
    }
}
