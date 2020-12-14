<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;


class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
    
    public function kataterbaru(){
        $kataterbaru = DB::table('users')
            ->where('status', '1')->orderBy('created_at', 'desc')->paginate(5);
        return $kataterbaru;
    }

    public function katarandom(){
        $katarandom = DB::table('users')
            ->where('status','1')->inRandomOrder('kata')->paginate(3);
        return $katarandom;
    }
}

