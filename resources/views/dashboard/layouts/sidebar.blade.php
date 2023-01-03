  @can('admin')

      <body id="body-pd">
          <header class="header" id="header">
              <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
          </header>
          <div class="l-navbar" id="nav-bar">
              <nav class="nav">
                  <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                              class="nav_logo-name">Chameleon</span> </a>


                      <div class="nav_list">
                          <a href="/" class="nav_link"> <i class='bx bx-home nav_icon'></i> <span
                                  class="nav_name">Home</span></a>
                          <a href="/dashboard" class="nav_link {{ Request::is('dashboard') ? 'active' : '' }}"> <i
                                  class='bx bx-file nav_icon'></i> <span class="nav_name">Dashboard</span></a>
                          <a href="/dashboard/posts" class="nav_link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                              <i class='bx bx-book nav_icon'></i> <span class="nav_name">My Posts</span> </a>
                          <a href="/dashboard/categories"
                              class="nav_link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"> <i
                                  class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Post
                                  Categories</span></a>

                      </div>

                  </div>

                  <form action="/logout" method="post">
                      @csrf



                  </form>
              </nav>
          </div>
      @endcan
