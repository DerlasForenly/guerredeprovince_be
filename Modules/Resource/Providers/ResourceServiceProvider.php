<?php

namespace Modules\Resource\Providers;

use App\Providers\BaseModuleProvider;

class ResourceServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Resource';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'resource';

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
