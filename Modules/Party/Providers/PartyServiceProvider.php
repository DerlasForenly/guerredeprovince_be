<?php

namespace Modules\Party\Providers;

use App\Providers\BaseModuleProvider;

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
