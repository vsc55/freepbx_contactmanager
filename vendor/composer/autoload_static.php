<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a0aa2efd9163f3222a1f9eba81ebd2f
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'libphonenumber\\' => 15,
        ),
        'G' => 
        array (
            'Giggsey\\Locale\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'libphonenumber\\' => 
        array (
            0 => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src',
        ),
        'Giggsey\\Locale\\' => 
        array (
            0 => __DIR__ . '/..' . '/giggsey/locale/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a0aa2efd9163f3222a1f9eba81ebd2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a0aa2efd9163f3222a1f9eba81ebd2f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}