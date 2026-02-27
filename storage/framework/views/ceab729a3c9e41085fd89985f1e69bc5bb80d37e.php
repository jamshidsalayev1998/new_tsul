
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/administration/administration.css')); ?>">
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $locale = app()->getLocale();
        $full_name_locale = 'full_name_'.$locale;
        $academic_title_locale = 'academic_title_'.$locale;
        $academic_degree_locale = 'academic_degree_'.$locale;
        $type_name_locale = 'type_name_'.$locale;
        $name_locale = 'name_'.$locale;
    ?>
    <div class="administration">
            <div class="container">
                <div class="row">
                    <div>
                        <a href="index.html" class="text-secondary"
                            style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Главная страница'); ?></a>
                        <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                style="font-size:10px"></i></span>
                        <a href="#" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Проректоры'); ?></a>
                    </div>
                    
                   <div class="col-xl-9">
                       <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-12 mbsc-col-sm-12 info-card mt-3">
                    
                        <div class="row justify-content-center align-items-center d-flex">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 img-div">
                           <a href="<?php echo e(route('simple.rektorat.show' , ['id' => $item->id])); ?>"> <img src="<?php echo e(asset('')); ?><?php echo e($item->image); ?>" class="image img-fluid" alt="network error!" style="width: 100%;" ></a>

                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 img-info">
                            <h4> <a href="<?php echo e(route('simple.rektorat.show' , ['id' => $item->id])); ?>"><?php echo e($item->$full_name_locale); ?></a> </h4>

                                <h5 class="font-weight-bold mt-2 "><?php echo app('translator')->get('index.Ученое звание'); ?>: <span class="font-weight-normal"><?php echo e($item->$academic_title_locale); ?></span></h5>

                                <h5 class="font-weight-bold mt-3 "><?php echo app('translator')->get('index.Ученая степень'); ?>:  <span class="font-weight-normal"> <?php echo e($item->$academic_degree_locale); ?></span></h5>

                                <h5 class="font-weight-bold mt-3 mb-3 "><?php echo app('translator')->get('index.Должность'); ?>:  <span class="font-weight-normal"> <?php echo e($item->$type_name_locale); ?></span></h5>

                                  <div class="col-md-12 col-sm-12 img-icons">
                                    <a href="tel: (+998 71) 233-42-09" class="col-md-6"><i class="fas fa-mobile"> : <span class="fs-6"><?php echo e($item->phone1); ?></span></i></a>
                                    <a href="mailto:info.tsul@.com" class="col-md-6"><i class="fas fa-at"> : <span class="fs-6"><?php echo e($item->email); ?></span></i></a>
                                  </div>

                                  <div class="col-md-12 img-footer-icons">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a style="color: #0270AD !important;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                  </div>
                        </div>
                        </div>
                       

                    </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <!-- <hr class="mt-5"> -->
                    </div>

                    <div class="col-xl-3 mt-3">
                        <div class="left_menu_of_page">
                            <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <?php echo $__env->make('simple.includes.socials_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>





                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/rektorat.blade.php ENDPATH**/ ?>