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
                <h5 class="col-12 pb-4"><i class="mr-3 fa fa-cc-stripe"></i><?php echo trans('lang.app_setting_stripe'); ?></h5>
                <!-- 'Boolean enable_facebook Field' -->
                <div class="form-group row col-12">
                    <?php echo Form::label('enable_stripe', trans('lang.app_setting_enable_stripe'),['class' => 'col-2 control-label text-right']); ?>

                    <div class="checkbox icheck">
                        <label class="w-100 ml-2 form-check-inline">
                            <?php echo Form::hidden('enable_stripe', null); ?>

                            <?php echo Form::checkbox('enable_stripe', 1, setting('enable_stripe', false)); ?>

                            <span class="ml-2"><?php echo trans('lang.app_setting_enable_stripe_help'); ?></span>
                        </label>
                    </div>
                </div>
                <!-- facebook_app_id Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('stripe_key', trans('lang.app_setting_stripe_key'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('stripe_key', setting('stripe_key'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_stripe_key_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_stripe_key_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- facebook_app_secret Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('stripe_secret', trans('lang.app_setting_stripe_secret'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('stripe_secret', setting('stripe_secret'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_stripe_secret_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_stripe_secret_help'); ?>

                        </div>
                    </div>
                </div>

                <h5 class="col-12 pb-4 custom-field-container"><i class="mr-3 fa fa-cc-paypal"></i><?php echo trans('lang.app_setting_paypal'); ?></h5>
                <!-- 'Boolean enable_facebook Field' -->
                <div class="form-group row col-12">
                    <?php echo Form::label('enable_paypal', trans('lang.app_setting_enable_paypal'),['class' => 'col-2 control-label text-right']); ?>

                    <div class="checkbox icheck">
                        <label class="w-100 ml-2 form-check-inline">
                            <?php echo Form::hidden('enable_paypal', null); ?>

                            <?php echo Form::checkbox('enable_paypal', 1, setting('enable_paypal', false)); ?>

                            <span class="ml-2"><?php echo trans('lang.app_setting_enable_paypal_help'); ?></span>
                        </label>
                    </div>
                </div>

                <!-- 'Boolean enable_facebook Field' -->
                <div class="form-group row col-12">
                    <?php echo Form::label('paypal_mode', trans('lang.app_setting_paypal_mode'),['class' => 'col-2 control-label text-right']); ?>

                    <div class="checkbox icheck">
                        <label class="w-100 ml-2 form-check-inline">
                            <?php echo Form::hidden('paypal_mode', null); ?>

                            <?php echo Form::checkbox('paypal_mode', 1, setting('paypal_mode', false)); ?>

                            <span class="ml-2"><?php echo trans('lang.app_setting_paypal_mode_help'); ?></span>
                        </label>
                    </div>
                </div>
                
                <!-- paypal_username Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('paypal_username', trans('lang.app_setting_paypal_username'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('paypal_username', setting('paypal_username'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_paypal_username_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_paypal_username_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- paypal_password Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('paypal_password', trans('lang.app_setting_paypal_password'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('paypal_password', setting('paypal_password'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_paypal_password_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_paypal_password_help'); ?>

                        </div>
                    </div>
                </div>


                <!-- facebook_app_secret Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('paypal_secret', trans('lang.app_setting_paypal_secret'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('paypal_secret', setting('paypal_secret'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_paypal_secret_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_paypal_secret_help'); ?>

                        </div>
                    </div>
                </div>

                <!-- paypal_app_app_id Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('paypal_app_id', trans('lang.app_setting_paypal_app_id'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('paypal_app_id', setting('paypal_app_id'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_paypal_app_id_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_paypal_app_id_help'); ?>

                        </div>
                    </div>
                </div>

                <h5 class="col-12 pb-4 custom-field-container"><i class="mr-3 fa fa-money"></i><?php echo trans('lang.app_setting_default_tax'); ?></h5>
                <!-- default_tax Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('default_tax', trans('lang.app_setting_default_tax'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::text('default_tax', setting('default_tax'),  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_default_tax_placeholder')]); ?>

                        <div class="form-text text-muted">
                            <?php echo trans('lang.app_setting_default_tax_help'); ?>

                        </div>
                    </div>
                </div>

                <h5 class="col-12 pb-4 custom-field-container"><i class="mr-3 fa fa-money"></i><?php echo trans('lang.app_setting_default_currency'); ?></h5>
                <!-- default_currency Field -->
                <div class="form-group row col-6">
                    <?php echo Form::label('default_currency', trans('lang.app_setting_default_currency'), ['class' => 'col-4 control-label text-right']); ?>

                    <div class="col-8">
                        <?php echo Form::select('default_currency',
                        $currencies
                        , setting('default_currency'), ['class' => 'select2 form-control']); ?>

                        <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_default_currency_help")); ?></div>
                    </div>
                </div>

                <div class="form-group row col-6">
                    <?php echo Form::label('currency_right', trans('lang.app_setting_currency_right'),['class' => 'col-4 control-label text-right']); ?>

                    <div class="checkbox icheck">
                        <label class="w-100 ml-2 form-check-inline">
                            <?php echo Form::hidden('currency_right', null); ?>

                            <?php echo Form::checkbox('currency_right', 1, setting('currency_right', false)); ?>

                            <span class="ml-2"><?php echo trans('lang.app_setting_currency_right_help'); ?></span>
                        </label>
                    </div>
                </div>

                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>">
                        <i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.app_setting_payment')); ?>

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

<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rest\resources\views/settings/app/payment.blade.php ENDPATH**/ ?>