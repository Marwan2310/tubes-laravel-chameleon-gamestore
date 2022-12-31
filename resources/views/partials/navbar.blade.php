<nav class="navbar navbar-expand-lg mb-5 transparent">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="/">
      <img src="img/logo2.png" alt="Bootstrap" width="60px" height="45px" style="color: aliceblue">Chameleon
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link text-white nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About Us</a>
        </li>
    </div>

    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window"></i> My Dashboard</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
          </li>
        </ul>
      </li>
      @else
      <li class="nav-item">
        <a href="/login" class="btn btn-outline-light border-right-0" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link {{ ($active === "login") ? 'active' : '' }}">Login</a>
      </li>
      @endauth
    </ul>
  </div>
  </div>
</nav>