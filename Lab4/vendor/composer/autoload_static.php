<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteecf7fa429b120931d10812c70d486ce
{
    public static $files = array (
        'cfe4039aa2a78ca88e07dadb7b1c6126' => __DIR__ . '/../..' . '/config.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DbHandler' => __DIR__ . '/../..' . '/models/DbHandler.php',
        'MySQLHandler' => __DIR__ . '/../..' . '/models/MySQLHandler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticIniteecf7fa429b120931d10812c70d486ce::$classMap;

        }, null, ClassLoader::class);
    }
}