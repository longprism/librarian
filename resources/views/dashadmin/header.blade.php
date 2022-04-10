<header class="main-header">
  <a href="index2.html" class="logo">
    <span class="logo-mini" style="font-family:'Comfortaa', serif;"><b>L</b></span>
    <span class="logo-lg" style="font-family:'Comfortaa', serif;"><b>Librarian</b></span>
  </a>

  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('bower_components/admin-lte/dist/img/avatar.png')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">Lord Admin</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="{{asset('bower_components/admin-lte/dist/img/avatar.png')}}" class="img-circle" alt="User Image">

              <p>
                Lord Admin
                <small>Website Representative</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-right">
                <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
      </ul>
    </div>
  </nav>
</header>
