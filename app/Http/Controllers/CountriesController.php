<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index(Request $request)
    {
        // Get search request
        $search = $request->get('search', '');
        $countries = Country::where(
            'name',
            'ILIKE',
            "%$search%"
        )->get(['code', 'name']);

        return $countries;
    }
}
