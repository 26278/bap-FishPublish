<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;

class FishOverviewController extends Controller
{

    public function list(){
        // Alle content ophalen uit de database met de Querybuilder
//        $catches = DB::table('companies')->get();
        $catches = Company::all();
        //View terug geven
        return view('fish.overview',  ['catches' => $catches]);

    }
    public function caughtFish($id){
        // Content van 1 vangst ophalen
//         $catch = DB::table('companies')->where('id', '=', $id)->first();
        $catch = Company::find($id);
         return view('fish.caughtfish', ['catch' => $catch]);
    }
}
