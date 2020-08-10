<div class="ml-auto d-inline-flex">
    <li class="nav-item dropdown">
        <a class="nav-link  dropdown-toggle pt-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-save"></i> <?php echo e(trans('lang.export')); ?>

        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" id="exportCsvDatatable" href="#"> <i class="fa fa-file-excel-o mr-2"></i>CSV</a>
            <a class="dropdown-item" id="exportExcelDatatable" href="#"> <i class="fa fa-file-excel-o mr-2"></i>Excel</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" id="exportPdfDatatable" href="#"> <i class="fa fa-file-pdf-o mr-2"></i>PDF</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link pt-1" id="refreshDatatable" href="#"><i class="fa fa-refresh"></i> <?php echo e(trans('lang.refresh')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pt-1" id="printDatatable" href="#"><i class="fa fa-print"></i> <?php echo e(trans('lang.print')); ?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pt-1" id="resetDatatable" href="#"><i class="fa fa-undo"></i> <?php echo e(trans('lang.reset')); ?></a>
    </li>
    <li id="colVisDatatable" class="nav-item dropdown keepopen">
        <a class="nav-link dropdown-toggle pt-1" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-eye"></i> <?php echo e(trans('lang.columns')); ?>

        </a>
        <div class="dropdown-menu">
            <?php $__currentLoopData = $dataTable->collection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="dropdown-item text-bold" href="#" data-column="<?php echo e($key); ?>"> <i class="fa fa-check mr-2"></i><?php echo e($item->title); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </li>
    
    
        
            
                
                    
                        
                            
                                    
                                    
                                    
                                    
                        
                    
                
            
        
    
        

        
            
                
                
            
        

</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        /**
         * load media when select collection changed
         */
        var params = [];
        var objParams = {};

        /**
         * initialise objParams with existing parameters in the url
         * @type  {string}
         */
        
        
            objParams = $.extend({}, params);
            objParams = $.param(objParams);

        $('#filter #selectFilter').on('select2:select', function (e) {
            $(e.params.data.element).parent('optgroup').children().each(function (element) {
                $(this)[0].selected = false;
            });
            $(e.params.data.element)[0].selected = true;

            $(this).trigger('change');
            params[$(e.params.data.element).data('key')] = $(e.params.data.element).attr('value');
            objParams = $.extend({}, params);
            objParams = $.param(objParams);
        });

        $('#filter #selectFilter').on('select2:unselect', function (e) {
            params[$(e.params.data.element).data('key')] = undefined;
            objParams = $.extend({}, params);
            objParams = $.param(objParams);
        });

        $('#filter #selectFilter').on("select2:closing", function (e) {
            window.location.href = window.location.href.split('?')[0] + "?" + objParams;
        });

        /**
         * initialize collections filter
         * by default it select default collection
         **/
        
            
                
                    
                    
                    
                        
                            
                        
                    
                
            
            
                
                
                
                    
                    
                        
                    
                    
                
            
    
    // initFilterSelect2();
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\xampp\htdocs\multi-restaurants\resources\views/layouts/right_toolbar.blade.php ENDPATH**/ ?>