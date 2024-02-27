<?php

namespace Modules\Region\Providers;

use App\Providers\BaseModuleProvider;
use Modules\Region\Models\Region;
use Modules\Region\Policies\RegionPolicy;

class RegionServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Region';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'region';

    /**
     * @var string[]
     */
    protected $policies = [
        Region::class => RegionPolicy::class,
    ];

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
    public function provides(): array
    {
        return [];
    }
}
