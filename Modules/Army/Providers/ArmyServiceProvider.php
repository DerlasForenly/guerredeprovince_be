<?php

namespace Modules\Army\Providers;

use App\Providers\BaseModuleProvider;

class ArmyServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Army';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'army';

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
