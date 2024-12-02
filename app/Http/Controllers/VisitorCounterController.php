<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorCounterController extends Controller
{
    public function indexCounter()
    {
        // Ambil data dari tabel pagecounter
        $counter = DB::table('pagecounter')->first();

        // Jika tidak ada data, inisialisasi dengan jumlah 0
        if (!$counter) {
            DB::table('pagecounter')->insert(['Jumlah' => 0]);
            $counter = DB::table('pagecounter')->first();
        }

        // Increment jumlah pengunjung
        DB::table('pagecounter')->where('ID', $counter->ID)->increment('Jumlah');

        // Data untuk dikirim ke view
        $currentCount = $counter->Jumlah + 1;

        return view('pagecounter', compact('currentCount'));
    }

}
