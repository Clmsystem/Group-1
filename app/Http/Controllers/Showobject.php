<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Showobject extends Controller
{
    public function show()
    {
        $ob = DB::table('object')->get();
        // $obkr = DB::table('kr')->get();
        // $max = DB::table('kr')->max('idKR');
        // dd($ob);
        return view('section_five.addAdmin', compact('ob'));
    }
    
   
}
