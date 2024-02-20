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
            ->politicalParties()
            ->whereHas('politicalPartyStaff', function ($query) {
                $query->where('in_government', true);
            })
            ->with(['politicalPartyStaff' => function ($query) {
                $query->where('in_government', true);
            }])
            ->get();

        foreach ($parties as $party) {
            foreach ($party['politicalPartyStaff'] as $staff) {
                $staff['color'] = $party['color'];
            }

            $parliamentarians = array_merge($parliamentarians, $party['politicalPartyStaff']->toArray());
        }

        return $parliamentarians;
    }
}