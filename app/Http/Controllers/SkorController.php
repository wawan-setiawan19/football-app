<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SkorController extends Controller
{
    public function index(){
        return view('pages.input-skor',[
            "title"=>"FOOTBALL APP - INPUT SKOR",
            "teams"=> DB::table('teams')->orderBy('nama_tim')->get(),
        ]);
    }
}
