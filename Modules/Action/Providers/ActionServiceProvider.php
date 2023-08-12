<?php

namespace Modules\Action\Providers;

use App\Providers\BaseModuleProvider;
use Modules\Action\Models\Action;
use Modules\Action\Policies\ActionPolicy;
use Modules\Region\Models\Region;

class ActionServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Action';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'action';

    /**
     * @var string[]
     */
    protected $policies = [
        Action::class => ActionPolicy::class,
        Region::class => ActionPolicy::class,
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
