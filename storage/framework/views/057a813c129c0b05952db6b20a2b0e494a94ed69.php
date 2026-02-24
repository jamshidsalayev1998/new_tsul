
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/charter/charter.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $file_locale = 'file_'.$locale;
    ?>
    <div class="charter">
    <div class="container">
        <div class="row">

        <div class="col-xl-3 col-lg-3 mt-3">
            <div class="left_menu_of_page">
                <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('simple.includes.socials_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

        <div class="col-xl-9 col-lg-9 rounded-box mt-3">
            <h3 class="pb-3 pt-3"><?php echo app('translator')->get('index.Устав'); ?></h3>

            <div class="box-body">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="pdf mt-2">
                    <a href="/<?php echo e($item->$file_locale); ?>"><i class="fas fa-file-pdf"></i></a>
                    <a href="/<?php echo e($item->$file_locale); ?>"><?php echo e($item->$name_locale); ?></a>
                    <a href="/<?php echo e($item->$file_locale); ?>" class="download-icon"><i class="fas fa-download"></i></a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <h3></h3>

            </div>

        </div>
    </div>


    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/ustav.blade.php ENDPATH**/ ?>