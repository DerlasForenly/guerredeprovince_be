<?php

namespace Modules\Newspaper\Providers;

use App\Providers\BaseModuleProvider;
use Illuminate\Http\Resources\Json\JsonResource;

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
        JsonResource::withoutWrapping();
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
