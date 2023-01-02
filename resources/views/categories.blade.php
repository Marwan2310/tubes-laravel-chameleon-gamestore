@extends('layouts/main')

@section('container')

{{-- slider --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="img/valo.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
       <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
         <h5>Action</h5>
         <p>Find the best action category games and let's play</p>
         <a href="/" class="btn btn-info btn-rounded">View more</a>
       </div>
     </div>
     <div class="carousel-item">
       <img src="img/fortnitehd.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
       <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
         <h5>Adventure</h5>
         <p>Find the best adventure category games and let's play</p>
         <a href="/" class="btn btn-info btn-rounded">View more</a>
       </div>
     </div>
     <div class="carousel-item">
       <img src="img/fifa23.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
       <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
         <h5>Sport</h5>
         <p>Find the best sport category games and let's play</p>
         <a href="/" class="btn btn-info btn-rounded">View more</a>
       </div>
     </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
   </button>
 </div>
 <br><br>

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
                  
            </div>
         </div>
         </div>
      
      </a>
      
   </div>
   @endforeach
     </div>
     
   </div>

@endsection
{{-- @foreach ($categories as $category)
      <div class="col-md-4">
         <a href="/posts?category={{ $category->slug }}">
            <div class="card text-bg-dark">
               <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
               <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
               </div>
            </div>
         </a>
      </div>
      @endforeach --}}