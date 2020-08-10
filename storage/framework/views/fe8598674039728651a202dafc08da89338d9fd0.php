<?php $__env->startPush('css_lib'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.min.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('plugins/dropzone/bootstrap.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('settings_title',trans('lang.app_setting_notifications')); ?>
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
                <h5 class="col-12 pb-4"><i class="mr-3 fa fa-bell"></i><?php echo trans('lang.app_setting_notifications'); ?></h5>
                <!-- 'Boolean enable_facebook Field' -->
                <div class="form-group row col-12">
                    <?php echo Form::label('enable_notifications', trans('lang.app_setting_enable_notifications'),['class' => 'col-2 control-label text-right']); ?>

                    <div class="checkbox icheck">
                        <label class="w-100 ml-2 form-check-inline">
                            <?php echo Form::hidden('enable_notifications', null); ?>

                            <?php echo Form::checkbox('enable_notifications', 1, setting('enable_notifications', false)); ?>

                            <span class="ml-2"><?php echo trans('lang.app_setting_enable_notifications_help'); ?></span>
                        </label>
                    </div>
                </div>
                <!-- facebook_app_id Field -->
                <div class="form-group row col-12">
                    <?php echo Form::label('fcm_key', trans('lang.app_setting_fcm_key'), ['class' => 'col-2 control-label text-right']); ?>

                    <div class="col-10">
                        <?php echo Form::text('fcm_key', setting('fcm_key'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_fcm_key_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_fcm_key_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- firebase_api_key Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('firebase_api_key', trans('lang.app_setting_firebase_api_key'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('firebase_api_key', setting('firebase_api_key'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_firebase_api_key_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_firebase_api_key_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- firebase_auth_domain Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('firebase_auth_domain', trans('lang.app_setting_firebase_auth_domain'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('firebase_auth_domain', setting('firebase_auth_domain'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_firebase_auth_domain_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_firebase_auth_domain_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- firebase_database_url Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('firebase_database_url', trans('lang.app_setting_firebase_database_url'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('firebase_database_url', setting('firebase_database_url'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_firebase_database_url_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_firebase_database_url_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- firebase_project_id Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('firebase_project_id', trans('lang.app_setting_firebase_project_id'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('firebase_project_id', setting('firebase_project_id'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_firebase_project_id_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_firebase_project_id_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- firebase_storage_bucket Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('firebase_storage_bucket', trans('lang.app_setting_firebase_storage_bucket'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('firebase_storage_bucket', setting('firebase_storage_bucket'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_firebase_storage_bucket_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_firebase_storage_bucket_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- firebase_messaging_sender_id Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('firebase_messaging_sender_id', trans('lang.app_setting_firebase_messaging_sender_id'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('firebase_messaging_sender_id', setting('firebase_messaging_sender_id'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_firebase_messaging_sender_id_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_firebase_messaging_sender_id_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- firebase_app_id Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('firebase_app_id', trans('lang.app_setting_firebase_app_id'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('firebase_app_id', setting('firebase_app_id'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_firebase_app_id_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_firebase_app_id_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- firebase_measurement_id Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('firebase_measurement_id', trans('lang.app_setting_firebase_measurement_id'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('firebase_measurement_id', setting('firebase_measurement_id'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_firebase_measurement_id_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_firebase_measurement_id_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>">
                        <i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.app_setting_notification')); ?>

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

<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/settings/app/notifications.blade.php ENDPATH**/ ?>