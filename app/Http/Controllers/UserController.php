<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function home(){
    	return view('home-user');
    }

    public function profile($id){
    	$users = DB::table('users')->where('id',$id)->get();

    	return view('/user/user-profile',['users' => $users]);
    }

    public function profileProcess(Request $request){
    	DB::table('users')->where('id',$request->id)->update([
    		'nis' => $request->siswa_nis,
    		'alamat' => $request->siswa_alamat,
    		'telepon' => $request->siswa_telepon,
    		'name' => $request->siswa_nama
    	]);

    	return redirect('/home-user');
    }

    public function riwayat($id){
    	$spp = DB::table('spp')->where('nis',$id)->get();   
    	return view('/user/user-riwayat',['spp' => $spp]);
    }
}
