<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Kr extends Controller
{
    public function index($id)
    {
        $data = Session::put('id',$id);
        $kr = DB::table('kr')
        ->join('krdetail','kr.idKR','krdetail.KR_idKR')
        ->select('kr.nameKR','krdetail.*')->where('kr.object_idobject', '=', $id)->where('krdetail.mount', 1)->paginate(5);
        return view('section_one.objective',compact('kr'));
    }
    public function addKR(Request $request)
    {
        $id=Session::get('id');
        $data = array();
        $data["status"] = 1;
        $data["nameKR"] = $request->keyobject;
        $data["object_idobject"] = $id;
        DB::table('kr')->insert($data);
        $max = DB::table('kr')->max('idKR');
        for($i = 1;$i<=12;$i++)
        {
            $data2 = array();
            $data2["mount"] = $i;
            $data2["year_year_id"] = 2564;
            $data2["KR_idKR"] = $max;
            $data2["KR_object_idobject"] = $id; 
            DB::table('krdetail')->insert($data2);
        }
        return redirect()->back()->with('sucess','บันทึกข้อมูลเรียบร้อย');
    }
}
