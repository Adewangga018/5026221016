@extends('template')

@section('tulisan1', 'Edit Meja')

@section('link1')
    <a href="/meja"> Kembali</a>
@endsection

@section('konten')
	@foreach($meja as $m)
	<form action="/meja/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $m->kodemeja }}"> <br/>
        <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merk" class="form-control" id="merk" required="required" value="{{ $m->merkmeja }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="stock" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="text" name="stock" class="form-control" id="stock" required="required" value="{{ $m->stockmeja }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <select name="tersedia" id="tersedia" class="form-select" required>
                    <option value="Y" {{ $m->tersedia == 'Y' ? 'selected' : '' }}>Tersedia</option>
                    <option value="N" {{ $m->tersedia == 'N' ? 'selected' : '' }}>Tidak Tersedia</option>
                </select>
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
