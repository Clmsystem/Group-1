<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjectGroup1 extends Controller
{
 public function index()
    {
        $ob = DB::table('object')->get();
        return view('section_one.content',compact('ob'));
    }
}
