<?php

namespace Modules\Treasury\Providers;

use App\Providers\BaseModuleProvider;

class TreasuryServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Treasury';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'treasury';

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
    public function provides()
    {
        return [];
    }
}
