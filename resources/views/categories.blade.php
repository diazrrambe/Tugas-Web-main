@extends('layout.main')
@section('container')

<section class="category mb-5">
    <h1>{{ $title }}</h1>
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

@endsection
