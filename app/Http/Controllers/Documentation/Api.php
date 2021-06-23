<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class Api extends Controller
{
    public function index(){
        return view("documentation.api")->with("currentModule", "documentation");
    }
}
