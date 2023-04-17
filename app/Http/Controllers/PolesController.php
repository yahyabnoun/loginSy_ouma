<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PolesController extends Controller
{
    public function get_division(Request $request) {

        $divisions = DB::table('divisions')->select('divisions.id','divisions.nom')
        // ->join('corps','corps.id','=','grade.corps_id')
        ->where('divisions.pole_id', "=", $request->pole_id)
        ->get();
        return response($divisions);
    }
    public function get_services(Request $request) {

        $services = DB::table('services')->select('services.id','services.nom')
        ->where('services.division_id', "=", $request->division_id)
        ->get();
        return response($services);
    }
}
