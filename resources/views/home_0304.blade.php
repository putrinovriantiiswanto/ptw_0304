@extends('layouts.app_0304')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Halo Semua</h1>
        <p class="lead">Nama Saya : Putri Novrianti Iswanto</p>
        <p class="lead">NBI : 1461900304</p>
        <hr class="my-4">
        <p>saya mahasiswa Universitas 17 Agustus 1945 jurusan teknik informatika ,ada yang ditanya lebih lanjut silahkan hubungi kontak ini.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('contact') }}" role="button">Hubungi</a>
        </p>
    </div>
@endsection