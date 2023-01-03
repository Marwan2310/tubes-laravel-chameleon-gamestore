<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">Chameleon</span> </a>

                @can('admin')
                    <div class="nav_list">
                        <a href="/dashboard" class="nav_link {{ Request::is('dashboard') ? 'active' : '' }}"> <i
                                class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span></a>
                        <a href="/dashboard/posts" class="nav_link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                            <i class='bx bx-user nav_icon'></i> <span class="nav_name">My Posts</span> </a>
                        <a href="/dashboard/categories"
                            class="nav_link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"> <i
                                class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Post
                                Categories</span></a>

                    </div>
                @endcan
            </div>

            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 bg-transparent bx bx-log-out nav_icon"><i>
                        <span class="nav_name"></span></i> Logout</button>
            </form>
        </nav>
    </div>













    {{--
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">




<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">





    @can('admin')
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>ADMINISTRATOR</span>
    </h6>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
        <span data-feather="home" class="align-text-bottom"></span>
        Dashboard
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
        <span data-feather="file-text" class="align-text-bottom"></span>
        My Posts
      </a>
    </li>
  </ul>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page" href="/dashboard/categories">
          <span data-feather="grid" class="align-text-bottom"></span>
          Post Categories
        </a>

      </li>
    </ul>
    @endcan

  </div>
</nav> --}}
