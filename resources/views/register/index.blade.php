@extends('layouts.main')

@section('container')
      <h1 class="h3 text-center">Registration Form</h1>
      <hr style="color: aqua;">
<div class="container">
  <div class=" row">
    <div class="col-md-8">
      <div class="card mb-8 justify-content-center" style="background-image:url(img/bg2.png);">
        <div class="row g-0 ">
          <div class="col-md-4">
            <img src="img/login5.jpg" class="img-fluid rounded-start" style="trasparent">
          </div>

          <div class="col-md-4">
            <form action="">
              <h1 class="text-center" style="color: #9932CC; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">chameleon</h1><hr>
              
                <label for="">Name</label>
                <input type="" placeholder="Name">
                <label for="">Username</label>
                <input type="" placeholder="Username"> 
                <label for="">Email addres</label>
                <input type="email" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" placeholder="Password">
                <button>Register</button>
              

                <p>
                  Allready registered? </p><p> <a href="/login" style="text-decoration: none">Login</a>
                </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

