<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

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
