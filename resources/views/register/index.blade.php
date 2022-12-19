@extends('layouts.main')

@section('container')
      <h1 class="h3 text-center">Registration Form</h1>
      <hr style="color: aqua;">
      <div class="container">
        <div class=" row">
          <div class="col">
            <div class="card mb-4 justify-content-center" style="background-image:url(img/bg2.png);">
              <div class="row g-0 ">
                <div class="">
                  <img src="img/register3.jpg" class="img-fluid rounded-start" width="1300">
                </div>
                <div class="row">
                  <div class="login justify-content-center col-md-6 mb-4">
                    {{-- <div class="form-outline"> --}}
                    <form action="" width="400px" >
                        <label for="">Name</label>
                        <input type="" placeholder="Name">
                        <label for="">Username</label>
                        <input type="" placeholder="Username">
                      </form>
                    </div>
                    <div class="login justify-content-center col-md-6 mb-4">
                      <form action="" width="400px">  
                        <label for="">Email</label>
                        <input type="email" placeholder="example@gmail.com">
                        <label for="">Password</label>
                        <input type="password" placeholder="Password">
                      </form>
                    </div>
                  </div>
                <button>Register</button>
                <p>
                  Allready registered? </p><p> <a href="/login" style="text-decoration: none">Login</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection