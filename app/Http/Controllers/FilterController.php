<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function filteremployes(Request $request) {
        // $produits = DB::table('produits')->where('id', $request->produit_select)->get();

             return view('employés');

     }
}
