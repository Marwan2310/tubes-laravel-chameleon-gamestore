@extends('layouts.main')

@section('container')
@if(session()->has('success'))
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
<section class="background-radial-gradient overflow-hidden">
<h1 class="h3 text-center mt-3">Please Login</h1>
<hr style="color: aqua;">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Welcome<br />
          <span style="color: hsl(218, 81%, 75%)">back</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
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
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
                
              </div>
              
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="mb-2" for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
              <!-- Submit button -->
              <button type="submit" class="w-100 btn btn-lg btn-primary mt-3 mb-2">
                Login
              </button>
              <p class="text-center mb-2">
                Don't have an account? </p><p class="text-center"> <a href="/register" style="text-decoration: none">Sign up</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

{{-- 
      
<div class="container">
  <div class=" row">
    <div class="col">
      <div class="card mb-4 justify-content-center" style="background-image:url(img/bg2.png);">
        <div class="row g-0 ">
          <div class="col-md-6">
            <img src="img/login.jpg" class="img-fluid rounded-start" width="500"><br>
          </div>
          <div class="login justify-content-center">
            <form action="/login" method="post">
              @csrf
              
              <h1 class="text-center" style="color: #9932CC; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">chameleon</h1><hr>
              <label for="email">Email</label>  
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
               
                @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
  
          <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                
        
                <button>Login</button>
                <p>
                  Don't have an account? </p><p> <a href="/register" style="text-decoration: none">Sign up</a>
                </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection

