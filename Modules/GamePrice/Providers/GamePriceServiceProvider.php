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
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->register(RouteServiceProvider::class);
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
