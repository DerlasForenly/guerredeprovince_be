<?php

namespace Modules\Country\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Country\Models\Country;

class IndexParliamentariansController extends Controller
{
    public function __invoke(Country $country): array
    {
        $parliamentarians = [];

        $parties = $country
            ->parties()
            ->whereHas('staff', function ($query) {
                $query->where('in_government', true);
            })
            ->with(['staff' => function ($query) {
                $query->where('in_government', true);
            }])
            ->get();

        foreach ($parties as $party) {
            foreach ($party['staff'] as $staff) {
                $staff['color'] = $party['color'];
            }

            $parliamentarians = array_merge($parliamentarians, $party['staff']->toArray());
        }

        return $parliamentarians;
    }
}