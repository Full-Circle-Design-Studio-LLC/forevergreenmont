<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53d2919c424cd6f0a10cc367726074d1
{
    public static $files = array (
        '9fef4034ed73e26a337d9856ea126f7f' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit53d2919c424cd6f0a10cc367726074d1::$classMap;

        }, null, ClassLoader::class);
    }
}
