<?php

namespace App\Http\Controllers\KamusController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApprovalController extends Controller
{
    //////// TANPA LOGIN
    public function show(){
        $users = DB::table('users')
            ->where('status', '3')->orderBy('kata', 'asc')->paginate(10);
        return view('AdminView.approvalkata',['users' => $users]);
    }

    public function penjelasanA($id)
    {
        $users = DB::table('users')
        ->where('id',$id)->get();
        return view('AdminView.penjelasanApproval',['users' => $users]);
    }

    public function reject($id){
    DB::update('update users set status = ? where id = ?',['5',$id]);
        return redirect()->back()->with('alert', 'Data has been Reject!');
    }

    public function approve($kata,$id){
        $data=DB::table('users')->where('kata',$kata)->where('status','=',1)->get();
    if(empty($data))
    {
        DB::update('update users set status = ? where id = ?',['1',$id]);
        return redirect()->back()->with('success', 'Data has been Approve!');
    }else{
    
        DB::update('update users set status = ? where id = ?',['6',$id]);
        return redirect()->back()->with('success', 'Data has been Approve!');
        }
    }

}

