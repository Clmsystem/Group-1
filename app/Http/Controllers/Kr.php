<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Kr extends Controller
{
    public function index($id)
    {
        $kr = DB::table('kr')
        ->join('krdetail','kr.idKR','krdetail.KR_idKR')
        ->select('kr.nameKR','krdetail.*')->where('kr.object_idobject', '=', $id)->paginate(5);
        return view('section_one.objective',compact('kr'));
    }
}
