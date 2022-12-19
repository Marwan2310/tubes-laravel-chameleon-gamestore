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


      <h1 class="h3 text-center">Please Login</h1>
      <hr style="color: aqua;">
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
</div>
@endsection

