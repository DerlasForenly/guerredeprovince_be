<?php

namespace Modules\Country\Services;

use Illuminate\Support\Facades\Log;
use Modules\Country\Models\Law;
use Modules\Country\Models\LawType;
use Modules\Country\Services\LawStrategies\ChangeEmblemStrategy;
use Modules\Country\Services\LawStrategies\ChangeNameStrategy;

class LawProjectExecutor
{
    const STRATEGIES = [
        LawType::CHANGE_COUNTRY_EMBLEM => ChangeEmblemStrategy::class,
        LawType::CHANGE_COUNTRY_NAME   => ChangeNameStrategy::class,
    ];

    /**
     * @var LawStrategy The Context maintains a reference to one of the Strategy
     * objects. The Context does not know the concrete class of a strategy. It
     * should work with all strategies via the Strategy interface.
     */
    protected LawStrategy $strategy;

    /**
     * @param \Modules\Country\Models\Law $law
     */
    public function __construct(protected Law $law)
    {
        $className      = self::STRATEGIES[$law->lawType->name];
        $this->strategy = new $className($law);
    }

    /**
     * The Context delegates some work to the Strategy object instead of
     * implementing multiple versions of the algorithm on its own.
     */
    public function execute(): void
    {
        Log::info('Start executing law project.', ['law_id' => $this->law->id]);
        $this->strategy->execute($this->law);
        Log::info('Finished executing law project.', ['law_id' => $this->law->id]);
    }
}