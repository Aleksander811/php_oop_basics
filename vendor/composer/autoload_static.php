<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd859f61dd5bb892d789a08e6378680d1
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ESHOP\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ESHOP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd859f61dd5bb892d789a08e6378680d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd859f61dd5bb892d789a08e6378680d1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
