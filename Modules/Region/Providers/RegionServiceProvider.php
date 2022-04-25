<?php

namespace Modules\Region\Providers;

use App\Providers\BaseModuleProvider;

class RegionServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Region';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'region';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [];
    }
}
