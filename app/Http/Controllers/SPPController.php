<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SPPController extends Controller
{
    public function create(){
    	return view('/crud/spp/create-spp');
    }

    public function createProcess(Request $request){

    	DB::table('spp')->insert([
    	 'nis' => $request->spp_nis,
    	 'id_petugas' => $request->spp_petugas,
    	 'nominal' =>$request->spp_nominal,
    	 'untuk_bulan' => $request->spp_bulan,
    	 'untuk_tahun' => $request->spp_tahun,
    	 'tanggal_pembayaran' => $request->spp_tanggal,	
    	]);

    	return redirect('/home');
    }

    public function readOld(){
    	$spp = DB::table('spp')->get();

    	return view('/crud/spp/read-spp',['spp' => $spp ]);

    }

    public function edit($id){
    	$spp = DB::table('spp')->where('id_spp',$id)->get();
    	return view('/crud/spp/edit-spp',['spp' => $spp]);
    }

    
    public function editProcess(Request $request){

    	DB::table('spp')->where('id_spp',$request->spp_id)->update([
    		'nominal' => $request->spp_nominal,
    		'tanggal_pembayaran' => $request->spp_tanggal,
    		'untuk_bulan' => $request->spp_bulan,
    		'untuk_tahun' => $request->spp_tahun,
    	]);

    	return redirect('/home');
    }

    public function delete($id){
    	DB::table('spp')->where('id_spp',$id)->delete();
    	return redirect('/home');
    }

    public function read($id){
    	
    	if ($id == -1){
    	$spp = DB::table('spp')->get();
    	}else{
    	$spp = DB::table('spp')->where('id_petugas',$id)->get();    		
    	}

    	return view('/crud/spp/read-spp',['spp' => $spp]);
    }

}
