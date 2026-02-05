
<?php $__env->startSection('title'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
    <?php echo e($data->$name_locale); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <div class="general">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 mt-3">
                        <div class="left_menu_of_page">
                            <div class="left_side_title_top"><?php echo app('translator')->get('index.БЫСТРЫЕ ССЫЛКИ'); ?></div>
                            <div>
                                <?php $__currentLoopData = $other_faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('simple.management.show' , ['id' => $other->id , 'name' => $other->$name_locale])); ?>"><i class="fas fa-angle-double-right text-secondary"></i><?php echo e($other->$name_locale); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="left_side_title_top mt-3"><?php echo app('translator')->get('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ'); ?></div>
                            <div class="left_social_box">
                                <a href="https://twitter.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.tw'); ?></span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg"
                                    class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                    <span style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.yb'); ?></span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.tg'); ?></span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://www.fb.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
                                    <span style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.fb'); ?></span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 mt-3">
                        <div class="general_content">
                             <?php echo $data->$content_locale; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/management_show.blade.php ENDPATH**/ ?>