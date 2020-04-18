<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use PDF;

class LaporanController extends Controller
{

	public function index(){
		return view('/laporan/generate-laporan');
	}


    public function cetakSPP(){
     $spp =	DB::table('spp')->get();

     $pdf = PDF::loadview('/laporan/spp_pdf',['spp' => $spp]);
     return $pdf->download('laporan-spp.pdf');
    }

    public function cetakPetugas(){
    	$petugas = DB::table('users')->where('role',3)->get();

    	$pdf = PDF::loadview('/laporan/petugas_pdf',['petugas' => $petugas]);
     	return $pdf->download('laporan-petugas.pdf');
    }


    public function cetakSiswa(){
    	$siswa = DB::table('users')->where('role',1)->get();

    	$pdf = PDF::loadview('/laporan/siswa_pdf',['siswa' => $siswa]);
     	return $pdf->download('laporan-siswa.pdf');

    }

    public function cetakAdmin(){

    	$admin = DB::table('users')->where('role',2)->get();

    	$pdf = PDF::loadview('/laporan/admin_pdf',['admin' => $admin]);
     	return $pdf->download('laporan-admin.pdf');
    }


}
