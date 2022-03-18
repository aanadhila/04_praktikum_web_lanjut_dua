<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pegawai;

class PegawaiController extends Controller
{
     public function index()
    {
        // mengambil data pegawai
    	$pegawai = Pegawai::all();
    
        // mengirim data pegawai ke view pegawai 
        return view('pegawai', ['pegawai' => $pegawai]); 

        // // mengambil data pegawai yang memiliki id 1
        // $pegawai = Pegawai::where('id', 1)->get(); 
        // mengambil data pegawai yang id nya lebih besar dari 10
        // $pegawai = Pegawai::where('id', '>' , 10)->get();
        // // mengambil data pegawai yang id nya lebih besar sama dengan 10 
        // $pegawai = Pegawai::where('id', '>=' , 10)->get();
        // // mengambil data pegawai yang di namanya ada huruf a 
        // $pegawai = Pegawai::where('nama', 'like' , '%a%')->get();
        // // menampilkan 10 data pegawai per halaman
        // $pegawai = Pegawai::paginate(10);
    }
}
