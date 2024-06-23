@extends('layout.main')

@section('container')

<section class="hero">
    <h4>Ikuti langkah-langkah sehat dari kami</h4>
    <h2>Segera cek berat badan anda</h2>
    <h1>melalui DIELTH</h1>

    <div class="button">
        <a href="/measure">Cek Sekarang!</a>
    </div>
</section>

<section class="category">
    <h1>Article Category</h1>
    <p>Mari mulai menjalani hidup sehat</p>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col md-4 mt-4">
                    <a href="/category/{{ $category->slug }}">
                        <div class="card text-bg-dark">
                            <img src="{{ asset('img/'. $category->slug .'.jpg') }}" class="card-img" alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                    <div class="card text-center md-4">
                        <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <p class="card-text">{{ $category->body }}</p>
                        <a href="/category/{{ $category->slug }}" class="btn btn-warning">Go</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="teks">
    <h1>Hot Article</h1>
    <p>Artikel yang saat ini paling banyak dilihat</p>
</section>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>kenali tubuhmu</h4>
        <h2>Segera cek BMI anda</h2>
        <span>untuk mengetahui apakah anda memiliki tubuh yang ideal dan sehat</span>
        <a href="/measure" class="white">Learn More</a>
    </div>

    <div class="banner-box banner2">
        <h4>Selalu jaga kesehatan anda</h4>
        <h2>Kenali workout</h2>
        <span>yang dapat membantu kesehatan anda menjadi lebih baik</span>
        <a href="/category/work-out" class="white">Learn More</a>
    </div>
</section>

<section id="banner3">
    <div class="banner-box banner3">
        <h2>Temukan fitur</h2>
        <h3>yang ingin anda cari</h3>
        <a href="/category" class="white">Go</a>
    </div>

    <div class="banner-box banner4">
        <h2>Menu Makanan</h2>
        <h3>yang cocok untuk diet</h3>
        <a href="/category/menu" class="white">Go</a>
    </div>

    <div class="banner-box banner5">
        <h2>Pilih buah dan sayur</h2>
        <h3>menyehatkan untuk tubuh</h3>
        <a href="/category/fruit-and-vegetable" class="white">Go</a>
    </div>
</section>

@endsection
