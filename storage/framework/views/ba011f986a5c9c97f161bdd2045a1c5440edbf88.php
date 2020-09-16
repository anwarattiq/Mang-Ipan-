<?php if($customFields): ?>
<h5 class="col-12 pb-4"><?php echo trans('lang.main_fields'); ?></h5>
<?php endif; ?>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
<!-- Name Field -->
<div class="form-group row ">
  <?php echo Form::label('name', trans("lang.currency_name"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::text('name', null,  ['class' => 'form-control','placeholder'=>  trans("lang.currency_name_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.currency_name_help")); ?>

    </div>
  </div>
</div>

<!-- Symbol Field -->
<div class="form-group row ">
  <?php echo Form::label('symbol', trans("lang.currency_symbol"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::text('symbol', null,  ['class' => 'form-control','placeholder'=>  trans("lang.currency_symbol_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.currency_symbol_help")); ?>

    </div>
  </div>
</div>

<!-- Code Field -->
<div class="form-group row ">
  <?php echo Form::label('code', trans("lang.currency_code"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::text('code', null,  ['class' => 'form-control','placeholder'=>  trans("lang.currency_code_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.currency_code_help")); ?>

    </div>
  </div>
</div>
</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- Decimal Digits Field -->
<div class="form-group row ">
  <?php echo Form::label('decimal_digits', trans("lang.currency_decimal_digits"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::number('decimal_digits', null,  ['class' => 'form-control','placeholder'=>  trans("lang.currency_decimal_digits_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.currency_decimal_digits_help")); ?>

    </div>
  </div>
</div>

<!-- Rounding Field -->
<div class="form-group row ">
  <?php echo Form::label('rounding', trans("lang.currency_rounding"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::number('rounding', null,  ['class' => 'form-control','placeholder'=>  trans("lang.currency_rounding_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.currency_rounding_help")); ?>

    </div>
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
  <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>" ><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.currency')); ?></button>
  <a href="<?php echo route('currencies.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
</div>
<?php /**PATH /home/gadgetekbahamas/multi-restaurants.gadgetekbahamas.com/resources/views/currencies/fields.blade.php ENDPATH**/ ?>