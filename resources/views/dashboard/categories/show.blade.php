@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3">{{ $category->title }}</h1>

      <a href="/dashboard/categories" class="btn btn-info mb-3 text-white font-weight-bold"><span data-feather="arrow-left"></span> Back to my all category</a>
     
      <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning mb-3 text-white font-weight-bold"><span data-feather="edit"></span> Edit</a>

      <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mb-3" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
      </form>
      
      
      @if ($category->image)
      <div style="overflow: hidden; padding: 0; max-width: 350px;">
        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" class="img-fluid">
      </div>
      @else
      <img src="https://source.unsplash.com/1200x400/?{{ $category->title }}" alt="{{ $category->title }}" class="img-fluid">
      @endif
      


    </div>
  </div>
</div>

@endsection