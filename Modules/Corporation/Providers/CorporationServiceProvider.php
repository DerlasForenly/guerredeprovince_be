<?php

namespace Modules\Corporation\Providers;

use App\Providers\BaseModuleProvider;

class CorporationServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Corporation';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'corporation';

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
