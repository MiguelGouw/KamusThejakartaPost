<?php

namespace App\Http\Controllers\KamusController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
     //
     public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $data = DB::table('loginuser')->where('email',$email)->where('password',$password)->get();

        if(empty($data)){
            $vdata = array();
            $vdata['kataterbaru'] = $this->kataterbaru();
            $vdata['katarandom'] = $this->katarandom();
            session()->flash('error','Email atau password anda salah');
            return view('KamusView.login',$vdata);
        }

        if($data[0]->role == '1'){
        $vdata = array();
        $vdata['kataterbaru'] = $this->kataterbaru();
        $vdata['katarandom'] = $this->katarandom();
        return view('AdminView.main_Admin',$vdata);
        }
        else{
            $vdata = array();
            $vdata['kataterbaru'] = $this->kataterbaru();
            $vdata['katarandom'] = $this->katarandom();
            return view('UserView.kamusmain',$vdata);
        }
    }
    public function logout(){
        $vdata = array();
        $vdata['kataterbaru'] = $this->kataterbaru();
        $vdata['katarandom'] = $this->katarandom();
        return view('KamusView.kamusmain',$vdata);
        // return redirect()->to('/kamusmain');
    }


}

