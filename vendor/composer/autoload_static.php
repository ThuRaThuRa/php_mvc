<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c9a0e117fb647253fcf04b4b367f52c
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'Car' => __DIR__ . '/../..' . '/class/index.php',
        'ComposerAutoloaderInit5c9a0e117fb647253fcf04b4b367f52c' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit5c9a0e117fb647253fcf04b4b367f52c' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'Post' => __DIR__ . '/../..' . '/class/test.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Router' => __DIR__ . '/../..' . '/core/Router.php',
        'UsersController' => __DIR__ . '/../..' . '/controllers/UsersController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5c9a0e117fb647253fcf04b4b367f52c::$classMap;

        }, null, ClassLoader::class);
    }
}
