<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Modules\\Government\\Database\\Seeders\\GovernmentTypeSeeder' => $baseDir . '/Database/Seeders/GovernmentTypeSeeder.php',
    'Modules\\Government\\Database\\factories\\GovernmentFactory' => $baseDir . '/Database/factories/GovernmentFactory.php',
    'Modules\\Government\\Database\\factories\\GovernmentTypeFactory' => $baseDir . '/Database/factories/GovernmentTypeFactory.php',
    'Modules\\Government\\Http\\Controllers\\GovernmentController' => $baseDir . '/Http/Controllers/GovernmentController.php',
    'Modules\\Government\\Models\\Government' => $baseDir . '/Models/Government.php',
    'Modules\\Government\\Models\\GovernmentType' => $baseDir . '/Models/GovernmentType.php',
    'Modules\\Government\\Models\\Parliament' => $baseDir . '/Models/Parliament.php',
    'Modules\\Government\\Models\\RegionGovernment' => $baseDir . '/Models/RegionGovernment.php',
    'Modules\\Government\\Models\\Traits\\Relationships' => $baseDir . '/Models/Traits/Relationships.php',
    'Modules\\Government\\Providers\\GovernmentServiceProvider' => $baseDir . '/Providers/GovernmentServiceProvider.php',
    'Modules\\Government\\Providers\\RouteServiceProvider' => $baseDir . '/Providers/RouteServiceProvider.php',
);
