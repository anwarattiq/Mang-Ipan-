
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
                <?php if(!env('APP_DEMO',false)): ?>
                    <div class="ml-auto d-inline-flex">
                        <li class="nav-item">
                            <a class="nav-link pt-1" href="<?php echo e(url('settings/clear-cache')); ?>"><i class="fa fa-trash-o"></i> <?php echo e(trans('lang.app_setting_clear_cache')); ?>

                            </a>
                        </li>
                        <?php if($containsUpdate): ?>
                            <li class="nav-item">
                                <a class="nav-link pt-1" href="<?php echo e(url('update/'.config('installer.currentVersion','v100'))); ?>"><i class="fa fa-refresh"></i> <?php echo e(trans('lang.app_setting_check_for')); ?>

                                </a>
                            </li>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
        <div class="card-body">
            <?php echo Form::open(['url' => ['settings/update'], 'method' => 'patch']); ?>

            <div class="row">
                <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
                    <!-- app_name Field -->
                    <div class="form-group row">
                        <?php echo Form::label('app_name', trans("lang.app_setting_app_name"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('app_name', setting('app_name'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_app_name_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo e(trans("lang.app_setting_app_name_help")); ?>

                            </div>
                        </div>
                    </div>

                    <!-- app_short_description Field -->
                    <div class="form-group row">
                        <?php echo Form::label('app_short_description', trans("lang.app_setting_app_short_description"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('app_short_description', setting('app_short_description'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_app_short_description_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo e(trans("lang.app_setting_app_short_description_help")); ?>

                            </div>
                        </div>
                    </div>

                    <!-- Theme Contrast Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('theme_contrast', trans("lang.app_setting_theme_contrast"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('theme_contrast', 
                            [
                            'dark' => trans('lang.app_setting_dark_theme'),
                            'light' => trans('lang.app_setting_light_theme'),
                            ]
                            , setting('theme_contrast'), ['class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_theme_contrast_help")); ?></div>
                        </div>
                    </div>

                    <!-- Theme Color Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('theme_color', trans("lang.app_setting_theme_color"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('theme_color', 
                            [
                            'primary' => trans('lang.app_setting_blue'),
                            'secondary' => trans('lang.app_setting_gray'),
                            'danger' => trans('lang.app_setting_red'),
                            'warning' => trans('lang.app_setting_orange'),
                            'info' => trans('lang.app_setting_sky_blue'),
                            'success' => trans('lang.app_setting_green'),
                            ]
                            , setting('theme_color'), ['class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_theme_color_help")); ?></div>
                        </div>
                    </div>

                    <!-- Navbar Color Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('nav_color', trans("lang.app_setting_nav_color"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('nav_color',
                            [
                            'navbar-dark bg-primary' => trans('lang.app_setting_blue'),
                            'navbar-light bg-gray-light' => trans('lang.app_setting_gray'),
                            'navbar-light bg-dark' => trans('lang.app_setting_dark'),
                            'navbar-light bg-white' => trans('lang.app_setting_white'),
                            'navbar-dark bg-danger' => trans('lang.app_setting_red'),
                            'navbar-light bg-warning' => trans('lang.app_setting_orange'),
                            'navbar-dark bg-info' => trans('lang.app_setting_sky_blue'),
                            'navbar-dark bg-success' => trans('lang.app_setting_green'),

                            ]
                            , setting('nav_color'), ['class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_nav_color_help")); ?></div>
                        </div>
                    </div>


                    <!-- logo_bg Color Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('logo_bg_color', trans("lang.app_setting_logo_bg_color"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('logo_bg_color',
                            [
                            '' => trans('lang.app_setting_clear'),
                            'bg-primary' => trans('lang.app_setting_blue'),
                            'bg-gray-light' => trans('lang.app_setting_gray'),
                            'bg-dark' => trans('lang.app_setting_dark'),
                            'bg-white' => trans('lang.app_setting_white'),
                            'bg-danger' => trans('lang.app_setting_red'),
                            'bg-warning' => trans('lang.app_setting_orange'),
                            'bg-info' => trans('lang.app_setting_sky_blue'),
                            'bg-success' => trans('lang.app_setting_green'),
                            ]
                            , setting('logo_bg_color'), ['class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_logo_bg_color_help")); ?></div>
                        </div>
                    </div>

                    <!-- custom_field_models Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('custom_field_models[]', trans("lang.app_setting_custom_field_models"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('custom_field_models[]',$customFieldModels
                            , setting('custom_field_models',[]), ['multiple'=>'multiple', 'class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_custom_field_models_help")); ?></div>
                        </div>
                    </div>

                    <!-- blocked_ips Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('blocked_ips[]', trans("lang.app_setting_blocked_ips"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('blocked_ips[]',array_combine(setting('blocked_ips',[]),setting('blocked_ips',[])), setting('blocked_ips',[]), ['multiple'=>'multiple', 'data-tags'=>'true','class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_blocked_ips_help")); ?></div>
                        </div>
                    </div>

                </div>
                <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

                    <!-- App Logo Field -->
                    <div class="form-group row">
                        <?php echo Form::label('app_logo', trans("lang.upload_app_logo"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <div style="width: 100%" class="dropzone app_logo" id="app_logo" data-field="app_logo">
                                <input type="hidden" name="app_logo">
                            </div>
                            <a href="#loadMediaModal" data-dropzone="app_logo" data-toggle="modal" data-target="#mediaModal" class="btn btn-outline-<?php echo e(setting('theme_color')); ?> btn-sm float-right mt-1"><?php echo e(trans('lang.media_select')); ?></a>
                            <div class="form-text text-muted w-50">
                                <?php echo e(trans("lang.upload_app_logo_help")); ?>

                            </div>
                        </div>
                    </div>
                    <?php $__env->startPrepend('scripts'); ?>
                    <script type="text/javascript">
                        var dzAppLogo = '';
                        <?php if(isset($upload) && $upload->hasMedia('app_logo')): ?>
                            dzAppLogo = {
                            name: "<?php echo $upload->getFirstMedia('app_logo')->name; ?>",
                            size: "<?php echo $upload->getFirstMedia('app_logo')->size; ?>",
                            type: "<?php echo $upload->getFirstMedia('app_logo')->mime_type; ?>",
                            collection_name: "<?php echo $upload->getFirstMedia('app_logo')->collection_name; ?>"
                        };
                                <?php endif; ?>
                        var dz_dzAppLogo = $(".dropzone.app_logo").dropzone({
                                url: "<?php echo url('uploads/store'); ?>",
                                addRemoveLinks: true,
                                maxFiles: 1,
                                init: function () {
                                    <?php if(isset($upload) && $upload->hasMedia('app_logo')): ?>
                                    dzInit(this, dzAppLogo, '<?php echo url($upload->getFirstMediaUrl('app_logo','thumb')); ?>')
                                    <?php endif; ?>
                                },
                                accept: function (file, done) {
                                    dzAccept(file, done, this.element, "<?php echo config('medialibrary.icons_folder'); ?>");
                                },
                                sending: function (file, xhr, formData) {
                                    dzSending(this, file, formData, '<?php echo csrf_token(); ?>');
                                },
                                maxfilesexceeded: function (file) {
                                    dz_dzAppLogo[0].mockFile = '';
                                    dzMaxfile(this, file);
                                },
                                complete: function (file) {
                                    dzComplete(this, file, dzAppLogo, dz_dzAppLogo[0].mockFile);
                                    dz_dzAppLogo[0].mockFile = file;
                                },
                                removedfile: function (file) {
                                    dzRemoveFile(
                                        file, dzAppLogo, '<?php echo url("uploads/remove-media"); ?>',
                                        'app_logo', '<?php echo isset($upload) ? $upload->id : 0; ?>', '<?php echo url("uplaods/clear"); ?>', '<?php echo csrf_token(); ?>'
                                    );
                                }
                            });
                        dz_dzAppLogo[0].mockFile = dzAppLogo;
                        dropzoneFields['app_logo'] = dz_dzAppLogo;
                    </script>
                    <?php $__env->stopPrepend(); ?>

                <!-- fixed_header Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('fixed_header', trans("lang.app_setting_fixed_header"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="checkbox icheck">
                            <label class="w-100 ml-2 form-check-inline">
                                <?php echo Form::hidden('fixed_header', null); ?>

                                <?php echo Form::checkbox('fixed_header', 'fixed-top', setting('fixed_header')); ?>

                                <span class="ml-2"><?php echo trans("lang.app_setting_fixed_header_help"); ?></span> </label>
                        </div>
                    </div>

                    <!-- fixed_footer Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('fixed_footer', trans("lang.app_setting_fixed_footer"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="checkbox icheck">
                            <label class="w-100 ml-2 form-check-inline">
                                <?php echo Form::hidden('fixed_footer', null); ?>

                                <?php echo Form::checkbox('fixed_footer', 'fixed-bottom', setting('fixed_footer')); ?>

                                <span class="ml-2"><?php echo trans("lang.app_setting_fixed_footer_help"); ?></span> </label>
                        </div>
                    </div>


                </div>
                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>"><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.app_setting_globals')); ?>

                    </button>
                    <a href="<?php echo route('users.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
                </div>
            </div>
            <?php echo Form::close(); ?>

            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    <?php echo $__env->make('layouts.media_modal',['collection'=>'default'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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


<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/gadgetekbahamas/multi-restaurants.gadgetekbahamas.com/resources/views/settings/app/globals.blade.php ENDPATH**/ ?>