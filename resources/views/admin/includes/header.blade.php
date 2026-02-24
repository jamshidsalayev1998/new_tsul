<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item">
      <button class="btn btn-light button-back"><i class="fa fa-arrow-left" aria-hidden="true"></i> ortga</button>
    </li>

  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->


    <!-- Messages Dropdown Menu -->

    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown" style="padding: 0 !important;">
      <a class="nav-link border" data-toggle="dropdown" href="#">
        <i class="fa fa-cog" aria-hidden="true"></i>
        {{-- <span class="badge badge-warning navbar-badge">15</span>--}}
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-center" style="min-width: 200px;">

        <div class="dropdown-divider"></div>
        <a href="{{ route('admin.profile.password.edit') }}" class="dropdown-item">
          <i class="fa fa-key" aria-hidden="true"></i> Parolni o'zgartirish
        </a>

        <div class="dropdown-divider"></div>
        <button onclick="document.getElementById('logout_form').submit();" class="dropdown-item">
          <i class="fas fa-sign-out-alt"></i>
          Chiqish
        </button>
        <form id="logout_form" action="{{route('logout')}}" method="post" style="display: none;">
          @csrf
        </form>

      </div>
    </li>
  </ul>

</nav>