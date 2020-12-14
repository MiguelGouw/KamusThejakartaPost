<?php

namespace App\Http\Controllers\KamusController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlphabetController extends Controller
{
    //////// TANPA LOGIN
    public function alphabet($text){
        $users = DB::table('users')
        ->where('kata', 'like', $text.'%')->where('status', '1','6')->orderBy('kata', 'asc')->paginate(10);
        return view('KamusView.alphabet',['users' => $users]);
    }

    public function getmain(){
        $vdata = array();
        $vdata['kataterbaru'] = $this->kataterbaru();
        $vdata['katarandom'] = $this->katarandom();
        return view('KamusView.kamusmain',$vdata); 
    }


    //////////////////ADMIN
    public function alphabetAdmin($text){
        $users = DB::table('users')
            ->where('kata', 'like', $text.'%')->where('status', '1','6')->orderBy('kata', 'asc')->paginate(10);
        return view('AdminView.alphabet',['users' => $users]);
    }

    public function getmainAdmin(){
        $vdata = array();
        $vdata['kataterbaru'] = $this->kataterbaru();
        $vdata['katarandom'] = $this->katarandom();
        return view('AdminView.main_Admin',$vdata); 
    }

     //////////////////USER
     public function alphabetUser($text){
        $users = DB::table('users')
        ->where('kata', 'like', $text.'%')->where('status', '1','6')->orderBy('kata', 'asc')->paginate(10);
        return view('UserView.alphabet',['users' => $users]);
    }

    public function getmainUser(){
        $vdata = array();
        $vdata['kataterbaru'] = $this->kataterbaru();
        $vdata['katarandom'] = $this->katarandom();
        return view('UserView.kamusmain',$vdata); 
    }

}

