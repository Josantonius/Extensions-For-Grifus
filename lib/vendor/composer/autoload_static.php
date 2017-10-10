<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e8a00105295a4d8bd97a25aa916c4e3
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Josantonius\\WP_Register\\' => 24,
            'Josantonius\\WP_Menu\\' => 20,
            'Josantonius\\Url\\' => 16,
            'Josantonius\\Json\\' => 17,
            'Josantonius\\Hook\\' => 17,
            'Josantonius\\File\\' => 17,
        ),
        'E' => 
        array (
            'ExtensionsForGrifus\\' => 20,
            'Eliasis\\Plugins\\WP_Plugin_Info\\' => 31,
            'Eliasis\\Complement\\' => 19,
            'Eliasis\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Josantonius\\WP_Register\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/wp_register/src/WP_Register',
        ),
        'Josantonius\\WP_Menu\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/wp_menu/src',
        ),
        'Josantonius\\Url\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/url/src/Url',
        ),
        'Josantonius\\Json\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/json/src/Json',
        ),
        'Josantonius\\Hook\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/hook/src/Hook',
        ),
        'Josantonius\\File\\' => 
        array (
            0 => __DIR__ . '/..' . '/josantonius/file/src/File',
        ),
        'ExtensionsForGrifus\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/src',
        ),
        'Eliasis\\Plugins\\WP_Plugin_Info\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/plugins/wp_plugin-info/src',
        ),
        'Eliasis\\Complement\\' => 
        array (
            0 => __DIR__ . '/..' . '/eliasis-framework/complement/src',
        ),
        'Eliasis\\' => 
        array (
            0 => __DIR__ . '/..' . '/eliasis-framework/eliasis/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e8a00105295a4d8bd97a25aa916c4e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e8a00105295a4d8bd97a25aa916c4e3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
