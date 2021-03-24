<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Kr extends Controller
{
    public function index($id)
    {
        $data = Session::put('id', $id);
        $kr = DB::table('kr')
            ->join('krdetail', 'kr.idKR', 'krdetail.KR_idKR')
            ->select('kr.nameKR', 'krdetail.*')->where('kr.object_idobject', '=', $id)->where('krdetail.mount', 1)->paginate(5);
        $employee = DB::table('employee')->get()->where('id_position', '=', 0)->where('id_department', '=', 0);
        $autrority = DB::table('autrority')->get();

        $max = DB::table('autrority')->max('idautrority');
        dd($autrority, $max);
        return view('section_one.objective', compact('kr', 'employee', 'autrority', 'max'));
    }
    public function addKR(Request $request)
    {
        // insert kr id คือ ob id
        $id = Session::get('id');
        $data = array();
        $data["status"] = 1;
        $data["nameKR"] = $request->keyobject;
        $data["object_idobject"] = $id;
        DB::table('kr')->insert($data);

        // ค่า kr ตัวล่าสุด
        $max = DB::table('kr')->max('idKR');

        // insert kr detail 12 เดือน
        for ($i = 1; $i <= 12; $i++) {
            $data2 = array();
            $data2["mount"] = $i;
            $data2["year_year_id"] = 2564;
            $data2["KR_idKR"] = $max;
            $data2["KR_object_idobject"] = $id;
            DB::table('krdetail')->insert($data2);
        }

        // insert สิทธ์ ซึ่งจะว่างไว้ก่อน
        // $data3 = array();
        // $data3["KR_idKR"] = $max;
        // $data3["Employee_id_employee"] = 0;
        // $data3["Employee_id_position"] = 0;
        // $data3["Employee_id_department"] = 0;
        // DB::table('autrority')->insert($data3);


        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
    // ยกเลิกสิทธิ
    public function cancelautrority($id, $employee)
    {
        DB::table('autrority')->where('KR_idKR', '=', $id)->where('Employee_id_employee', '=', $employee)->delete();
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
    // กำหนดสิทธิ
    public function giveautrority($id, $employee)
    {
        $data = array();
        $data["KR_idKR"] = $id;
        $data["Employee_id_employee"] = $employee;
        $data["Employee_id_position"] = 0;
        $data["Employee_id_department"] = 0;
        DB::table('autrority')->insert($data);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
    public function updateKR(Request $request)
    {
        DB::table('Kr')
            ->where('idKR', $request->id)
            ->update(['nameKR' => $request->result]);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
}
