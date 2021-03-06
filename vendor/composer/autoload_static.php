<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit155a9e92f9d7c07d5d50d1828d01b7f7
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wingu\\OctopusCore\\Reflection\\' => 29,
        ),
        'P' => 
        array (
            'PHP2WSDL\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wingu\\OctopusCore\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/wingu/reflection/src',
        ),
        'PHP2WSDL\\' => 
        array (
            0 => __DIR__ . '/..' . '/php2wsdl/php2wsdl/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit155a9e92f9d7c07d5d50d1828d01b7f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit155a9e92f9d7c07d5d50d1828d01b7f7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
