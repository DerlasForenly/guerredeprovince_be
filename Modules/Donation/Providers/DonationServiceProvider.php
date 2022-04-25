<?php

namespace Modules\Donation\Providers;

use App\Providers\BaseModuleProvider;

class DonationServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Donation';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'donation';

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
