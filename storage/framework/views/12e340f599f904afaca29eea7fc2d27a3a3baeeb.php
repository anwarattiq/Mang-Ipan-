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
                <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

                    <!-- date_format Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('date_format', trans("lang.app_setting_date_format"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('date_format', setting('date_format'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_date_format_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo trans("lang.app_setting_date_format_help"); ?>

                            </div>
                        </div>
                    </div>

                    <!-- 'Boolean is_human_date_format Field' -->
                    <div class="form-group row ">
                        <?php echo Form::label('is_human_date_format', trans("lang.app_setting_is_human_date_format"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="checkbox icheck">
                            <label class="col-8 ml-2 form-check-inline">
                                <?php echo Form::hidden('is_human_date_format', null); ?>

                                <?php echo Form::checkbox('is_human_date_format', 1, setting('is_human_date_format', false)); ?>

                            </label>
                        </div>
                    </div>

                    <!-- Lang Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('language', trans("lang.app_setting_language"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('language', $languages, setting('language'), ['class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_language_help")); ?></div>
                        </div>
                    </div>

                </div>
                <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

                    <!-- timezone Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('timezone', trans("lang.app_setting_timezone"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('timezone', $timezones, setting('timezone'), ['class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_timezone_help")); ?></div>
                        </div>
                    </div>

                </div>
                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>"><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.app_setting_localisation')); ?>

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

<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rest\resources\views/settings/app/localisation.blade.php ENDPATH**/ ?>