<?php $__env->startPush('css_lib'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.min.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('plugins/dropzone/bootstrap.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('settings_title',trans('lang.user_table')); ?>
<?php $__env->startSection('settings_content'); ?>
    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="clearfix"></div>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo url()->current(); ?>"><i class="fa fa-cog mr-2"></i><?php echo e(trans('lang.app_setting_'.$tab)); ?></a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <?php echo Form::open(['url' => ['settings/update'], 'method' => 'patch']); ?>

            <div class="row">
                <?php $__currentLoopData = ['facebook','twitter','google']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h5 class="col-12 pb-4 <?php if(!$loop->first): ?> custom-field-container <?php endif; ?>"><i class="mr-3 fa fa-<?php echo e($social); ?>"></i><?php echo trans('lang.app_setting_'.$social); ?></h5>
                <!-- 'Boolean enable_facebook Field' -->
                <div class="form-group row col-12">
                    <?php echo Form::label('enable_'.$social, trans('lang.app_setting_enable_'.$social),['class' => 'col-2 control-label text-right']); ?>

                    <div class="checkbox icheck">
                        <label class="w-100 ml-2 form-check-inline">
                            <?php echo Form::hidden('enable_'.$social, null); ?>

                            <?php echo Form::checkbox('enable_'.$social, 1, setting('enable_'.$social, false)); ?>

                            <span class="ml-2"><?php echo trans('lang.app_setting_enable_'.$social.'_help'); ?></span>
                        </label>
                    </div>
                </div>
                <!-- facebook_app_id Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label($social.'_app_id', trans('lang.app_setting_'.$social.'_app_id'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text($social.'_app_id', setting($social.'_app_id'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_'.$social.'_app_id_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_'.$social.'_app_id_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- facebook_app_secret Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label($social.'_app_secret', trans('lang.app_setting_'.$social.'_app_secret'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text($social.'_app_secret', setting($social.'_app_secret'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_'.$social.'_app_secret_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_'.$social.'_app_secret_help'); ?>

                        </div>
                    </div>
                </div>
                    <hr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>">
                        <i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.app_setting_social')); ?>

                    </button>
                    <a href="<?php echo route('users.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
                </div>
            </div>
            <?php echo Form::close(); ?>

            <div class="clearfix"></div>
        </div>
    </div>
    </div>
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

<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rest\resources\views/settings/app/social.blade.php ENDPATH**/ ?>