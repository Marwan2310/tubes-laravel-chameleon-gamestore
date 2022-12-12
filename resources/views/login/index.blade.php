@extends('layouts.main')

@section('container')
      <h1 class="h3 text-center">Please Login</h1>
      <hr style="color: aqua;">
<div class="container">
  <div class=" row">
    <div class="col">
      <div class="card mb-4 justify-content-center" style="background-image:url(img/bg2.png);">
        <div class="row g-0 ">
          <div class="col-md-6">
            <img src="img/login5.jpg" class="img-fluid rounded-start" width="500"><br>
          </div>
          <div class="login justify-content-center">
            <form action="">
              <h1 class="text-center" style="color: #9932CC; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">chameleon</h1><hr>
                <label for="">Email</label>
                <input type="email" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" placeholder="Password">
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

