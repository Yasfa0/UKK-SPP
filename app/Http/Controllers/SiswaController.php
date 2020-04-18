<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{

	public function read(){
	 $siswa = DB::table('users')->where('role',1)->get();

	 return view('crud/siswa/read-siswa',['siswa' => $siswa]);

	}


    public function create(){
    	return view('crud/siswa/create-siswa');
    }

    public function createProcess(Request $request){
    	DB::table('users')->insert([
    		'name' => $request->siswa_nama,
    		'email' => $request->siswa_email,
    		'password' => $request->siswa_password,
    	]);

    	return redirect('/read-siswa');
    }


    public function edit($id){

    	$siswa = DB::table('users')->where('id',$id)->get();
    	$kelas = DB::table('kelas')->get();

    	return view("/crud/siswa/edit-siswa",['siswa' => $siswa, 'kelas' => $kelas]);
    }

    public function editProcess(Request $request){

    	DB::table('users')->where('id',$request->id)->update([
    		'name' => $request->siswa_nama,
    		'nis' => $request->siswa_nis,
    		'id_kelas' => $request->siswa_kelas,
    		'alamat' => $request->siswa_alamat,
    		'telepon' => $request->siswa_telepon,
    	]);

    	return redirect('/read-siswa');
    }

    public function delete(Request $request){
        DB::table('users')->where('id',$request->id)->delete();

    	return redirect('/read-siswa');
    }

    public function activate(Request $request){
    	DB::table('users')->where('id',$request->id)->update([
    		'status_aktif' => 1,
    	]);

    	return redirect('/read-siswa');
    }

}
