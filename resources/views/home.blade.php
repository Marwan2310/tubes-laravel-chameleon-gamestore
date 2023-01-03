@extends('layouts.main')

@section('container')
    <style>
        body {

            background-image: url(/img/bg.jpg);
            background-size: contain;
            background-repeat: no-repeat;

            background-color: #00204a;
        }
    </style>

    <body>

        <div class="banner-home">
            <br><br>
            <h6>Welcome To Chameleon</h6>
            <h4><em>Browse</em> And <em>Play</em></h4>
            <h4>Our Popular Games Here</h4>
            <div class="date-now" style="color: white">

            </div>
        </div>
        <br><br><br>
        <br><br><br>
        <br><br><br>

        <!-- News Information -->
        <div class="containerm">
            <div class="body">
                <div class="row">
                    <div class="heading-section">
                        <h4>New Games</h4><br>
                    </div>
                    @foreach ($posts->skip(-3) as $post)
                        <div class="col-md-4 mb-3 rounded">
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
                                    <img src="https://source.unsplash.com/560x315/?{{ $post->category->name }}"
                                        alt="{{ $post->category->name }}" class="content-image">
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


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

                                    @auth
                                        <a href="/pukultikus" role="button"
                                            class="btn btn-outline-primary btn-rounded text-white">Let's Play
                                        </a>
                                    @endauth

                                    <?php
                                    $loggedIn = auth()->check();
                                    if ($loggedIn != 1) {
                                    ?>
                                    <a href="/login" role="button" class="btn btn-outline-primary btn-rounded text-white"
                                        data-mdb-ripple-color="light">LOGIN FIRST
                                    </a>
                                    <?php } ?>

                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="img/2048_logo.png" alt="" width="215" height="215"><br>
                                    <h4 style="text-decoration: none; color:aliceblue">2048</h4><br><br>



                                    @auth
                                        <a href="/2048" role="button" class="btn btn-outline-primary btn-rounded text-white"
                                            data-mdb-ripple-color="dark">Let's Play
                                        </a>
                                    @endauth

                                    <?php
                                    $loggedIn = auth()->check();
                                    if ($loggedIn != 1) {
                                    ?>
                                    <a href="/login" role="button" class="btn btn-outline-primary btn-rounded text-white"
                                        data-mdb-ripple-color="dark">LOGIN FIRST
                                    </a>
                                    <?php } ?>



                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="img/snake.jpg" alt="" width="215" height="215"><br>
                                    <h4 style="text-decoration: none; color:aliceblue">Snake</h4><br><br>
                                    @auth
                                        <a href="/snake" role="button" class="btn btn-outline-primary btn-rounded text-white"
                                            data-mdb-ripple-color="dark">Let's Play
                                        </a>
                                    @endauth

                                    <?php
                                    $loggedIn = auth()->check();
                                    if ($loggedIn != 1) {
                                    ?>
                                    <a href="/pukultikus" role="button"
                                        class="btn btn-outline-primary btn-rounded text-white"
                                        data-mdb-ripple-color="dark">LOGIN FIRST
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                    <img src="img/tictactoe.png" alt="" width="215" height="215"><br>
                                    <h4 style="text-decoration: none; color:aliceblue">Tic Tac Toe</h4><br><br>
                                    @auth
                                        <a href="/tictactoe" role="button"
                                            class="btn btn-outline-primary btn-rounded text-white"
                                            data-mdb-ripple-color="dark">Let's Play
                                        </a>
                                    @endauth

                                    <?php
                                    $loggedIn = auth()->check();
                                    if ($loggedIn != 1) {
                                    ?>
                                    <a href="/login" role="button" class="btn btn-outline-primary btn-rounded text-white"
                                        data-mdb-ripple-color="dark disabled">LOGIN FIRST
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
