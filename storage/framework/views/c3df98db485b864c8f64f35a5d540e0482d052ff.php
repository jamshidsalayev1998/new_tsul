
<?php $__env->startSection('title'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
    <?php echo e($menu->$name_locale); ?>

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/faculty_and_center.css')); ?>">
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

     <div class="all_faculty mt-4 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <a href="index.html" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Главная страница'); ?></a>
                            <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                    style="font-size:10px"></i></span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Факултеты'); ?></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 mt-3">
                        <div class="left_menu_of_page">
                            <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <?php echo $__env->make('simple.includes.socials_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 mt-3">
                        <h3 class="border-bottom pb-2" style="color: #233585;"><?php echo app('translator')->get('index.Факултеты'); ?></h3>
                        <div class="af_item_box">
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('simple.faculty.show' , ['id' => $item->id , 'name' => $item->$name_locale])); ?>" class="all_faculty_items">
                                <div class="all_faculty_items_icon"><i class="fas fa-gavel"></i></div>
                                <span class="card-text"><?php echo e($item->$name_locale); ?></span>
                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/all_faculties.blade.php ENDPATH**/ ?>