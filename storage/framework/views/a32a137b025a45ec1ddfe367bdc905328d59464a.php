<?php if($customFields): ?>
<h5 class="col-12 pb-4"><?php echo trans('lang.main_fields'); ?></h5>
<?php endif; ?>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
<!-- Name Field -->
<div class="form-group row ">
  <?php echo Form::label('name', trans("lang.food_name"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::text('name', null,  ['class' => 'form-control','placeholder'=>  trans("lang.food_name_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.food_name_help")); ?>

    </div>
  </div>
</div>

<!-- Image Field -->
<div class="form-group row">
  <?php echo Form::label('image', trans("lang.food_image"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <div style="width: 100%" class="dropzone image" id="image" data-field="image">
      <input type="hidden" name="image">
    </div>
    <a href="#loadMediaModal" data-dropzone="image" data-toggle="modal" data-target="#mediaModal" class="btn btn-outline-<?php echo e(setting('theme_color','primary')); ?> btn-sm float-right mt-1"><?php echo e(trans('lang.media_select')); ?></a>
    <div class="form-text text-muted w-50">
      <?php echo e(trans("lang.food_image_help")); ?>

    </div>
  </div>
</div>
<?php $__env->startPrepend('scripts'); ?>
<script type="text/javascript">
    var var15671147171873255749ble = '';
    <?php if(isset($food) && $food->hasMedia('image')): ?>
    var15671147171873255749ble = {
        name: "<?php echo $food->getFirstMedia('image')->name; ?>",
        size: "<?php echo $food->getFirstMedia('image')->size; ?>",
        type: "<?php echo $food->getFirstMedia('image')->mime_type; ?>",
        collection_name: "<?php echo $food->getFirstMedia('image')->collection_name; ?>"};
    <?php endif; ?>
    var dz_var15671147171873255749ble = $(".dropzone.image").dropzone({
        url: "<?php echo url('uploads/store'); ?>",
        addRemoveLinks: true,
        maxFiles: 1,
        init: function () {
        <?php if(isset($food) && $food->hasMedia('image')): ?>
            dzInit(this,var15671147171873255749ble,'<?php echo url($food->getFirstMediaUrl('image','thumb')); ?>')
        <?php endif; ?>
        },
        accept: function(file, done) {
            dzAccept(file,done,this.element,"<?php echo config('medialibrary.icons_folder'); ?>");
        },
        sending: function (file, xhr, formData) {
            dzSending(this,file,formData,'<?php echo csrf_token(); ?>');
        },
        maxfilesexceeded: function (file) {
            dz_var15671147171873255749ble[0].mockFile = '';
            dzMaxfile(this,file);
        },
        complete: function (file) {
            dzComplete(this, file, var15671147171873255749ble, dz_var15671147171873255749ble[0].mockFile);
            dz_var15671147171873255749ble[0].mockFile = file;
        },
        removedfile: function (file) {
            dzRemoveFile(
                file, var15671147171873255749ble, '<?php echo url("foods/remove-media"); ?>',
                'image', '<?php echo isset($food) ? $food->id : 0; ?>', '<?php echo url("uplaods/clear"); ?>', '<?php echo csrf_token(); ?>'
            );
        }
    });
    dz_var15671147171873255749ble[0].mockFile = var15671147171873255749ble;
    dropzoneFields['image'] = dz_var15671147171873255749ble;
</script>
<?php $__env->stopPrepend(); ?>

<!-- Price Field -->
<div class="form-group row ">
  <?php echo Form::label('price', trans("lang.food_price"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::number('price', null,  ['class' => 'form-control','placeholder'=>  trans("lang.food_price_placeholder"),'step'=>"0.01", 'min'=>"0"]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.food_price_help")); ?>

    </div>
  </div>
</div>

<!-- Discount Price Field -->
<div class="form-group row ">
  <?php echo Form::label('discount_price', trans("lang.food_discount_price"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::number('discount_price', null,  ['class' => 'form-control','placeholder'=>  trans("lang.food_discount_price_placeholder"),'step'=>"0.01", 'min'=>"0"]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.food_discount_price_help")); ?>

    </div>
  </div>
</div>

<!-- Description Field -->
<div class="form-group row ">
  <?php echo Form::label('description', trans("lang.food_description"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::textarea('description', null, ['class' => 'form-control','placeholder'=>
     trans("lang.food_description_placeholder")  ]); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.food_description_help")); ?></div>
  </div>
</div>
</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- Ingredients Field -->
<div class="form-group row ">
  <?php echo Form::label('ingredients', trans("lang.food_ingredients"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::textarea('ingredients', null, ['class' => 'form-control','placeholder'=>
     trans("lang.food_ingredients_placeholder")  ]); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.food_ingredients_help")); ?></div>
  </div>
</div>

<!-- Weight Field -->
<div class="form-group row ">
  <?php echo Form::label('weight', trans("lang.food_weight"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::number('weight', null,  ['class' => 'form-control','placeholder'=>  trans("lang.food_weight_placeholder"),'step'=>"0.01", 'min'=>"0"]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.food_weight_help")); ?>

    </div>
  </div>
</div>

<!-- 'Boolean Featured Field' -->
<div class="form-group row ">
  <?php echo Form::label('featured', trans("lang.food_featured"),['class' => 'col-3 control-label text-right']); ?>

  <div class="checkbox icheck">
    <label class="col-9 ml-2 form-check-inline">
      <?php echo Form::hidden('featured', 0); ?>

      <?php echo Form::checkbox('featured', 1, null); ?>

    </label>
  </div>
</div>


<!-- Restaurant Id Field -->
<div class="form-group row ">
  <?php echo Form::label('restaurant_id', trans("lang.food_restaurant_id"),['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::select('restaurant_id', $restaurant, null, ['class' => 'select2 form-control']); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.food_restaurant_id_help")); ?></div>
  </div>
</div>


<!-- Category Id Field -->
<div class="form-group row ">
  <?php echo Form::label('category_id', trans("lang.food_category_id"),['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::select('category_id', $category, null, ['class' => 'select2 form-control']); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.food_category_id_help")); ?></div>
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
  <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>" ><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.food')); ?></button>
  <a href="<?php echo route('foods.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
</div>
<?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/foods/fields.blade.php ENDPATH**/ ?>