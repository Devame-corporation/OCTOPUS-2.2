<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function languages(Request $request){
        return view('settings.languagesIndex');
    }

    //CREATE A SESSION FIRST TIME, TO SKIP LANGUAGE SELECTION NEXT TIME
    public function selectLanguage(Request $request){
        $request->session()->put('language', $request->language);
        return redirect()->route('login', $request->language);
    }
}
