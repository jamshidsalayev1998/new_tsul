<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/dist/css/adminlte.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/summernote/summernote-bs4.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/select2/css/select2.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
    <script src="<?php echo e(asset('admin_lte/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('link'); ?>

    <style>
        .last-td{
            width: 1px !important;
        }
        .menu_sidebar li a{
            color: white !important;
        }
        section.content{
            padding: 2px !important;
        }
        div.container-fluid{
            padding: 2px !important;
        }
        div.card{
            /*min-height: 91vh !important;*/
            margin-bottom: 0px !important;
        }
    </style>
    <style>
            /* [FULL SCREEN SPINNER] */
        #spinner-back, #spinner-front {
          position: fixed;
          width: 100vw;
          transition: all 1s;
          visibility: hidden;
          opacity: 0;
        }
        #spinner-back {
          z-index: 998;
          height: 100vh;
          background: rgba(0, 0, 0, 0.7);
        }
        #spinner-front {
          z-index: 999;
          color: #fff;
          text-align: center;
          margin-top: 50vh;
          transform: translateY(-50%);
        }
        #spinner-back.show, #spinner-front.show {
          visibility: visible;
          opacity: 1;
        }


     </style>
    <?php echo $__env->yieldContent('css'); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div id="spinner-back"></div>
    <div id="spinner-front">
      <img src="<?php echo e(asset('images/ajax-loader.gif')); ?>"/><br>
      Now loading...
    </div>

<div class="wrapper">
    <?php echo $__env->make('admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: rgba(0, 94, 208, 1) !important; ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="text-align: center">

      <span class="brand-text font-weight-light">

      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('admin_lte/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" >
          <a href="#" style="color: white !important;" class="d-block"><?php echo e(Auth::user()->name); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column menu_sidebar" data-widget="treeview" role="menu" data-accordion="false" style="color: white !important;">
          <?php echo $__env->make('admin.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?php echo $__env->yieldContent('content'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<?php echo $__env->yieldContent('js_after'); ?>
<script src="<?php echo e(asset('admin_lte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('admin_lte/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('admin_lte/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('admin_lte/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('admin_lte/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('admin_lte/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('admin_lte/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('admin_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('admin_lte/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('admin_lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin_lte/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('admin_lte/dist/js/demo.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('admin_lte/dist/js/pages/dashboard.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/toastr/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin_lte/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script>
    $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3
    });

        $('.swalDefaultSuccess').click(function() {
          Toast.fire({
            icon: 'success',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastrDefaultSuccess').click(function() {
          toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        <?php if(session('success')): ?>
            $(document).ready(function() {
              $(document).Toasts('create', {
                class: 'bg-success',
                title: '',
                subtitle: '',
                body: '<?php echo e(session('success')); ?>.'
              })
            });
        <?php endif; ?>

    });
    $('.button-back').click(function(){
        window.history.back();
    });
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
    $('.hrefed').click(function(){
        window.location.href = $(this).attr('href');
    });
</script>
<script>
    $('.change_eye_menu').click(function () {
        var id = $(this).attr('data-id');
        var url = '/admin/admin-change-eye-menu';
        var csrf = "<?php echo e(csrf_token()); ?>";
        var formdata = {
            'menu_id':id,
            '_token': csrf
        };
        var eye_v = $(this).find('i');
        show_loader();
        $.ajax({
            url:url,
            method: 'POST',
            data: formdata,
            success:function (result) {
                if(eye_v.hasClass('fa-eye')){
                    eye_v.removeClass('fa-eye');
                    eye_v.addClass('fa-eye-slash');
                }
                else{
                    eye_v.removeClass('fa-eye-slash');
                    eye_v.addClass('fa-eye');
                }
                hide_loader();
                // alert(result);
            }

        })
    });
     $('.change_eye_menu_top').click(function () {
        var id = $(this).attr('data-id');
        var url = '/admin/admin-change-eye-top-menu';
        var csrf = "<?php echo e(csrf_token()); ?>";
        var formdata = {
            'menu_id':id,
            '_token': csrf
        };
        var eye_v = $(this).find('i');
        show_loader();
        $.ajax({
            url:url,
            method: 'POST',
            data: formdata,
            success:function (result) {
                if(eye_v.hasClass('fa-eye')){
                    eye_v.removeClass('fa-eye');
                    eye_v.addClass('fa-eye-slash');
                }
                else{
                    eye_v.removeClass('fa-eye-slash');
                    eye_v.addClass('fa-eye');
                }
                hide_loader();
                // alert(result);
            }

        })
    });
    function show_loader(){
      document.getElementById("spinner-back").classList.add("show");
      document.getElementById("spinner-front").classList.add("show");
    }
    function hide_loader(){
      document.getElementById("spinner-back").classList.remove("show");
      document.getElementById("spinner-front").classList.remove("show");
    }
</script>
<script>
    /* [ALL YOU NEED] */


</script>
<?php echo $__env->yieldContent('js'); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH /var/www/html/resources/views/admin/layouts/master.blade.php ENDPATH**/ ?>