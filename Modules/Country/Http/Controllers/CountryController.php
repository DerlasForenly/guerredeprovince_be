<?php

namespace Modules\Country\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Country\Models\Country;

class CountryController extends Controller
{
    public function index(): string
    {
        return Country::all();
    }

    public function show(Country $country): Country
    {
        return $country;
    }

    public function store(Request $request)
    {

    }
}
