<?php

namespace Modules\Party\Providers;

use App\Providers\BaseModuleProvider;
use Modules\Party\Models\PoliticalParty;
use Modules\Country\Policies\PoliticalPartyPolicy;

class PartyServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Party';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'party';

    /**
     * @var array|string[]
     */
    protected $policies = [
        PoliticalParty::class => PoliticalPartyPolicy::class
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
