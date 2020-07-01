@extends('layouts.app')


@section('content')

            

<div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center text-center">
        @foreach( $pilihans as $item )
        <div class="col-lg-4 col-md-6 mt-5">
            <div class="card">
                <img src="{{ url('/images/' .$item->gambar ) }}" class="card-img-top" height="300px">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->namaKopi }}</h5>
                    <p class="card-text">{{ $item->deskripsi }}</p>
                    @auth
                    <a href="/kopi/hapus/{{ $item->id }}" class="btn float-left btn-danger">Hapus</a>
                    <a href="/kopi/edit/{{ $item->id }}" class="btn float-left btn-warning">Edit</a>
                    @endauth
                    <a href="#" class="btn float-right btn-primary disabled">Rp {{ $item->harga }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="row h-100 align-items-center justify-content-center text-center">
        {{ $pilihans->links() }}
    </div>

</div>

@endsection
