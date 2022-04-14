<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a style="font-family:'Comfortaa', serif;" href="../../index2.html" class="navbar-brand"><b>L</b>ibrarian</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="{{url('/home')}}">Pustaka<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Members </a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
          </div>
        </form>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <!-- Tasks Menu -->
          <!-- User Account Menu -->
          <li><a class="fa fa-book" href="{{url('/confirm')}}">
            <span class="label label-warning">{{ $countconfirm }}</span>
          </a></li>
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('bower_components/admin-lte/dist/img/user.png')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">ensiana</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('bower_components/admin-lte/dist/img/user.png')}}" class="img-circle" alt="User Image">
                <p>
                  ensiana
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>
