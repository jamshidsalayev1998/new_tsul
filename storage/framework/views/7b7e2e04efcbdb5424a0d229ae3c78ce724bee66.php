
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
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Центры'); ?></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 mt-3">
                        <div class="left_menu_of_page">
                            <div class="left_side_title_top"><?php echo app('translator')->get('index.БЫСТРЫЕ ССЫЛКИ'); ?></div>
                            <div>
                                <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php if($link->slug): ?> <?php echo e($link->slug); ?> <?php else: ?> # <?php endif; ?>"><i class="fas fa-angle-double-right text-secondary"></i><?php echo e($link->$name_locale); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="left_side_title_top mt-3"><?php echo app('translator')->get('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ'); ?></div>
                            <div class="left_social_box">
                                <a href="https://twitter.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg"
                                    class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://www.fb.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 py-2 mt-3 bg-white">
                        <h3 class="border-bottom pb-2" style="color: #233585;"><?php echo app('translator')->get('index.Центры'); ?></h3>
                        <div class="ac_item_box">
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('simple.center.show' , ['id' => $item->id , 'name' => $item->$name_locale])); ?>" class="all_center_items">
                                <div class="all_center_items_icon"><i class="fas fa-gavel"></i></div>
                                <div class="all_center_items_text_card">
                                    <h4><i class="fas fa-door-open"></i><?php echo e($item->$name_locale); ?></h4>

                                    <div class="border-bottom pb-1">
                                        <span class="font-weight-bold ac_title_1"><i class="fas fa-align-center"></i><?php echo app('translator')->get('index.Markaz haqida'); ?>:</span>
                                        <span>
                                           <?php echo e($item->$short_info_locale); ?>

                                        </span>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/all_centers.blade.php ENDPATH**/ ?>