<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KlasemenController extends Controller
{
    public function index(){
        return view('pages.klasemen',[
            "title"=>"FOOTBALL APP - Klasemen",
            "klasemen"=> DB::table('klasemen')
            ->join('teams','teams.id','=','klasemen.id_team')
            ->orderBy('point', 'desc')
            ->orderBy('goal_difference', 'desc')
            ->orderBy('goal_for', 'desc')
            ->orderBy('goal_against', 'asc')
            ->get(),
        ]);
    }
}
