<?php

namespace Modules\Newspaper\Console\Commands;

use Illuminate\Console\Command;
use Modules\Newspaper\Models\Category;
use Modules\Newspaper\Services\NyckelService;

/**
 * Class SyncCategories
 */
class SyncCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newspaper:sync-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get and save categories from Nyckel API';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $nyckel     = app(NyckelService::class);
        $categories = $nyckel->getLabels();

        foreach ($categories as $category) {
            Category::updateOrCreate([
                'external_id' => $category->external_id,
            ], [
                'name' => $category->name,
            ]);
        }

        dd($categories);
    }
}
