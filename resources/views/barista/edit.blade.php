@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Menu</div>

                <div class="card-body">
                    <form method="POST" action="/kopi/update/{{ $pilihans->id }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <img src="{{ url('/images/' .$pilihans->gambar ) }}" height="300px">
                                <input type="file" class="form-control" name="gambar"
                                >
                        </div>
                        <div class="form-group">
                            <label for="namaKopi">Nama Kopi</label>
                            <input type="text" class="form-control" name="namaKopi" value="{{ $pilihans->namaKopi }}">
                        </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" rows="2">{{ $pilihans->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $pilihans->harga }}">
                        </div>
                        <button class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
