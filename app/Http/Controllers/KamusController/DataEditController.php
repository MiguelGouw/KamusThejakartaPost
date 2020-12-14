<?php
namespace App\Http\Controllers\KamusController;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class DataEditController extends Controller
{
	public function show($id) {
        $users = DB::table('users')
        ->where('id',$id)->get();
        return view('AdminView.data_edit',['users' => $users]);
	}

	public function edit(Request $request,$id) {
		$name = $request->input('name');
		$penjelasan = $request->input('penjelasan');
		$kata = $request->input('kata');
		$created_at = new Carbon();
		$created_at ->timezone('Asia/Jakarta');
		$status = DB::table('users')->where('id',$id)->get();
		if($status[0]->status == '6'){
			DB::update('update users set status=? where id = ?',['7',$id]);
			$data = array("name"=>$name,"kata"=>$kata,"penjelasan"=>$penjelasan,"status"=>'6',"created_at"=>$created_at);
			DB::table('users')->insert($data);
		
			//Oper Kata Random & Kata Terbaru
			$vdata = array();
			$vdata['kataterbaru'] = $this->kataterbaru();
			$vdata['katarandom'] = $this->katarandom();
        
			return view('AdminView.main_Admin',$vdata); 
		}else{
			DB::update('update users set status=? where id = ?',['2',$id]);
			$data = array("name"=>$name,"kata"=>$kata,"penjelasan"=>$penjelasan,"status"=>'1',"created_at"=>$created_at);
			DB::table('users')->insert($data);
			
			//Oper Kata Random & Kata Terbaru
			$vdata = array();
			$vdata['kataterbaru'] = $this->kataterbaru();
			$vdata['katarandom'] = $this->katarandom();
			
			return view('AdminView.main_Admin',$vdata); 
			// return redirect()->back()->with('success', 'Data berhasil Diedit!');
		}
	}
}
