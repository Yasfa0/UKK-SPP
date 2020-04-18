<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    

	public function read(){
	 $petugas = DB::table('users')->where('role',2)->get();

	 return view('crud/petugas/read-petugas',['petugas' => $petugas]);

	}


    public function edit($id){

    	$siswa = DB::table('users')->where('id',$id)->get();
    	$kelas = DB::table('kelas')->get();

    	return view("/crud/petugas/update-petugas",['petugas' => $siswa, 'kelas' => $kelas]);
    }

    public function editProcess(Request $request){

    	DB::table('users')->where('id',$request->id)->update([
    		'name' => $request->siswa_nama,
    		'alamat' => $request->siswa_alamat,
    		'telepon' => $request->siswa_telepon,
    	]);

    	return redirect('/read-petugas');
    }

   public function delete(Request $request){
        DB::table('users')->where('id',$request->id)->delete();

        return redirect('/read-siswa');
    }

}
