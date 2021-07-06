<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    
    public function index()
    {
        return view("pages.dashboard")->with("currentModule", "dashboard");
    }

    public function clearCache()
    {
        \Artisan::call('cache:clear');
        return view('clear-cache')->with("currentModule", "settings");
    }
}
