<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit999e744722bb5094c517dff2a70fd2ac
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit999e744722bb5094c517dff2a70fd2ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit999e744722bb5094c517dff2a70fd2ac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
