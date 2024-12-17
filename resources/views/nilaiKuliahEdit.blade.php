@extends('template')

@section('tulisan1', 'Edit Meja')

@section('link1')
    <a href="/meja"> Kembali</a>
@endsection

@section('konten')
	@foreach($nilaikuliah as $nk)
	<form action="/nilaikuliah/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $nilaikuliah->ID }}"> <br/>
        <div class="row mb-3">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
              <input type="text" name="NRP" class="form-control" id="NRP" required="required" value="{{ $nilaikuliah->NRP }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
              <input type="text" name="nilaiangka" class="form-control" id="nilaiangka" required="required" value="{{ $nilaikuliah->NilaiAngka }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
              <input type="text" name="SKS" class="form-control" id="SKS" required="required" value="{{ $nilaikuliah->SKS }}">
            </div>
        </div>


        <div class="row mb-3">
            <div class="col-sm-12">
              <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
	</form>
	@endforeach
@endsection
