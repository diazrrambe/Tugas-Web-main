@extends('layout.main')

@section('container')

<h1 class="category-title">{{ $title }}</h1>

<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="#" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                <img src="{{ asset('img/'. $post->slug .'.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-dark text-decoration-none">{{ $post->title }}</a></h5>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/post/{{ $post->slug }}" class="btn btn-warning">Read more</a>
                </div>
            </div>
        </div>
            @endforeach
    </div>

    <a href="/categories" class="text-decoration-none mb-5" style="color: salmon; font-size: 20px;">Back to Categories</a>
</div>


@endsection
