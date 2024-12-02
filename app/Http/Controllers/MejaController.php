<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MejaController extends Controller
{
    //
    public function indexMeja(){
    	// mengambil data dari table meja
    	// $meja = DB::table('meja')->get(); //Hasilnya array 2D
        $meja = DB::table('meja')->paginate(10);
    	// mengirim data meja ke view index
    	return view('indexMeja',['meja' => $meja]);

    }

    public function cari(Request $request) {
	// menangkap data pencarian
	$cari = $request->cari;

 	// mengambil data dari table meja sesuai pencarian data
	$meja = DB::table('meja')
	->where('merkmeja','like',"%".$cari."%")
	->paginate();

    	// mengirim data meja ke view index
	return view('indexMeja',['meja' => $meja]);
    }

    // method untuk menampilkan view form tambah meja
    public function tambah(){

	// memanggil view tambah
	return view('mejaTambah');

    }

    public function store(Request $request){
	// insert data ke table meja
	DB::table('meja')->insert([
		'merkmeja' => $request->merk,
		'stockmeja' => $request->stock,
		'tersedia' => $request->tersedia,
	    ]);
	// alihkan halaman ke halaman meja
	return redirect('/meja');
    }

    public function edit($id){
	// mengambil data meja berdasarkan id yang dipilih
	$meja = DB::table('meja')->where('kodemeja',$id)->get();
	// passing data meja yang didapat ke view edit.blade.php
	return view('mejaEdit',['meja' => $meja]);
    }

    public function update(Request $request){
	// update data meja
	DB::table('meja')->where('kodemeja',$request->id)->update([
		'merkmeja' => $request->merk,
		'stockmeja' => $request->stock,
		'tersedia' => $request->stock > 0 ? 'Y' : 'N',
	]);
	// alihkan halaman ke halaman meja
	return redirect('/meja');
    }

    public function hapus($id){
	// menghapus data meja berdasarkan id yang dipilih
	DB::table('meja')->where('kodemeja',$id)->delete();

	// alihkan halaman ke halaman meja
	return redirect('/meja');
    }

}
