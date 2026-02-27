
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/news.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $title_locale = 'title_' . $locale;
    $image_locale = 'image_' . $locale;
    $name_locale = 'name_' . $locale;
    $i = 0;
    ?>

    <div class="news_page border-top py-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 mt-2">
                            <span class="content_top_links">
                                <a href="/"><?php echo app('translator')->get('index.Главная страница'); ?></a>
                                <span class="mx-1"> <i class="fas fa-chevron-right" style="font-size:10px"></i> </span>
                                <span><?php echo app('translator')->get('index.АНОНС МЕРОПРИЯТИЙ'); ?></span>
                            </span>
                    <div>
                        <h4><?php echo app('translator')->get('index.АНОНС МЕРОПРИЯТИЙ'); ?></h4>
                        <div>
                            
                            
                            

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 mt-2">
                    <div class="content_top_social_box">
                        <div>
                            <h5 class="content_top_title_of_socials"><?php echo app('translator')->get('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ'); ?></h5>
                            <div class="content_top_line_socials">
                                <div>
                                    <a href="https://t.me/tsulofficial">
                                        <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                        <h6><?php echo app('translator')->get('index.tg'); ?></h6>
                                        <span><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.fb.com/tsulofficial">
                                        <i class="fab fa-facebook-f" style="color: #4267B6;"></i>
                                        <h6><?php echo app('translator')->get('index.fb'); ?></h6>
                                        <span><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://twitter.com/tsulofficial">
                                        <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                        <h6><?php echo app('translator')->get('index.tw'); ?></h6>
                                        <span class="text-secondary"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg">
                                        <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                        <h6><?php echo app('translator')->get('index.yb'); ?></h6>
                                        <span><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mt-2">
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($i<1): ?>
                            <div class="main_news_card">
                                <div class="main_news_card_img_box">
                                    <img src="<?php echo e(asset('')); ?><?php echo e($item->$image_locale); ?>" alt="">
                                </div>
                                <?php if($item->type): ?>
                                    <button class="card_button_links mt-2"><?php echo e($item->type->$name_locale); ?></button>
                                <?php endif; ?>
                                <a href="<?php echo e(route('simple.announces.show' , ['id' => $item->id])); ?>"
                                   class="news_main_card_text">
                                    <?php echo e($item->$title_locale); ?>

                                </a>
                                <div class="text-end text-secondary mt-1" style="font-size: 14px; font-weight: 500;">
                                    <?php echo e(date('d.m.Y' , strtotime($item->date))); ?></div>
                            </div>
                            <?php
                                $data->forget($i);
                            ?>
                            <?php $i++?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="row">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($i<5): ?>
                                <div class="col-xl-6 col-lg-6 col-md-6   mt-2">
                                    <div class="news_small_cards">
                                        <div class="news_small_cards_img_box">
                                            <img src="<?php echo e(asset('')); ?><?php echo e($item->$image_locale); ?>" alt="">
                                        </div>
                                        <div class="px-2">
                                            <?php if($item->type): ?>
                                                <button
                                                    class="card_button_links mt-2"><?php echo e($item->type->$name_locale); ?></button>
                                            <?php endif; ?>
                                            <a href="<?php echo e(route('simple.announces.show' , ['id' => $item->id])); ?>"><?php echo e($item->$title_locale); ?>

                                            </a>
                                            <span class="text-end text-secondary mt-1 d-block"
                                                  style="font-size: 13px; font-weight: 600;"><?php echo e(date('d.m.Y' , strtotime($item->date))); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $data->forget($i);
                                ?>
                                <?php $i++?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 my-4">
                    <div class="row">
                        <div id="announces-data" class="row">
                            <?php echo $__env->make('simple.announces_scroll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <div class="ajax-load text-center p-3" style="display:none">
                            <p><img src="<?php echo e(asset('images/ajax-loader.gif')); ?>">Load More Post...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 my-4">
                            <div id="news-data">
                                <h5 class="font-weight-bold"><?php echo app('translator')->get('index.Новости'); ?></h5>
                                <hr class="bottom_line_effect">
                                <?php echo $__env->make('simple.announces_news_scroll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function loadMoreData(page) {
            $.ajax({
                url: '?page=' + page,
                type: 'get',
                beforeSend: function () {
                    $(".ajax-load").show();
                }
            })
                .done(function (data) {
                    console.log(data);
                    if (data.news == "" && data.announces == "") {
                        $('.ajax-load').html("No more Announces Found!");
                        return;
                    }

                    $('.ajax-load').hide();
                    $('#news-data').append(data.news);
                    $('#announces-data').append(data.announces);
                })
                // Call back function
                .fail(function (jqXHR, ajaxOptions, thrownError) {
                    alert("Server not responding.....");
                });
        }

        //function for Scroll Event
        var page = 1;
        $(window).scroll(function () {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                loadMoreData(page);
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/announces.blade.php ENDPATH**/ ?>