<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use danielme85\LaravelLogToDB\LogToDB;

class GeneralBoardController extends Controller
{
    public function index(){
        //Log::warning("Error login and password");
        //$model = LogToDB::model();
        //dd( $model->get() );
        $modelLog = LogToDB::model();
        $logs = $modelLog->orderBy('id', 'DESC')->simplePaginate(10);
        return view("dashboard.general")->with("currentModule", "dashboard")->with('logs', $logs);
    }
}
