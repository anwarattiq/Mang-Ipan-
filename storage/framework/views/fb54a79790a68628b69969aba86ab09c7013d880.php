<?php $__env->startPush('css_lib'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.min.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('plugins/dropzone/bootstrap.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo trans('lang.user_profile'); ?> <small><?php echo e(trans('lang.media_desc')); ?></small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('lang.dashboard')); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo e(trans('lang.user_profile')); ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fa fa-user mr-2"></i> <?php echo e(trans('lang.user_about_me')); ?></h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src="<?php echo e(auth()->user()->getFirstMediaUrl('avatar','icon')); ?>" class="profile-user-img img-fluid img-circle" alt="<?php echo e(auth()->user()->name); ?>">
                            </div>
                            <h3 class="profile-username text-center"><?php echo e(auth()->user()->name); ?></h3>
                            <p class="text-muted text-center"><?php echo e(implode(', ',$rolesSelected)); ?></p>
                            <a class="btn btn-outline-<?php echo e(setting('theme_color')); ?> btn-block" href="mailto:<?php echo e(auth()->user()->email); ?>"><i class="fa fa-envelope mr-2"></i><?php echo e(auth()->user()->email); ?>

                            </a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                <?php if($customFields): ?>
                    <!-- About Me Box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa fa-list mr-2"></i><?php echo e(trans('lang.custom_field_plural')); ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php $__currentLoopData = $customFieldsValues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><?php echo e(trans('lang.user_'.$value->customField->name)); ?></strong>
                                    <p class="text-muted">
                                        <?php echo $value->view; ?>

                                    </p>
                                    <?php if(!$loop->last): ?>
                                        <hr> <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    <!-- /.card -->
                    <?php endif; ?>
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="clearfix"></div>
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?php echo url()->current(); ?>"><i class="fa fa-cog mr-2"></i><?php echo e(trans('lang.app_setting')); ?></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <?php echo Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']); ?>

                            <div class="row">
                                <?php echo $__env->make('settings.users.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <?php echo Form::close(); ?>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('layouts.media_modal',['collection'=>null], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts_lib'); ?>
    <!-- iCheck -->
    <script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
    <!-- select2 -->
    <script src="<?php echo e(asset('plugins/select2/select2.min.js')); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(asset('plugins/summernote/summernote-bs4.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('plugins/dropzone/dropzone.js')); ?>"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var dropzoneFields = [];
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rest\resources\views/settings/users/profile.blade.php ENDPATH**/ ?>