<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_lte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/summernote/summernote-bs4.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin_lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <style>
        .last-td{
            width: 1px !important;
        }
        .menu_sidebar li a{
            color: white !important;
        }
    </style>
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


{{--  @yield('header')--}}
  <!-- /.navbar -->
    @include('admin.includes.header')

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: rgba(0, 94, 208, 1) !important; ">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="text-align: center">
{{--      <img src="{{asset('admin_lte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
      <span class="brand-text font-weight-light">
          <svg width="120" height="30" viewBox="0 0 120 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6.37278 11.532V29.7724H0V11.532H6.37278Z" fill="white"/>
            <path d="M21.9346 11.3694C24.0372 11.3694 25.7063 12.0739 26.9418 13.4828C28.1773 14.8701 28.7951 16.7559 28.7951 19.1403V29.7724H22.4223V19.9856C22.4223 18.9452 22.1514 18.1323 21.6095 17.5471C21.0676 16.9401 20.3414 16.6367 19.431 16.6367C18.4773 16.6367 17.7294 16.9401 17.1875 17.5471C16.6456 18.1323 16.3747 18.9452 16.3747 19.9856V29.7724H10.0019V11.532H16.3747V14.1331C16.9383 13.3094 17.6969 12.6483 18.6507 12.1497C19.6044 11.6295 20.6991 11.3694 21.9346 11.3694Z" fill="white"/>
            <path d="M43.0541 24.3425V29.7724H40.2904C35.63 29.7724 33.2998 27.4639 33.2998 22.8469V16.8318H31.0564V11.532H43.0216V16.8318H39.7051V22.9444C39.7051 23.443 39.8135 23.8006 40.0303 24.0174C40.2687 24.2342 40.6589 24.3425 41.2008 24.3425H43.0541Z" fill="white"/>
            <path d="M44.9366 20.6359C44.9366 18.7501 45.2726 17.1027 45.9445 15.6938C46.6382 14.2848 47.5703 13.201 48.7408 12.4424C49.9329 11.6837 51.2552 11.3044 52.7075 11.3044C53.9647 11.3044 55.0485 11.5536 55.9589 12.0522C56.8693 12.5507 57.5738 13.2227 58.0723 14.0681V11.532H64.4451V29.7724H58.0723V27.2363C57.5738 28.0817 56.8585 28.7536 55.9264 29.2522C55.016 29.7507 53.943 30 52.7075 30C51.2552 30 49.9329 29.6207 48.7408 28.862C47.5703 28.1033 46.6382 27.0195 45.9445 25.6106C45.2726 24.18 44.9366 22.5217 44.9366 20.6359ZM58.0723 20.6359C58.0723 19.4654 57.7472 18.5442 57.0969 17.8722C56.4683 17.2003 55.688 16.8643 54.7559 16.8643C53.8021 16.8643 53.011 17.2003 52.3823 17.8722C51.7537 18.5225 51.4394 19.4437 51.4394 20.6359C51.4394 21.8064 51.7537 22.7385 52.3823 23.4321C53.011 24.1041 53.8021 24.4401 54.7559 24.4401C55.688 24.4401 56.4683 24.1041 57.0969 23.4321C57.7472 22.7602 58.0723 21.8281 58.0723 20.6359Z" fill="white"/>
            <path d="M74.4493 2V29.7724H68.0765V2H74.4493Z" fill="white"/>
            <path d="M84.4512 11.532V29.7724H78.0784V11.532H84.4512Z" fill="white"/>
            <path d="M111.913 11.3694C114.211 11.3694 116.01 12.063 117.311 13.4503C118.633 14.8376 119.294 16.7342 119.294 19.1403V29.7724H112.921V19.9856C112.921 19.0102 112.65 18.2516 112.108 17.7097C111.566 17.1677 110.829 16.8968 109.897 16.8968C108.965 16.8968 108.228 17.1677 107.686 17.7097C107.144 18.2516 106.874 19.0102 106.874 19.9856V29.7724H100.501V19.9856C100.501 19.0102 100.23 18.2516 99.6879 17.7097C99.1677 17.1677 98.4415 16.8968 97.5095 16.8968C96.5557 16.8968 95.8079 17.1677 95.266 17.7097C94.7241 18.2516 94.4531 19.0102 94.4531 19.9856V29.7724H88.0804V11.532H94.4531V13.938C95.0167 13.1577 95.7429 12.5399 96.6316 12.0847C97.542 11.6078 98.5824 11.3694 99.7529 11.3694C101.097 11.3694 102.289 11.662 103.329 12.2473C104.392 12.8325 105.226 13.6562 105.833 14.7183C106.483 13.7212 107.34 12.9192 108.402 12.3123C109.464 11.6837 110.634 11.3694 111.913 11.3694Z" fill="white"/>
            <path d="M0 -3.52859e-05L64.6896 -3.52859e-05V6.43506L0 6.43506L0 -3.52859e-05Z" fill="url(#paint0_linear)"/>
            <defs>
            <linearGradient id="paint0_linear" x1="0" y1="3.21751" x2="63.1031" y2="3.21751" gradientUnits="userSpaceOnUse">
            <stop stop-color="#15EBAB"/>
            <stop offset="1" stop-color="#005ED0" stop-opacity="0"/>
            </linearGradient>
            </defs>
            </svg>


      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin_lte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" >
          <a href="#" style="color: white !important;" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column menu_sidebar" data-widget="treeview" role="menu" data-accordion="false" style="color: white !important;">
          @include('admin.includes.menu')
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin_lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin_lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin_lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin_lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('admin_lte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin_lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin_lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin_lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin_lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin_lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_lte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin_lte/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin_lte/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('admin_lte/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
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
        @if(session('success'))
            $(document).ready(function() {
              $(document).Toasts('create', {
                class: 'bg-success',
                title: 'INTALIM',
                subtitle: '',
                body: '{{session('success')}}.'
              })
            });
        @endif

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
@yield('js')
</body>
</html>
