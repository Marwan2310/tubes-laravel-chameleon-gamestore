@extends('layouts.main')

@section('container')

<section class="background-radial-gradient overflow-hidden">
  <h1 class="h3 text-center mt-3">Registration Form</h1>
  <hr style="color: aqua;">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            Let's<br />
            <span style="color: hsl(218, 81%, 75%)">join us</span>
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
              <form action="/register" method="post">
                @csrf

              <h3 class="text-center" style="color: #00005C">Chameleon</h3>
              <hr style="color: #00005C;">
              <form>
                
                <div class="form-outline mb-4">
                  <label class="mb-2" for="name">Name</label>
                  <input type="text" name="name" class="form-control rounded-top
                    @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                  <label class="mb-2" for="username">Username</label>
                  <input type="text" name="username" 
                  class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                  
                  @error('username')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-outline mb-4">
                  <label class="mb-2" for="email">Email address</label>
                  <input type="email" name="email"
                  class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                  
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="form-outline mb-4">
                  <label class="mb-2" for="password">Password</label>
                  <input type="password" name="password"
                    class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    
                    @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>

                
                <!-- Submit button -->
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </button>
                <p class="text-center">
                  Allready registered? </p><p class="text-center"> <a href="/login" style="text-decoration: none">login</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- registrasi mantan
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form action="/register" method="post">
        @csrf

        <div class="form-floating">
          <input type="text" name="name" 
          class="form-control rounded-top
          @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="text" name="username" 
          class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="email" name="email"
           class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password"
          class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
    
        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
      </form>

      <small class="d-block text-center mt-3">Allready registered? <a href="/login">login</a></small>
    </main>
  </div>
</div>
 --}}

    
@endsection