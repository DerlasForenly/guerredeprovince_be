<?php

namespace Modules\Status\Providers;

use App\Providers\BaseModuleProvider;

class StatusServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Status';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'status';

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
