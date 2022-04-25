<?php

namespace Modules\Chat\Providers;

use App\Providers\BaseModuleProvider;

class ChatServiceProvider extends BaseModuleProvider
{
    /**
     * @var string $moduleName
     */
    protected string $moduleName = 'Chat';

    /**
     * @var string $moduleNameLower
     */
    protected string $moduleNameLower = 'chat';

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
