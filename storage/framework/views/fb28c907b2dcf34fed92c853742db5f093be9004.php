
<?php $__env->startSection('title'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
    <?php echo e($menu->$name_locale); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/general_page_content.css')); ?>">
    
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="general">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 mt-3">
                        <div class="left_menu_of_page">
                           <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 mt-3">
                        <div class="general_content">
                             <div class="content-from-editor">
                                 <?php echo $content->$content_locale; ?>

                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('front_assets/js/general_page_content.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/general_page.blade.php ENDPATH**/ ?>