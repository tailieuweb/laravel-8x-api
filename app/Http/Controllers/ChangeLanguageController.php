<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class ChangeLanguageController extends Controller
{
    public function index(Request $request){
        $lang = $request->language;
        $language = config('app.locale');
        if ($lang == 'en') {
            $language = 'en';
        }
        if ($lang == 'vi') {
            $language = 'vi';
        }
        Session::put('language', $language);
        return redirect()->back();
    }
}
