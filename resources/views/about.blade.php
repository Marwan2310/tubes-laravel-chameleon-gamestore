@extends('layouts/main')

@section('container')
<body>
  
{{-- slider --}}
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/marwan.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
        <h5>Marwan Hakim</h5>
        <p>Project Team Manager</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/dika.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
        <h5>Dika Sulaeman Akbar</h5>
        <p>Back End Developer</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/yazman.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
        <h5>Mochamad Yazman Yazid</h5>
        <p>Front End Developer</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/farriz.jpg" class="d-block w-100" alt="" height="460" style="border-radius: 23px;">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 23px;">
        <h5>Farriz Brilliant Wichaksana</h5>
        <p>Front End Developer</p>
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

<div class="body">
  <div class="row">
    <div class="col-lg-12">
      <div class="heading-section">
      <h4 style="text-align: center">Our Team</h4><br>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12 mb-4">
          <section class="vh-50" style="background-color:#00005C; border-radius: 23px;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="img/pmarwan.png"
                  alt="Avatar" class="img-fluid my-5" style="width: 120px;">
                <h6>Marwan Hakim</h6>
                <p>Project Team Leader</p>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="row pt-1">
                    <div class="col-6 mb-1">
                      <h6>Email</h6>
                      <p class="text-light">marwan@chameleon.com</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-8 mb-3">
                      <h6>Phone</h6>
                      <p class="text-light">+62 812 1443 5052</p>
                    </div>
                  </div>
                  <h6>Follow</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="d-flex justify-content-start">
                    <a href=""><i class="bi bi-facebook" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-github ms-3" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-instagram ms-3" style="font-size: 2rem; color :white"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-lg-6 col-sm-12 mb-4">
          <section class="vh-50" style="background-color:#00005C; border-radius: 23px;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="img/pdika.png"
                  alt="Avatar" class="img-fluid my-5" style="width: 120px;">
                <h6>Dika Sulaeman Akbar</h6>
                <p>Back End Developer</p>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="row pt-1">
                    <div class="col-6 mb-1">
                      <h6>Email</h6>
                      <p class="text-light">dika@chameleon.com</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-8 mb-3">
                      <h6>Phone</h6>
                      <p class="text-light">+62 813 8682 8956</p>
                    </div>
                  </div>
                  <h6>Follow</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="d-flex justify-content-start">
                    <a href=""><i class="bi bi-facebook" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-github ms-3" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-instagram ms-3" style="font-size: 2rem; color :white"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-lg-6 col-sm-12 mb-4">
          <section class="vh-50" style="background-color:#00005C; border-radius: 23px;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="img/pyazman.png"
                  alt="Avatar" class="img-fluid my-5" style="width: 120px;">
                <h6>Mochamad Yazman Yazid</h6>
                <p>Front End Developer</p>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="row pt-1">
                    <div class="col-8 mb-1">
                      <h6>Email</h6>
                      <p class="text-light">yazman@chameleon.com</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-8 mb-3">
                      <h6>Phone</h6>
                      <p class="text-light">+62 895 1338 9183</p>
                    </div>
                  </div>
                  <h6>Follow</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="d-flex justify-content-start">
                    <a href=""><i class="bi bi-facebook" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-github ms-3" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-instagram ms-3" style="font-size: 2rem; color :white"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-lg-6 col-sm-12 mb-4">
          <section class="vh-50" style="background-color:#00005C; border-radius: 23px;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="img/pfarriz.png"
                  alt="Avatar" class="img-fluid my-5" style="width: 120px;">
                <h6>Farriz Brilliant Wichaksana</h6>
                <p>Front End Developer</p>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="row pt-1">
                    <div class="col-8 mb-1">
                      <h6>Email</h6>
                      <p class="text-light">farriz@chameleon.com</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-8 mb-3">
                      <h6>Phone</h6>
                      <p class="text-light">+62 895 8104 42525</p>
                    </div>
                  </div>
                  <h6>Follow</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="d-flex justify-content-start">
                    <a href=""><i class="bi bi-facebook" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-github ms-3" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-instagram ms-3" style="font-size: 2rem; color :white"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="body">
<div class="row">
    <div class="col-lg-12">
      <div class="heading-section">
      <h4 style="text-align: center">Company contact</h4><br>
      </div>
      <div class="row">
        <div class="col-lg-12 col-sm-12 mb-3">
          <section class="vh-50" style="background-color:#00005C; border-radius: 23px;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="img/logo2.png" class="img-fluid my-5" style="width: 80px;" />
                <h5>Chameleon</h5>
                <p>Game Developer</p>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h6>Information</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="row pt-1">
                    <div class="col-6 mb-1">
                      <h6>Email</h6>
                      <p class="text-light">chameleon@gmail.com</p>
                    </div>
                  </div>
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Phone</h6>
                      <p class="text-light">+62 2022 2023</p>
                    </div>
                  </div>
                  <h6>Follow</h6>
                  <hr class="mt-0 mb-4" style="color: #f4f5f7">
                  <div class="d-flex justify-content-start">
                    <a href=""><i class="bi bi-facebook" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-github ms-3" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-instagram ms-3" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-twitter ms-3" style="font-size: 2rem; color :white"></i></a>
                    <a href=""><i class="bi bi-youtube ms-3" style="font-size: 2rem; color :white"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
  </div>
<br><br>

@endsection