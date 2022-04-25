<?php

namespace Modules\Request\Providers;

use App\Providers\BaseModuleProvider;

class RequestServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Request';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'request';

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
