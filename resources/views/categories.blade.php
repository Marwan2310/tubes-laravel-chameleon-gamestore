@extends('layouts.main')

@section('container')

 {{-- category --}}
 <div class="body">
   <div class="heading-section">
      <h4>Categories</h4><br>
   </div>
   <div class="row">
      @foreach ($categories as $category)
      <div class="col-lg-12">
      
      <a href="/categories?category={{ $category->slug }}">
      
         <div class="row">
            <div class="col-lg-6 col-sm-12">
            <div class="item">
              <h4 class="text-center ms-3">{{ $category->title }}</h4>
              @if ($category->image)
              <div style="overflow: hidden; padding: 0; max-width: 350px;">
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}" class="img-fluid">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400/?{{ $category->title }}" alt="{{ $category->title }}" class="img-fluid">
              @endif
                  

    <div class="containerm">
        <div class="body">
            <div class="row">
                <div class="heading-section">
                    <h4>All Genre</h4><br>
                </div>
                @foreach ($categories as $category)
                    <div class="col-md-4 mb-3 rounded">
                        <div class="content">
                            <div class="content-overlay">
                                <div class="content-details fadeIn-bottom">
                                    <a
                                        href="/categories?category={{ $category->slug }} "class="text-white text-decoration-none text-center align-middle">
                                        <h3>{{ $category->title }}</h3>
                                    </a>
                                </div>
                            </div>
                            @if ($category->image)
                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}"
                                    class="content-image">
                            @else
                                <img src="https://source.unsplash.com/560x315/?{{ $category->name }}"
                                    alt="{{ $category->name }}" class="content-image">
                            @endif
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
