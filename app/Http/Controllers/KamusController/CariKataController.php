<?php

namespace App\Http\Controllers\KamusController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
class CariKataController extends Controller
{
    // BAGIAN ADMIN SEARCH
    public function cariAdmin(Request $request)
    {
        $cari = $request->get('cari');
        $uppercased = Str::ucfirst($cari);
        if(strlen($cari)<2)
        {
        	$users = DB::table('users')->where('kata', 'LIKE' ,$uppercased.'%')->where('status', '1')->orderBy('kata', 'asc')->paginate(10);
        	return view('AdminView.data_search',['users' => $users]);
        }else
        {
        	$users = DB::table('users')->where('kata','like','%'.$uppercased.'%')->where('status', '1')->orderBy('kata', 'asc')->paginate(10);	
        	return view('AdminView.data_search',['users' => $users]);
        }
    }
    // BAGIAN USER SEARCH
    public function cariUser(Request $request)
    {
        $cari = $request->get('cari');
        $uppercased = Str::ucfirst($cari);
        if(strlen($cari)<2)
        {
        	$users = DB::table('users')->where('kata', 'LIKE' ,$uppercased.'%')->where('status', '1')->orderBy('kata', 'asc')->paginate(10);
        	return view('UserView.data_search',['users' => $users]);
        }else
        {
        	$users = DB::table('users')->where('kata','like','%'.$uppercased.'%')->where('status', '1')->orderBy('kata', 'asc')->paginate(10);	
        	return view('UserView.data_search',['users' => $users]);
        }
    }
    // BAGIAN CARI KATA
    public function cari(Request $request)
    {
        $cari = $request->get('cari');
        $uppercased = Str::ucfirst($cari);
        if(strlen($cari)<2)
        {
        	$users = DB::table('users')->where('kata', 'LIKE' ,$uppercased.'%')->where('status', '1')->orderBy('kata', 'asc')->paginate(10);
        	return view('KamusView.data_search',['users' => $users]);
        }else
        {
        	$users = DB::table('users')->where('kata','like','%'.$uppercased.'%')->where('status', '1')->orderBy('kata', 'asc')->paginate(10);	
        	return view('KamusView.data_search',['users' => $users]);
        }
    }
}