@extends('layout.main')

@section('container')

    <div class="container" id="container-post">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="category-title mb-3">{{ $title }}</h1>

                <img src="https://source.unsplash.com/1200x600/?{{ $post->title_en }}" class="card-img-top" alt="..." class="img-fluid">

                <article class="my-3 fs-5">
                    <p>{!! $post->body !!}</p>
                </article>

                <a href="/category/{{ $post->category->slug }}" class="text-decoration-none" style="font-size: 18px; color: salmon;">Back to {{ $post->category->name }} category</a>
            </div>
        </div>
    </div>

@endsection
