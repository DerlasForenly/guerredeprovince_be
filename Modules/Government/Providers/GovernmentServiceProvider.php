<?php

namespace Modules\Government\Providers;

use App\Providers\BaseModuleProvider;

class GovernmentServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Government';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'government';

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
