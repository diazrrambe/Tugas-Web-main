@extends('dashboard.layouts.main')

@section('container')

<div class="container" id="container-post">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="category-title mb-3">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><span class="bi bi-arrow-left"></span> Back to all posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span class="bi bi-pencil-square"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span class="bi bi-x-circle" style="font-size: 1rem"></span> Delete</button>
            </form>

            <img src="https://source.unsplash.com/1200x600/?{{ $post->title_en }}" class="card-img-top mt-3" alt="..." class="img-fluid">

            <article class="my-3 fs-5">
                <p>{!! $post->body !!}</p>
            </article>

            <a href="/categories" class="text-decoration-none">Back to the Blog</a>
        </div>
    </div>
</div>

@endsection
