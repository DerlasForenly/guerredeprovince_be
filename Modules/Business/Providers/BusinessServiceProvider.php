<?php

namespace Modules\Business\Providers;

use App\Providers\BaseModuleProvider;
use Modules\Business\Models\Business;
use Modules\Business\Policies\BusinessPolicy;

class BusinessServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Business';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'business';

    /**
     * @var array|string[]
     */
    protected $policies = [
        Business::class => BusinessPolicy::class
    ];

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
        $this->registerPolicies();
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
