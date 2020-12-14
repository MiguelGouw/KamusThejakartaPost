<?php
namespace App\Http\Controllers\KamusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Str;

class DataInsertController extends Controller {
	public function AdminInsertForm(){
		return view('KamusView.data_create');
	}
	public function AdminInsertData(Request $request){
		$name = $request->input('name');
		$uppercasedname = Str::ucfirst($name);
		$kata = $request->input('kata');
		$uppercasedkata = Str::ucfirst($kata);
		$created_at = new Carbon();
		$created_at ->timezone('Asia/Jakarta');
		$penjelasan = $request->input('penjelasan');
		$uppercasedpenjelasan = Str::ucfirst($penjelasan);
		$isExist =  DB::select('select * from users where kata = ? AND status =?',[$uppercasedkata,'1']);

		if ($isExist == NULL) {
			$data = array("name"=>$uppercasedname,"kata"=>$uppercasedkata,"penjelasan"=>$uppercasedpenjelasan,"status"=>'1',"created_at"=>$created_at);
			DB::table('users')->insert($data);
			return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
        }else{
			$data = array("name"=>$uppercasedname,"kata"=>$uppercasedkata,"penjelasan"=>$uppercasedpenjelasan,"status"=>'6',"created_at"=>$created_at);
			DB::table('users')->insert($data);
            return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
       	}
	}

	/////////////USER
	public function UserInsertForm(){
		return view('UserView.data_create');
	}
	public function UserInsertData(Request $request){
		$name = $request->input('name');
		$uppercasedname = Str::ucfirst($name);
		$kata = $request->input('kata');
		$uppercasedkata = Str::ucfirst($kata);
		$created_at = new Carbon();
		$created_at ->timezone('Asia/Jakarta');
		$penjelasan = $request->input('penjelasan');
		$uppercasedpenjelasan = Str::ucfirst($penjelasan);
		$isExist =  DB::select('select * from users where kata = ? AND status =?',[$uppercasedkata,'1']);

		if ($isExist !== NULL) {
			$data = array("name"=>$uppercasedname,"kata"=>$uppercasedkata,"penjelasan"=>$uppercasedpenjelasan,"status"=>'3',"created_at"=>$created_at);
			DB::table('users')->insert($data);
			return redirect()->back()->with('success', 'Data berhasil ditambahkan!');
        }else{
            $data = array("name"=>$uppercasedname,"kata"=>$uppercasedkata,"penjelasan"=>$uppercasedpenjelasan,"status"=>'3',"created_at"=>$created_at);
			DB::table('users')->insert($data);
			return redirect()->back()->with('success', 'Data sama berhasil ditambahkan!');
       	}
	}
}