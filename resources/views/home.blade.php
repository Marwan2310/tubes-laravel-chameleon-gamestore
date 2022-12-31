@extends('layouts.main')


@section('container')

    <body>

        <div class="banner-home">
            <br><br>
            <h6>Welcome To Chameleon</h6>
            <h4><em>Browse</em> And <em>Play</em></h4>
            <h4>Our Popular Games Here</h4>
        </div>


        <!-- {{-- slider --}}
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/fifa23.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
              <h5>Game</h5>
              <p>Find the most popular and newest games in the Chameleon game store and let's play</p>
              <a href="/posts" class="btn btn-info btn-rounded">View more</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/fortnitehd.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
              <h5>Category</h5>
              <p>Find games with various interesting categories that you like and let's play</p>
              <a href="/categories" class="btn btn-info btn-rounded">View more</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/team2.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
              <h5>Team</h5>
              <p>Get to know the Cameleon game store developers closer</p>
              <a href="/about" class="btn btn-info btn-rounded">View more</a>
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
      </div> -->
        <!-- News Information -->
        <div class="containerm">
            <div class="body">
                <div class="row">
                    <div class="heading-section">
                        <h4>New Games</h4><br>
                    </div>
                    @foreach ($posts->skip(-3) as $post)
                        <div class="col-md-4 mb-3">
                            <div class="content">
                                <div class="content-overlay">
                                    <div class="content-details fadeIn-bottom">
                                        <a href="/posts/{{ $post->slug }}"
                                            class="text-white text-decoration-none text-center align-middle">
                                            <h3>{{ $post->title }}</h3>
                                        </a>
                                    </div>
                                </div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="content-image">
                                @else
                                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                                        alt="{{ $post->category->name }}" class="content-image">
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>








        <!-- <div class="container">
        <div class="row">

      </div> -->

        <br><br>
        <!-- Free to play game -->
        <div class="container">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4>Free to Play Game</h4><br>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="img/tikustanah.png" alt="" width="215" height="215"><br>
                                    <h4 style="text-decoration: none; color:aliceblue">Pukul Tikus Tanah</h4><br><br>
                                    <a href="/pukultikus" role="button" class="btn btn-outline-info btn-rounded text-white"
                                        data-mdb-ripple-color="dark">Let's Play
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="img/2048_logo.png" alt="" width="215" height="215"><br>
                                    <h4 style="text-decoration: none; color:aliceblue">2048</h4><br><br>
                                    <a href="/2048" role="button" class="btn btn-outline-info btn-rounded text-white"
                                        data-mdb-ripple-color="dark">Let's Play
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="" alt="" width="215" height="215"><br>
                                    <h4 style="text-decoration: none; color:aliceblue">Pukul Tikus Tanah</h4><br><br>
                                    <a href="/pukultikus" role="button"
                                        class="btn btn-outline-info btn-rounded text-white"
                                        data-mdb-ripple-color="dark">Let's Play
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="" alt="" width="215" height="215"><br>
                                    <h4 style="text-decoration: none; color:aliceblue">Pukul Tikus Tanah</h4><br><br>
                                    <a href="/pukultikus" role="button"
                                        class="btn btn-outline-info btn-rounded text-white"
                                        data-mdb-ripple-color="dark">Let's Play
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Wishlist -->
        @auth
            <div class="container">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4>My Library</h4><br>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="item">
                                        <img src="img/login.jpg" alt="" width="215" height="215"><br>
                                        <h4><a href="" style="text-decoration: none; color:aliceblue">Nama
                                                Category</a><br><br><i class="" style="color: beige">game</i></h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="item">
                                        <img src="img/login.jpg" alt="" width="215" height="215"><br>
                                        <h4><a href="" style="text-decoration: none; color:aliceblue">Nama
                                                Category</a><br><br><i class="" style="color: beige">game</i></h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="item">
                                        <img src="img/login.jpg" alt="" width="215" height="215"><br>
                                        <h4><a href="" style="text-decoration: none; color:aliceblue">Nama
                                                Category</a><br><br><i class="" style="color: beige">game</i></h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="item">
                                        <img src="img/login.jpg" alt="" width="215" height="215"><br>
                                        <h4><a href="" style="text-decoration: none; color:aliceblue">Nama
                                                Category</a><br><br><i class="" style="color: beige">game</i></h4>
                                    </div>
                                </div>
                                <div class="col-lg-12" </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth
        @endsection
