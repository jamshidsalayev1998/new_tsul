<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
      <?php echo $__env->yieldContent('title'); ?>
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('admin_lte/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition login-page" style="background-image: url("<?php echo e(asset('img/test_background.jpg')); ?>")">
<!-- /.login-box -->
<?php echo $__env->yieldContent('content'); ?>
<!-- jQuery -->
<script src="<?php echo e(asset('admin_lte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin_lte/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/auth/layout.blade.php ENDPATH**/ ?>