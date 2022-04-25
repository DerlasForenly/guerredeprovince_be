<?php

namespace Modules\GamePrice\Providers;

use App\Providers\BaseModuleProvider;

class GamePriceServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'GamePrice';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'gameprice';

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
