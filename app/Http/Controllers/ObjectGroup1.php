<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ObjectGroup1 extends Controller
{
 public function index()
    {
        $ob = DB::table('object')->get();
        $obkr = DB::table('Kr')->get();
        $max = DB::table('Kr')->max('idKR');
        return view('section_one.content',compact('ob','obkr','max'));
    }
    public function addObject(Request $request)
    {
        $id = DB::table('object')->max('idobject');

        $data = array();
        $data["nameObject"] = $request->keyobject;
        $data["status"] = 1;
        $data["year_year_id"] = 2564;
        $data["idobject"] = $id+1;

        DB::table('object')->insert($data);
        return redirect()->back()->with('sucess','บันทึกข้อมูลเรียบร้อย');
    }
    public function deleteObject(Request $request)
    {
        DB::table('object')->where('idobject', '=', $request->keyobject)->delete();
        return redirect()->back()->with('sucess','ลบข้อมูลเรียบร้อย');
    }
}
