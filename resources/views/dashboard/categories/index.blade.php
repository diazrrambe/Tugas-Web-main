@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Artikel Kategori</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive small col-lg-6">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new categories</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td><a href="#" class="badge bg-info"><span class="bi bi-eye" style="font-size: 1rem"></span></a>
                <a href="#" class="badge bg-warning"><span class="bi bi-pencil-square" style="font-size: 1rem"></span></a>
                <form action="#" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span class="bi bi-x-circle" style="font-size: 1rem"></span></button>
                </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- choose one -->
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script src="path/to/dist/feather.js"></script>

@endsection
