<?php

namespace App\Http\Controllers\KamusController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PenjelasanController extends Controller
{
    public function kataberdasarkanid($kata)
    {
        $users = DB::table('users')
        ->where('kata',$kata)->where('status','1')->get();
        $tambahan = DB::table('users')->where('kata',$kata)->where('status','6')->get();
        if($tambahan == NUll){
            return view('KamusView.penjelasan',['users' => $users]);
        }else{
            return view('KamusView.penjelasan',['users' => $users,'tambahan'=> $tambahan]);    
        }
    }

    /////ADMIN
    public function kataberdasarkanidAdmin($kata)
    {
        $users = DB::table('users')
        ->where('kata',$kata)->where('status','1')->get();
        $tambahan = DB::table('users')->where('kata',$kata)->where('status','6')->get();
        if($tambahan == NUll){
            return view('AdminView.penjelasan',['users' => $users]);
        }else{
            return view('AdminView.penjelasan',['users' => $users,'tambahan'=> $tambahan]);

        }
    }

    //////USER
    public function kataberdasarkanidUser($kata)
    {
        $users = DB::table('users')
        ->where('kata',$kata)->where('status','1')->get();
        $tambahan = DB::table('users')->where('kata',$kata)->where('status','6')->get();
        if($tambahan == NUll){
            return view('UserView.penjelasan',['users' => $users]);
        }else{
            return view('UserView.penjelasan',['users' => $users,'tambahan'=> $tambahan]);
        }
    }
}


// ->orWhere('phone', 'like', '%'.$request->SearchQuery.'%')-