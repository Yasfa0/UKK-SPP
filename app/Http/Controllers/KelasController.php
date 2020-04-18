<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function read(){

    	$kelas = DB::table('kelas')->get();

    	return view("crud/kelas/read-kelas",['kelas' => $kelas]);
    }

    public function create(){
    	return view("crud/kelas/create-kelas");
    }

    public function createProcess(Request $request){
    	DB::table('kelas')->insert([
    		'nama_kelas' => $request->kelas_nama,
    		'kompetensi_keahlian' => $request->kelas_kompetensi
    	]);

    	return redirect('/read-kelas');
    }


    public function edit($id){

    	$kelas = DB::table('kelas')->where('id_kelas',$id)->get();

    	return view("/crud/kelas/update-kelas",['kelas' => $kelas]);
    }

    public function editProcess(Request $request){

    	DB::table('kelas')->where('id_kelas',$request->id_kelas)->update([
    		'nama_kelas' => $request->kelas_nama,
    		'kompetensi_keahlian' => $request->kelas_kompetensi
    	]);

    	return redirect('/read-kelas');
    }

    public function delete($id){
    	DB::table('kelas')->where('id_kelas',$id)->delete();
    	return redirect('/read-kelas');
    }

}
