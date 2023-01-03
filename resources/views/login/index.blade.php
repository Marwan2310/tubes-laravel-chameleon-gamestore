@extends('layouts.main')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Section: Design Block -->
    <div class="containerm">
        <div class="body">
            <section class="background-radial-gradient overflow-hidden rounded">
                <h1 class="h3 text-center mt-3">Please Login</h1>
                <hr style="color: aqua;">
                <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                    <div class="row gx-lg-5 align-items-center mb-5">
                        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                                <br />
                                <span style="color: hsl(218, 81%, 75%)">Welcome</span>
                            </h1>
                            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                                Thank you for visiting our website, please log in first and those of you who don't have an
                                account are welcome to create one first to enjoy your website further.

                            </p>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                            <div class="card bg-glass">
                                <div class="card-body px-4 py-5 px-md-5">
                                    <form action="/login" method="post">
                                        @csrf
                                        <h3 class="text-center" style="color: #00005C">Chameleon</h3>
                                        <hr style="color: #00005C;">
                                        <form>
                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <label class="mb-2" for="email">Email</label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    placeholder="name@example.com" autofocus required>

                                            </div>

                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <label class="mb-2" for="password">Password</label>
                                                <input type="password" name="password" class="form-control" id="password"
                                                    placeholder="Password" required>
                                            </div>
                                            <!-- Submit button -->
                                            <button type="submit" class="w-100 btn btn-lg btn-primary mt-3 mb-2">
                                                Login
                                            </button>
                                            <p class="text-center mb-2">
                                                Don't have an account? </p>
                                            <p class="text-center"> <a href="/register" style="text-decoration: none">Sign
                                                    up</a>
                                            </p>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>
@endsection
