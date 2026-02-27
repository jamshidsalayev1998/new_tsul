

<?php $__env->startSection('title'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $short_info_locale = 'short_info_'.$locale;
    ?>
    <?php echo e($menu->$name_locale); ?>

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('links'); ?>
<?php $__env->startSection('links'); ?>
        <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/department/department.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <!--Main content-->
        <div class="departments">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div>
                            <a href="index.html" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Главная страница'); ?></a>


                            <span class="text-secondary" style="font-weight:500">&nbsp; <i
                                    class="fas fa-arrows-alt-h"></i>
                                &nbsp;</span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">
                               <?php echo e($menu->$name_locale); ?></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 mt-3">
                        <div class="left_menu_of_page">
                            <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <?php echo $__env->make('simple.includes.socials_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 rounded-box mt-3">
                        <div class="department">

                            <div class="header">
                              <h3 class=" animate__animated animate__pulse"><?php echo app('translator')->get('index.Ilmiy nashrlar'); ?></h3>
                            </div>

                            <div class="cards">

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <div class=" card animate__animated animate__fadeIn ">
                                  <a href="<?php echo e(route('simple.ilmiy_nashrlar.show' , ['id' => $item->id , 'name' => $item->$name_locale])); ?>" style="text-decoration: none">
                                      <div class="card__inner">
                                           <h2><i class="fas fa-graduation-cap"></i></h2>

                                           <div class="d-flex">
                                           <i class="fas fa-bookmark"></i>
                                           <p class="text-start"> &nbsp;<?php echo e($item->$name_locale); ?></p>
                                           </div>

                                         <!-- <sub><i class="fas fa-align-center"></i> :&nbsp;<?php echo e($item->$short_info_locale); ?></sub> -->
                                        </div>
                                  </a>
                              </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/ilmiy_nashrlar.blade.php ENDPATH**/ ?>