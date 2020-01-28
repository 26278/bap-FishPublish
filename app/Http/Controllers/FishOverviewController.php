<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Fish;

class FishOverviewController extends Controller
{

    public function list(){
        // Alle content ophalen uit de database met de Querybuilder
//        $catches = DB::table('companies')->get();
        $catches = Fish::all();
        //View terug geven
        return view('fish.overview',  ['catches' => $catches]);

    }
    public function caughtFish($id){
        // Content van 1 vangst ophalen
//         $catch = DB::table('companies')->where('id', '=', $id)->first();
        $catch = Fish::find($id);
         return view('fish.caughtfish', ['catch' => $catch]);
    }
}
