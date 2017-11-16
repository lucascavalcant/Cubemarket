<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67b9c3ddbf19706b3c6a8d8501de3b24
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Bootstrap' => __DIR__ . '/../..' . '/libs/Bootstrap.php',
        'Controller' => __DIR__ . '/../..' . '/libs/Controller.php',
        'Cookie' => __DIR__ . '/../..' . '/libs/Cookie.php',
        'ErrorHandler' => __DIR__ . '/../..' . '/libs/ErrorHandler.php',
        'Hash' => __DIR__ . '/../..' . '/libs/Hash.php',
        'Index' => __DIR__ . '/../..' . '/controllers/index.php',
        'Input' => __DIR__ . '/../..' . '/libs/Input.php',
        'Json' => __DIR__ . '/../..' . '/libs/Json.php',
        'Loja' => __DIR__ . '/../..' . '/controllers/loja.php',
        'Model' => __DIR__ . '/../..' . '/libs/Model.php',
        'Redirect' => __DIR__ . '/../..' . '/libs/Redirect.php',
        'Session' => __DIR__ . '/../..' . '/libs/Session.php',
        'Token' => __DIR__ . '/../..' . '/libs/Token.php',
        'URL' => __DIR__ . '/../..' . '/libs/URL.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67b9c3ddbf19706b3c6a8d8501de3b24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67b9c3ddbf19706b3c6a8d8501de3b24::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit67b9c3ddbf19706b3c6a8d8501de3b24::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit67b9c3ddbf19706b3c6a8d8501de3b24::$classMap;

        }, null, ClassLoader::class);
    }
}
