<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(setting('app_name')); ?> | <?php echo e(setting('app_short_description')); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo e($app_logo); ?>" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link href="https://unpkg.com/ionicons@4.1.2/dist/css/ionicons.min.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">


<!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e($app_logo); ?>" alt="<?php echo e(setting('app_name')); ?>"></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- iCheck -->
<script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
<script>
    $(function () {
        $('.icheck input').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue',
            increaseArea: '20%' // optional
        })
    })
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/layouts/auth/default.blade.php ENDPATH**/ ?>