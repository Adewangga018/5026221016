@extends('template')

@section('tulisan1','Data Nilai Kuliah')

@section('link1')
    <a href="/pegawai/" class="btn btn-success">Data Pegawai</a>
    <a href="/meja/" class="btn btn-warning">Data Meja</a>
	<a href="/nilaikuliah/tambah" class="btn btn-primary"> + Tambah Data Baru</a>
@endsection

@section('konten')
	<br/>

	<form action="/nilaikuliah/cari" method="GET">
        <div class="row mb-3">
            <label for="cari" class="col-sm-2 col-form-label">Cari NRP :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari NRP ..." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success">
              </div>
        </div>
	</form>
	<br/>

	<table class="table table-striped table-hover">
        <thead class="table-primary">
            <tr>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th> <!-- Kolom Nilai Huruf -->
                <th>Bobot</th> <!-- Kolom Bobot yang baru ditambahkan -->
                <th>Opsi</th>
            </tr>
        </thead>
        @foreach($nilaikuliah as $nk)
        <tr>
            <td>{{ $nk->NRP }}</td>
            <td>{{ $nk->NilaiAngka }}</td>
            <td>{{ $nk->SKS }}</td>
            <td>{{ $nk->NilaiHuruf }}</td> <!-- Tampilkan nilai huruf -->
            <td>{{ $nk->Bobot }}</td> <!-- Tampilkan Bobot -->
            <td>
                <a href="/nilaikuliah/edit/{{ $nk->ID }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                |
                <a href="/nilaikuliah/hapus/{{ $nk->ID }}" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a>
            </td>
        </tr>
        @endforeach
    </table>
    <br/>
	Halaman : {{ $nilaikuliah->currentPage() }} <br/>
	Jumlah Data : {{ $nilaikuliah->total() }} <br/>
	Data Per Halaman : {{ $nilaikuliah->perPage() }} <br/>


	{{ $nilaikuliah->links() }}

@endsection
