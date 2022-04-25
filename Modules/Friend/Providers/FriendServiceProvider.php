<?php

namespace Modules\Friend\Providers;

use App\Providers\BaseModuleProvider;

class FriendServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Friend';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'friend';

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
