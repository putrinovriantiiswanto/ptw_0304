@extends('layouts.app_0304')

@section('title', 'Article')

@section('content')
    <div class="card mb-3">
        <img class="card-img-top" src="https://teknojurnal.com/wp-content/uploads/2016/03/feature-image-php-1280x720.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Pengertian Bahasa Pemrograman PHP</h5>
            <p class="card-text">
                Pengertian PHP
                PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source.

                Sebagai sebuah scripting language, PHP menjalankan instruksi pemrograman saat proses runtime. Hasil dari instruksi tentu akan berbeda tergantung data yang diproses.

                PHP merupakan bahasa pemrograman server-side, maka script dari PHP nantinya akan diproses di server. Jenis server yang sering digunakan bersama dengan PHP antara lain Apache, Nginx, dan LiteSpeed.
            </p>
            <a href="{{ route('article') }}" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    </div>

    <div class="card mb-3">
        <img class="card-img-top" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fappkey.id%2Fpembuatan-website%2Fteknologi-web%2Fpengembangan-web%2F&psig=AOvVaw0c6ZoiEMBpF7KiQ9kqWo8l&ust=1621772220334000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIDVgLyi3fACFQAAAAAdAAAAABAD" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">pengembangan teknologi web</h5>
            <p class="card-text">
            Website berupa halaman informasi yang disediakan melalui jalur internet sehingga dapat diakses di seluruh dunia 
            selama terkoneksi dengan jaringan internet. Website merupakan komponent atau kumpulan komponen yang terdiri dari teks, 
            gambar, suara animasi sehingga lebih merupakan media informasi yang menarik untuk dikunjungi.

            </p>
            <a href="{{ route('article') }}" class="btn btn-primary">Lihat Selengkapnya</a>
        </div>
    </div>
@endsection
