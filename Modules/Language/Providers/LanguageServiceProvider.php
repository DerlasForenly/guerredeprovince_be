<?php

namespace Modules\Language\Providers;

use App\Providers\BaseModuleProvider;

class LanguageServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Language';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'language';

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
