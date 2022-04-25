<?php

namespace Modules\Newspaper\Providers;

use App\Providers\BaseModuleProvider;

class NewspaperServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Newspaper';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'newspaper';

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
