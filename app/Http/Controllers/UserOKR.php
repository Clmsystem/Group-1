<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserOKR extends Controller
{
    public function index($idUser)
    {
        $userObject = DB::table('object')
            ->leftJoin('kr', 'object.idobject', '=', 'kr.object_idobject')
            // ->leftJoin('krdetail', 'kr.idKR', '=', 'krdetail.KR_idKR')
            ->leftJoin('autrority', 'kr.idKR', '=', 'autrority.KR_idKR')
            ->where('autrority.Employee_id_employee', '=', $idUser)
            ->get();
        $mount = (int)date('m');
        return view('userGroup1.object', compact('userObject', 'mount'));
    }
    public function userKR($Object, $mount)
    {
        $idUser = session()->get('user')['id_employee'];
        $userKR = DB::table('object')
            ->leftJoin('kr', 'object.idobject', '=', 'kr.object_idobject')
            ->leftJoin('krdetail', 'kr.idKR', '=', 'krdetail.KR_idKR')
            ->leftJoin('autrority', 'kr.idKR', '=', 'autrority.KR_idKR')
            ->where('autrority.Employee_id_employee', '=', $idUser)
            ->where('krdetail.KR_object_idobject', '=', $Object)
            ->where('krdetail.mount', '=', $mount)
            ->get();
        return view('userGroup1.kr', compact('userKR'));
    }
    public function updateKRdetail(Request $request)
    {
        $idUser = session()->get('user')['id_employee'];
        DB::table('krdetail')
            ->where('idKRdetail', $request->id)
            ->update(['result' => $request->result, 'percent' => $request->percent, 'future_result' => $request->future_result, 'nameUser' => $idUser]);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
}
