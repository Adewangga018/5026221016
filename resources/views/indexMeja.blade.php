@extends('template')

@section('tulisan1','Data Meja')

@section('link1')
    <a href="/pegawai/" class="btn btn-success">Data Pegawai</a>
    <a href="/meja/" class="btn btn-warning">Data Meja</a>
	<a href="/meja/tambah" class="btn btn-primary"> + Tambah Meja Baru</a>
@endsection

@section('konten')
	<br/>

	<form action="/meja/cari" method="GET">
        <div class="row mb-3">
            <label for="cari" class="col-sm-2 col-form-label">Cari Merk Meja :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Meja .." value="{{ old('cari') }}">
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
			<th>Merk</th>
			<th>Stock</th>
			<th>Status ketersediaan</th>
			<th>Opsi</th>
		</tr>
     </thead>
		@foreach($meja as $m)
		<tr>
			<td>{{ $m->merkmeja }}</td>
			<td>{{ $m->stockmeja }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
				<a href="/meja/edit/{{ $m->kodemeja }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/meja/hapus/{{ $m->kodemeja }}" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></a>
			</td>
		</tr>
		@endforeach
	</table>
    <br/>
	Halaman : {{ $meja->currentPage() }} <br/>
	Jumlah Data : {{ $meja->total() }} <br/>
	Data Per Halaman : {{ $meja->perPage() }} <br/>


	{{ $meja->links() }}

@endsection
