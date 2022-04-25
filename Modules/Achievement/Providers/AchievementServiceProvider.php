<?php

namespace Modules\Achievement\Providers;

use App\Providers\BaseModuleProvider;

class AchievementServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Achievement';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'achievement';

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
