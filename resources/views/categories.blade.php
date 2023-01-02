@extends('layouts/main')

@section('container')

@endsection

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
                                  href="/posts?category={{ $category->slug }} "class="text-white text-decoration-none text-center align-middle">
                                  <h3>{{ $category->title }}</h3>
                              </a>
                          </div>
                      </div>
                      @if ($category->image)
                          <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->title }}"
                              class="content-image">
                      @else
                          <img src="https://source.unsplash.com/560x315/?{{ $category->title }}"
                              alt="{{ $category->title }}" class="content-image">
                      @endif
                  </div>
              </div>
          @endforeach
      </div>
    </div>
  </div>
@endsection

