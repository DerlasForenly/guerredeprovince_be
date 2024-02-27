<?php

namespace Modules\Request\Providers;

use App\Providers\BaseModuleProvider;
use Modules\Request\Models\Request;
use Modules\Request\Policies\RequestPolicy;

class RequestServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Request';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'request';

    /**
     * @var array|string[]
     */
    protected $policies = [
        Request::class => RequestPolicy::class
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
