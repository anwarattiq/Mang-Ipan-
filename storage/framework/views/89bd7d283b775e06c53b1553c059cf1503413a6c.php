<?php $__env->startPush('css_lib'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('settings_title',trans('lang.user_table')); ?>
<?php $__env->startSection('settings_content'); ?>
    <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="clearfix"></div>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link <?php if($tab === $code): ?> active <?php endif; ?>" href="<?php echo url('settings/translation/'.$code); ?>"><i class="fa fa-language mr-2"></i><?php echo e(trans('lang.app_setting_'.$code)); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






            </ul>
        </div>
        <div class="card-body">
            <?php echo Form::open(['url' => ['settings/translate'], 'method' => 'patch']); ?>

            <?php echo Form::hidden('_current_lang', $tab); ?>

            <div class="row">
                <div class="col-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <?php $__currentLoopData = $langFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filename => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="nav-link" id="v-pills-<?php echo e($filename); ?>-tab" data-toggle="pill" href="#v-pills-<?php echo e($filename); ?>" role="tab" aria-controls="v-pills-<?php echo e($filename); ?>"><?php echo e(title_case($filename)); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-9 tab-content" id="v-pills-tabContent">
                    
                    <?php $__currentLoopData = $langFiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filename => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade" id="v-pills-<?php echo e($filename); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo e($filename); ?>-tab">
                            <?php $__currentLoopData = \Illuminate\Support\Facades\Lang::get($filename.'',[],$tab); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(!is_array($item)): ?>
                                    <?php $__env->startComponent('layouts.components.lang_item',[
                                    'item' => $item,
                                    'name' => $filename.'|'.$key,
                                    'key' => $key,
                                    'keyWithFileName' => $filename.'.'.$key]); ?>
                                    <?php echo $__env->renderComponent(); ?>
                                <?php elseif(is_array($item)): ?>
                                    
                                    <?php $__currentLoopData = $item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childKey => $childItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!is_array($childItem)): ?>
                                            <?php $__env->startComponent('layouts.components.lang_item',[
                                                'item' => $childItem,
                                                'name' => $filename.'|'.$key.'|'.$childKey,
                                                'key' => $key.'.'.$childKey,
                                                'keyWithFileName' => $filename.".".$key.".".$childKey]); ?>
                                            <?php echo $__env->renderComponent(); ?>
                                        <?php elseif(is_array($childItem)): ?>
                                            <?php $__currentLoopData = $childItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childKey2 => $childItem2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if(!is_array($childItem2)): ?>
                                                    <?php $__env->startComponent('layouts.components.lang_item',[
                                                        'item' => $childItem2,
                                                        'name' => $filename.'|'.$key.'|'.$childKey.'|'.$childKey2,
                                                        'key' => $key.'.'.$childKey.'.'.$childKey2,
                                                        'keyWithFileName' => $filename.".".$key.".".$childKey.".".$childKey2]); ?>
                                                    <?php echo $__env->renderComponent(); ?>
                                                <?php elseif(is_array($childItem2)): ?>
                                                    <?php $__currentLoopData = $childItem2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childKey3 => $childItem3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if(!is_array($childItem3)): ?>
                                                            <?php $__env->startComponent('layouts.components.lang_item',[
                                                                'item' => $childItem3,
                                                                'name' => $filename.'|'.$key.'|'.$childKey.'|'.$childKey2.'|'.$childKey3,
                                                                'key' => $key.'.'.$childKey.'.'.$childKey2.'.'.$childKey3,
                                                                'keyWithFileName' => $filename.".".$key.".".$childKey.".".$childKey2.".".$childKey3]); ?>
                                                            <?php echo $__env->renderComponent(); ?>
                                                        <?php elseif(is_array($childItem3)): ?>
                                                            <?php $__currentLoopData = $childItem3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childKey4 => $childItem4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(!is_array($childItem4)): ?>
                                                                    <?php $__env->startComponent('layouts.components.lang_item',[
                                                                        'item' => $childItem4,
                                                                        'name' => $filename.'|'.$key.'|'.$childKey.'|'.$childKey2.'|'.$childKey3.'|'.$childKey4,
                                                                        'key' => $key.'.'.$childKey.'.'.$childKey2.'.'.$childKey3.'.'.$childKey4,
                                                                        'keyWithFileName' => $filename.".".$key.".".$childKey.".".$childKey2.".".$childKey3.".".$childKey4]); ?>
                                                                    <?php echo $__env->renderComponent(); ?>
                                                                <?php elseif(is_array($childItem4)): ?>
                                                                    <?php $__currentLoopData = $childItem4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childKey5 => $childItem5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if(!is_array($childItem5)): ?>
                                                                            <?php $__env->startComponent('layouts.components.lang_item',[
                                                                                'item' => $childItem5,
                                                                                'name' => $filename.'|'.$key.'|'.$childKey.'|'.$childKey2.'|'.$childKey3.'|'.$childKey4.'|'.$childKey5,
                                                                                'key' => $key.'.'.$childKey.'.'.$childKey2.'.'.$childKey3.'.'.$childKey4.'.'.$childKey5,
                                                                                'keyWithFileName' => $filename.".".$key.".".$childKey.".".$childKey2.".".$childKey3.".".$childKey4.".".$childKey5]); ?>
                                                                            <?php echo $__env->renderComponent(); ?>
                                                                        <?php elseif(is_array($childItem5)): ?>
                                                                            <?php $__currentLoopData = $childItem5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childKey6 => $childItem6): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if(!is_array($childItem6)): ?>
                                                                                    <?php $__env->startComponent('layouts.components.lang_item',[
                                                                                        'item' => $childItem6,
                                                                                        'name' => $filename.'|'.$key.'|'.$childKey.'|'.$childKey2.'|'.$childKey3.'|'.$childKey4.'|'.$childKey5.'|'.$childKey6,
                                                                                        'key' => $key.'.'.$childKey.'.'.$childKey2.'.'.$childKey3.'.'.$childKey4.'.'.$childKey5.'.'.$childKey6,
                                                                                        'keyWithFileName' => $filename.".".$key.".".$childKey.".".$childKey2.".".$childKey3.".".$childKey4.".".$childKey5.".".$childKey6]); ?>
                                                                                    <?php echo $__env->renderComponent(); ?>
                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-group row new-trans">
                                <div class="col-4">
                                    <?php echo Form::text('new_key', null,  ['data-file'=>$filename,'class' => 'form-control form-control-sm new-key','placeholder'=> trans('lang.new_lang_key')]); ?>

                                </div>
                                <div class="input-group input-group-sm col-8">
                                    <?php echo Form::text('new_value', null,  ['data-file'=>$filename, 'class' => 'form-control new-value','placeholder'=> trans('lang.new_lang_value')]); ?>

                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success add-lang-item" type="button"><?php echo e(__('lang.add')); ?></button>
                                    </div>
                                </div>
                                <div class="form-text offset-4 px-2 text-muted">
                                    <?php echo e(trans('lang.new_lang_value')); ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>">
                        <i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.app_setting_translation')); ?></button>
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
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">

        /**
         * Select the first tab when all the page loaded
         */
        $('#v-pills-tab a:first-child').tab("show")

        /**
         * change the name attr by the value
         */
        $(".new-trans .new-key").keyup(function (event) {
            var keyInput = $(this).val();
            var valueInput = $(this).parents(".new-trans").find(".new-value");
            keyInput = keyInput.replace(/[^\w\.]/gi, '');
            if (keyInput.split('.').length > 3) {
                keyInput = keyInput.replace(/\./g, '_');
            } else {
                keyInput = keyInput.replace(/\./g, '|');
            }
            // TODO Validate keyInput
            keyInput = valueInput.data('file') + '|' + keyInput.trim();
            valueInput.attr("name", keyInput);
        });

        /**
         * delete lang item
         */
        $('.delete-lang-item').on('click', function () {
            // TODO Replace with pretty alert
            if (confirm("<?php echo e(trans('lang.confirm_delete_message')); ?>")) {
                $(this).parents('div.form-group.row').slideUp().remove();
            }
        });

        // /**
        //  * */
        // $(document).ready(function () {
        //     var label = $('div.form-group.row label');
        //     console.log(label);
        //     if(label.parent('.form-group.row').find('.input-group input').val() === ''){
        //         label.addClass('text-danger');
        //     }
        // })

        /**
         * add new lang item
         */
        $('.add-lang-item').on('click', function () {
            var newTrans = $(this).parents('div.new-trans');
            var name = newTrans.find('input.new-value').attr('name');
            var value = newTrans.find('input.new-value').val();
            var key = newTrans.find('input.new-key').val();
            var langItemTmpl =
                `<div class="form-group row">
                <label for="${name}" class="col-4 control-label text-right">${key}</label>
                <div class="input-group input-group-sm col-8">
                    <input class="form-control" placeholder="${key}" name="${name}" type="text" value="${value}" id="${name}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-danger delete-lang-item" type="button"><?php echo e(trans('lang.delete')); ?></button>
                    </div>
                </div>
                <div class="form-text offset-4 px-2 text-muted">
                    ${value}
                </div>
            </div>`;
            var added = newTrans.before(langItemTmpl);
            newTrans.find('input.new-value').removeAttr('name');
            newTrans.find('input.new-value').val(null);
            newTrans.find('input.new-key').val(null);
            if (added) {
                $('.delete-lang-item').on('click', function () {
                    // TODO Replace with pretty alert
                    if (confirm("<?php echo e(trans('lang.confirm_delete_message')); ?>")) {
                        $(this).parents('div.form-group.row').slideUp().remove();
                    }
                });
            }
        });

    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.settings.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\rest\resources\views/settings/translation/index.blade.php ENDPATH**/ ?>