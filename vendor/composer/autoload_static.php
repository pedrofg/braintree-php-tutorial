<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit064cec93514af1770fce172a369d597d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit064cec93514af1770fce172a369d597d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit064cec93514af1770fce172a369d597d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit064cec93514af1770fce172a369d597d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}