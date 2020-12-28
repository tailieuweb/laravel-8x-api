<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
class UserCountryController extends Controller
{
    public function index(){
        $user = auth()->user();

        $countries = Country::where('user_id', $user->id)->get();

        return view('usercountry.index', compact('user', 'countries'));
    }

    public function create(){
        return view('usercountry.create');
    }

    public function store(Request $request)
    {
        $create = Country::create([
            'user_id' => auth()->user()->id,
            'country_name' => $request->country
        ]);

        return redirect()->route('user.countries.show', $create)->with('message', 'Create Success');
    }

    public function show(Country $country)
    {
        return view('usercountry.show', compact('country'));
    }

}
