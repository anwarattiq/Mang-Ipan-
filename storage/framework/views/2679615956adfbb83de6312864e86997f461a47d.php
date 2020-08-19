<!-- Name Field -->
<div class="form-group row col-6">
    <?php echo Form::label('name', 'Name:', ['class' => 'col-3 control-label text-right']); ?>

    <div class="col-9">
        <?php echo Form::text('name', null, ['class' => 'form-control','placeholder'=>trans("lang.permission_name_placeholder")]); ?>

        <small class="form-text text-muted">
            <?php echo e(trans("lang.permission_name_help")); ?>

        </small>
    </div>
</div>

<!-- Guard Name Field -->
<div class="form-group row col-6">
    <?php echo Form::label('guard_name', 'Guard Name:', ['class' => 'col-3 control-label text-right']); ?>

    <div class="col-9">
        <?php echo Form::text('guard_name', null, ['class' => 'form-control','placeholder'=>
        (Lang::has("lang.permission_name_placeholder")) ? trans("lang.permission_guard_name_placeholder") : "Name guard_name"]); ?>

        <small class="form-text text-muted">
            <?php echo e((Lang::has("lang.permission_guard_name_help")) ? trans("lang.permission_guard_name_help") : "Insert the guard_name"); ?>

        </small>
    </div>
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 text-right">
    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>"><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.permission')); ?></button>
    <a href="<?php echo route('permissions.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
</div>
<?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/settings/permissions/fields.blade.php ENDPATH**/ ?>