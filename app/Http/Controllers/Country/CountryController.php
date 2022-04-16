<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

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
