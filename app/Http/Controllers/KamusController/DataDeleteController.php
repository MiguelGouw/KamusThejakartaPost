<?php

namespace App\Http\Controllers\KamusController;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DataDeleteController extends Controller
{
    public function destroy($id) {
		DB::update('update users set status = ? where id = ?',['4',$id]);
		return redirect()->back()->with('alert', 'Data has been deleted!');
	}
	
	
}
