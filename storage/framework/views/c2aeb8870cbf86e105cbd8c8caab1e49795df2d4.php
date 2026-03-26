
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/news.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/reg_map.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $title_locale = 'title_' . $locale;
    $image_locale = 'image_' . $locale;
    $name_locale = 'name_' . $locale;
    $short_info_locale = 'short_info_' . $locale;
    $i = 0;
    ?>
    <div class="rg_page border-top pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div>
                        <a href="/" class="text-secondary"
                           style="font-weight:500; font-size: 15px;"><?php echo app('translator')->get('index.Главная страница'); ?></a>
                        <span class="text-secondary" style="font-weight:500">&nbsp; > &nbsp;</span>

                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div>






                            <span class="card-text">

                                <?php echo $new->$content_locale; ?>

                                </span>
                        </div>
                    </div>
                    <div class="last_news_bottom_box">
                        <div class="row border-top ">
                            <?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-4 mt-3 last_news_bottom_card">
                                        <div>
                                            <img src="<?php echo e(asset('')); ?><?php echo e($other->image); ?>" alt="">
                                        </div>
                                            <h6 class="last_news_bottom_card_text mt-2">
                                    <a href="<?php echo e(route('all_young_scientists_show' , ['id' => $other->id])); ?>">
                                                <?php echo e($other->$short_info_locale); ?>

                                        </a>
                                            </h6>
                                            <span class="text-secondary text-end d-block" style="font-size: 13px; font-weight: 500;"><?php echo e($other->date); ?></span>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <p class="text-end mt-2">


                        </p>
                    </div>

                </div>
            </div>
            <div class="col-xl-3 ">
                <div class="social_box mt-3">
                    <h5><?php echo app('translator')->get('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ'); ?></h5>
                    <div class="left_social_box">
                        <a href="https://twitter.com/tsulofficial" class="left_social_box_items" target="_blank"
                           rel="noopener noreferrer">
                            <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                            <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.tw'); ?></span>
                            <span class="font-weight-bold"
                                  style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                        </a>
                        <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg" class="left_social_box_items"
                           target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-youtube" style="color: #FE0000;"></i>
                            <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.yb'); ?></span>
                            <span class="font-weight-bold"
                                  style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                        </a>
                        <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank"
                           rel="noopener noreferrer">
                            <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                            <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.tg'); ?></span>
                            <span class="font-weight-bold"
                                  style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                        </a>
                        <a href="https://www.fb.com/tsulofficial" class="left_social_box_items" target="_blank"
                           rel="noopener noreferrer">
                            <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
                            <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.fb'); ?></span>
                            <span class="font-weight-bold"
                                  style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                        </a>

                    </div>
                </div>
                <div class="rg_anons mt-3">
                    <h5><?php echo app('translator')->get('index.Научные статьи'); ?></h5>
                    <div>
                        <?php $__currentLoopData = $announces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                                <div>
                                    <?php echo e(date('d-m',strtotime($anc->date))); ?>

                                </div>
                                <div>
                                    <a href="">
                                        <?php echo e($anc->$title_locale); ?>

                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <p class="text-end">
                        <a href="<?php echo e(route('simple.announces')); ?>" class="text-dark"
                           style="font-weight: 500;"><?php echo app('translator')->get('index.Все анонсы'); ?></a>
                    </p>
                </div>

                <?php echo $__env->make('simple.includes.youtube_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/young_scientist_show.blade.php ENDPATH**/ ?>