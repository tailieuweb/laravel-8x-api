<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Events\CountryChanged;
class AdminCountryController extends Controller
{
    public function index(){
        $countries = Country::all();
        return view('admincountry.index', compact('countries'));
    }

    public function edit(Country $country)
    {

        return view('admincountry.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $country->country_name = $request->country;
        $country->save();
//        $permissions = Permission::with(['customer'])->get();
        event(new CountryChanged($country));
        return redirect()->route('admin.countries')->with('message', 'Updated successfully!');
    }
}
