<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b3f46cc5aaf35ab7ec7e7f8a4a9721e
{
    public static $files = array (
        '3b5531f8bb4716e1b6014ad7e734f545' => __DIR__ . '/..' . '/illuminate/support/Illuminate/Support/helpers.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
        'dca296080820f55674c50c386e85a39b' => __DIR__ . '/../..' . '/resources/items.sql',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\Translation\\' => 30,
            'Symfony\\Component\\Translation\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation-contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'UpdateHelper\\' => 
            array (
                0 => __DIR__ . '/..' . '/kylekatarnls/update-helper/src',
            ),
        ),
        'I' => 
        array (
            'Illuminate\\Support' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/support',
            ),
            'Illuminate\\Events' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/events',
            ),
            'Illuminate\\Database' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/database',
            ),
            'Illuminate\\Container' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/container',
            ),
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DatabaseAccess' => __DIR__ . '/../..' . '/classes/DatabaseAccess.php',
        'DbHandler' => __DIR__ . '/../..' . '/classes/DbHandler.php',
        'Items' => __DIR__ . '/../..' . '/classes/Items.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b3f46cc5aaf35ab7ec7e7f8a4a9721e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b3f46cc5aaf35ab7ec7e7f8a4a9721e::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit4b3f46cc5aaf35ab7ec7e7f8a4a9721e::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4b3f46cc5aaf35ab7ec7e7f8a4a9721e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4b3f46cc5aaf35ab7ec7e7f8a4a9721e::$classMap;

        }, null, ClassLoader::class);
    }
}
