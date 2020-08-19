<?php if($customFields): ?>
<h5 class="col-12 pb-4"><?php echo trans('lang.main_fields'); ?></h5>
<?php endif; ?>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
<!-- Name Field -->
<div class="form-group row ">
  <?php echo Form::label('name', trans("lang.extra_name"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::text('name', null,  ['class' => 'form-control','placeholder'=>  trans("lang.extra_name_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.extra_name_help")); ?>

    </div>
  </div>
</div>

<!-- Image Field -->
<div class="form-group row">
  <?php echo Form::label('image', trans("lang.extra_image"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <div style="width: 100%" class="dropzone image" id="image" data-field="image">
      <input type="hidden" name="image">
    </div>
    <a href="#loadMediaModal" data-dropzone="image" data-toggle="modal" data-target="#mediaModal" class="btn btn-outline-<?php echo e(setting('theme_color','primary')); ?> btn-sm float-right mt-1"><?php echo e(trans('lang.media_select')); ?></a>
    <div class="form-text text-muted w-50">
      <?php echo e(trans("lang.extra_image_help")); ?>

    </div>
  </div>
</div>
<?php $__env->startPrepend('scripts'); ?>
<script type="text/javascript">
    var var1567114747144268319ble = '';
    <?php if(isset($extra) && $extra->hasMedia('image')): ?>
    var1567114747144268319ble = {
        name: "<?php echo $extra->getFirstMedia('image')->name; ?>",
        size: "<?php echo $extra->getFirstMedia('image')->size; ?>",
        type: "<?php echo $extra->getFirstMedia('image')->mime_type; ?>",
        collection_name: "<?php echo $extra->getFirstMedia('image')->collection_name; ?>"};
    <?php endif; ?>
    var dz_var1567114747144268319ble = $(".dropzone.image").dropzone({
        url: "<?php echo url('uploads/store'); ?>",
        addRemoveLinks: true,
        maxFiles: 1,
        init: function () {
        <?php if(isset($extra) && $extra->hasMedia('image')): ?>
            dzInit(this,var1567114747144268319ble,'<?php echo url($extra->getFirstMediaUrl('image','thumb')); ?>')
        <?php endif; ?>
        },
        accept: function(file, done) {
            dzAccept(file,done,this.element,"<?php echo config('medialibrary.icons_folder'); ?>");
        },
        sending: function (file, xhr, formData) {
            dzSending(this,file,formData,'<?php echo csrf_token(); ?>');
        },
        maxfilesexceeded: function (file) {
            dz_var1567114747144268319ble[0].mockFile = '';
            dzMaxfile(this,file);
        },
        complete: function (file) {
            dzComplete(this, file, var1567114747144268319ble, dz_var1567114747144268319ble[0].mockFile);
            dz_var1567114747144268319ble[0].mockFile = file;
        },
        removedfile: function (file) {
            dzRemoveFile(
                file, var1567114747144268319ble, '<?php echo url("extras/remove-media"); ?>',
                'image', '<?php echo isset($extra) ? $extra->id : 0; ?>', '<?php echo url("uplaods/clear"); ?>', '<?php echo csrf_token(); ?>'
            );
        }
    });
    dz_var1567114747144268319ble[0].mockFile = var1567114747144268319ble;
    dropzoneFields['image'] = dz_var1567114747144268319ble;
</script>
<?php $__env->stopPrepend(); ?>

<!-- Description Field -->
<div class="form-group row ">
  <?php echo Form::label('description', trans("lang.extra_description"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::textarea('description', null, ['class' => 'form-control','placeholder'=>
     trans("lang.extra_description_placeholder")  ]); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.extra_description_help")); ?></div>
  </div>
</div>
</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- Price Field -->
<div class="form-group row ">
  <?php echo Form::label('price', trans("lang.extra_price"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::number('price', null,  ['class' => 'form-control','placeholder'=>  trans("lang.extra_price_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.extra_price_help")); ?>

    </div>
  </div>
</div>

<!-- Food Id Field -->
<div class="form-group row ">
  <?php echo Form::label('food_id', trans("lang.extra_food_id"),['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::select('food_id', $food, null, ['class' => 'select2 form-control']); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.extra_food_id_help")); ?></div>
  </div>
</div>

</div>
<?php if($customFields): ?>
<div class="clearfix"></div>
<div class="col-12 custom-field-container">
  <h5 class="col-12 pb-4"><?php echo trans('lang.custom_field_plural'); ?></h5>
  <?php echo $customFields; ?>

</div>
<?php endif; ?>
<!-- Submit Field -->
<div class="form-group col-12 text-right">
  <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>" ><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.extra')); ?></button>
  <a href="<?php echo route('extras.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
</div>
<?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/extras/fields.blade.php ENDPATH**/ ?>