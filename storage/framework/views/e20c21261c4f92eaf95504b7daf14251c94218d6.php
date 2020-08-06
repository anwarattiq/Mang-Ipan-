<?php $__env->startPush('css_lib'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.min.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('plugins/dropzone/bootstrap.min.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('plugins/colorpicker/bootstrap-colorpicker.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('settings_title',trans('lang.app_setting_mobile')); ?>
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
                <h5 class="col-12 pb-4"><i class="mr-3 fa fa-map"></i><?php echo trans('lang.app_setting_google_maps_key'); ?></h5>

                <div class="form-group row col-12">
                    <?php echo Form::label('google_maps_key', trans('lang.app_setting_google_maps_key'), ['class' => 'col-2 control-label text-right']); ?>

                    <div class="col-10">
                        <?php echo Form::text('google_maps_key', setting('google_maps_key',"AIzaSyAT07iMlfZ9bJt1gmGj9KhJDLFY8srI6dA"),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_google_maps_key_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_google_maps_key_help'); ?>

                        </div>
                    </div>
                </div>

                <h5 class="col-12 pb-4 custom-field-container"><i class="mr-3 fa fa-globe"></i><?php echo trans('lang.app_setting_language'); ?></h5>

                <!-- Lang Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('mobile_language', trans("lang.app_setting_mobile_language"),['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::select('mobile_language', $mobileLanguages, setting('mobile_language','en'), ['class' => 'select2 form-control']); ?>

                        <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_mobile_language_help")); ?></div>
                    </div>
                </div>

                <h5 class="col-12 pb-4 custom-field-container"><i class="mr-3 fa fa-mobile-phone"></i><?php echo trans('lang.app_setting_version'); ?></h5>

                <!-- app_version Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('app_version', trans('lang.app_setting_app_version'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('app_version', setting('app_version',"1.0.0"),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_app_version_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_app_version_help'); ?>

                        </div>
                    </div>
                </div>
                <!-- 'Boolean enable_facebook Field' -->
                <div class="form-group row col-6">
                    <?php echo Form::label('enable_version', trans('lang.app_setting_enable_version'),['class' => 'col-4 control-label text-right']); ?>

                    <div class="checkbox icheck">
                        <label class="w-100 ml-2 form-check-inline">
                            <?php echo Form::hidden('enable_version', null); ?>

                            <?php echo Form::checkbox('enable_version', 1, setting('enable_version', true)); ?>

                        </label>
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>">
                        <i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.app_setting')); ?>

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
    <script src="<?php echo e(asset('plugins/colorpicker/bootstrap-colorpicker.min.js')); ?>"></script>
    <script type="text/javascript">
        // $("input[name$='color']").colorpicker({
        $(".colorpicker-component, input[name$='color']").colorpicker({
            customClass: 'colorpicker',
            format: 'hex',
            sliders: {
                saturation: {
                    maxLeft: 200,
                    maxTop: 200
                },
                hue: {
                    maxTop: 200
                },
                alpha: {
                    maxTop: 200
                }
            }
        });
        Dropzone.autoDiscover = false;
        var dropzoneFields = [];
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rest\resources\views/settings/mobile/globals.blade.php ENDPATH**/ ?>