<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit175ded5676e2f9ee4713894a0d3b297e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit175ded5676e2f9ee4713894a0d3b297e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit175ded5676e2f9ee4713894a0d3b297e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}