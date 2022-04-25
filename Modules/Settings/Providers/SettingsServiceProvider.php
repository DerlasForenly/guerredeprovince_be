<?php

namespace Modules\Settings\Providers;

use App\Providers\BaseModuleProvider;

class SettingsServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Settings';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'settings';

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
