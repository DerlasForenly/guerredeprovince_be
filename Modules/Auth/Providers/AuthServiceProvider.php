<?php

namespace Modules\Auth\Providers;

use App\Providers\BaseModuleProvider;

class AuthServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Auth';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'auth';

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
