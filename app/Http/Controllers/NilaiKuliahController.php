<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    //
    public function indexNilaiKuliah()
{
    $nilaikuliah = DB::table('nilaikuliah')
        ->select('ID', 'NRP', 'NilaiAngka', 'SKS', DB::raw('(NilaiAngka * SKS) as Bobot'),
            DB::raw('CASE
                WHEN NilaiAngka < 40 THEN "D"
                WHEN NilaiAngka BETWEEN 41 AND 60 THEN "C"
                WHEN NilaiAngka BETWEEN 61 AND 80 THEN "B"
                WHEN NilaiAngka BETWEEN 81 AND 100 THEN "A"
                ELSE "Invalid"
            END as NilaiHuruf'))
        ->paginate(10);

    return view('indexNilaiKuliah', ['nilaikuliah' => $nilaikuliah]);
}


    public function cari(Request $request) {
        $cari = $request->cari;

        $nilaikuliah = DB::table('nilaikuliah')
            ->where('NRP', 'like', "%".$cari."%")
            ->paginate();

        // Konversi Nilai Angka menjadi Nilai Huruf
        $nilaikuliah->getCollection()->transform(function($item) {
            $item->NilaiHuruf = $this->konversiNilaiHuruf($item->NilaiAngka);
            return $item;
        });

        return view('indexNilaiKuliah', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah meja
    public function tambah(){

	// memanggil view tambah
	return view('nilaiKuliahTambah');

    }

    public function store(Request $request){
	// insert data ke table meja
	DB::table('nilaikuliah')->insert([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS,
	    ]);
	// alihkan halaman ke halaman meja
	return redirect('/nilaikuliah');
    }

    public function edit($id){
        // mengambil data berdasarkan id (satu baris saja)
        $nilaikuliah = DB::table('nilaikuliah')->where('ID', $id)->first();

        // passing data meja yang didapat ke view edit.blade.php
        return view('nilaiKuliahEdit', ['nilaikuliah' => $nilaikuliah]);
    }


    public function update(Request $request){
	// update data meja
	DB::table('nilaikuliah')->where('ID',$request->id)->update([
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS,
	]);
	// alihkan halaman ke halaman meja
	return redirect('/nilaikuliah');
    }

    public function hapus($id){
	// menghapus data meja berdasarkan id yang dipilih
	DB::table('nilaikuliah')->where('ID',$id)->delete();

	// alihkan halaman ke halaman meja
	return redirect('/nilaikuliah');
    }

    // Helper function untuk konversi nilai huruf
    private function konversiNilaiHuruf($nilaiAngka) {
    if ($nilaiAngka < 40) {
        return 'D';
    } elseif ($nilaiAngka <= 60) {
        return 'C';
    } elseif ($nilaiAngka <= 80) {
        return 'B';
    } else {
        return 'A';
    }
}

}
