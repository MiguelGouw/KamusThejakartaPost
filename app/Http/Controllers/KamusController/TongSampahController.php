<?php

namespace App\Http\Controllers\KamusController;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;

class TongSampahController extends Controller
{
    public function tongsampah()
    {
    	$users = DB::table('users')->where('status', '3')->paginate(10);
        return view('KamusView.tongsampah',['users' => $users]);
    }
}
