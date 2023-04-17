<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CorpsController extends Controller
{
    public function index() {
        $corps = DB::table('corps')->select('id','nom')->get();
        $poles = DB::table('poles')->select('id','nom')->get();
        return  view('recherch')->with(['corps'=>$corps, 'poles'=>$poles]);
    }

    public function get_grades(Request $request) {

        $grades = DB::table('grade')->select('grade.id','grade.nom')
        // ->join('corps','corps.id','=','grade.corps_id')
        ->where('grade.corps_id', "=", $request->corps_id)
        ->get();
        return response($grades);
    }
}
