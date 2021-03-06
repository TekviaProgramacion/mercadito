<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b59e91cfb6759b68627613b07e93eee
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static $prefixesPsr0 = array (
        'O' => 
        array (
            'Openpay' => 
            array (
                0 => __DIR__ . '/..' . '/openpay/sdk',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b59e91cfb6759b68627613b07e93eee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b59e91cfb6759b68627613b07e93eee::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3b59e91cfb6759b68627613b07e93eee::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit3b59e91cfb6759b68627613b07e93eee::$classMap;

        }, null, ClassLoader::class);
    }
}
