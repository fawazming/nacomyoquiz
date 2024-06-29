<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ea6770537fcabb51e7384335d7102bb
{
    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Goodby\\CSV' => 
            array (
                0 => __DIR__ . '/..' . '/goodby/csv/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0ea6770537fcabb51e7384335d7102bb::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0ea6770537fcabb51e7384335d7102bb::$classMap;

        }, null, ClassLoader::class);
    }
}
