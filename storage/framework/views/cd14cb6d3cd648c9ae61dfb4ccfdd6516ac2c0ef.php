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
        <a class="nav-link border"  data-toggle="dropdown" href="#">
            <i class="fa fa-cog" aria-hidden="true"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-center" style="min-width: 200px;">

          <div class="dropdown-divider"></div>
          <button form="logout_form" href="#" class="dropdown-item">
            <i class="fa fa-user" aria-hidden="true"></i> Profil

          </button>
          <div class="dropdown-divider"></div>
            <button form="logout_form" href="#" class="dropdown-item">
            <span class="oi oi-account-login"></span>
             Chiqish

          </button>
            <form id="logout_form" action="<?php echo e(route('logout')); ?>" method="post">
                <?php echo csrf_field(); ?>

            </form>

        </div>
      </li>
    </ul>

  </nav>
<?php /**PATH /var/www/html/resources/views/admin/includes/header.blade.php ENDPATH**/ ?>