<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit41f9bf9483fee5512dd8b14dd96bed10
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Donation\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Donation\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modules\\Donation\\Database\\Seeders\\DonationDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/DonationDatabaseSeeder.php',
        'Modules\\Donation\\Http\\Controllers\\DonationController' => __DIR__ . '/../..' . '/Http/Controllers/DonationController.php',
        'Modules\\Donation\\Models\\Donation' => __DIR__ . '/../..' . '/Models/Donation.php',
        'Modules\\Donation\\Providers\\DonationServiceProvider' => __DIR__ . '/../..' . '/Providers/DonationServiceProvider.php',
        'Modules\\Donation\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/Providers/RouteServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit41f9bf9483fee5512dd8b14dd96bed10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit41f9bf9483fee5512dd8b14dd96bed10::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit41f9bf9483fee5512dd8b14dd96bed10::$classMap;

        }, null, ClassLoader::class);
    }
}
