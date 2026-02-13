
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/news.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/reg_map.css')); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $title_locale = 'title_'.$locale;
        $image_locale = 'image_'.$locale;
        $name_locale ='name_'.$locale;
        $short_info_locale ='short_info_'.$locale;
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
                            <a href="<?php echo e(route('simple.news')); ?>" class="text-secondary"
                                style="font-weight:500;  font-size: 15px;"><?php echo app('translator')->get('index.АНОНС МЕРОПРИЯТИЙ'); ?></a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">





                            <div>
                                <div style="width: 100%; align-items: center"  class="text-center">
                                    <h3 ><b><?php echo e($new->$title_locale); ?></b></h3>
                                </div>
                                <div class="rg_main_left_img text-center">
                                    <img style="width: auto!important;" src="<?php echo e(asset('')); ?><?php echo e($new->$image_locale); ?>" alt="">
                                </div>
                                <span class="card-text">

                                <?php echo $new->$content_locale; ?>

                                </span>
                            </div>
                        </div>
                        <div class="last_news_bottom_box">
                            <h5><?php echo app('translator')->get('index.Последние новости'); ?></h5>
                            <div id="announces-data" class="row border-top ">
                              <?php echo $__env->make('simple.announce_show_scroll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <p class="text-end mt-2">
                                    <a href="<?php echo e(route('simple.news')); ?>" style="font-weight: 500; color: #006523; font-size: 14px;"><?php echo app('translator')->get('index.Все новости'); ?></a>
                                </p>
                            </div>
                            <div class="ajax-load text-center p-3" style="display:none">
                                <p><img src="<?php echo e(asset('images/ajax-loader.gif')); ?>">Load More Post...</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 ">
                        <div class="social_box mt-3">
                            <h5><?php echo app('translator')->get('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ'); ?></h5>
                            <div class="left_social_box">
                                <a href="https://twitter.com/tsulofficial" class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                    <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.tw'); ?></span>
                                    <span class="font-weight-bold" style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg" class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                    <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.yb'); ?></span>
                                    <span class="font-weight-bold" style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                    <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.tg'); ?></span>
                                    <span class="font-weight-bold" style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>
                                <a href="https://www.fb.com/tsulofficial" class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
                                    <span class="card-text" style="font-size: 13px; font-weight: bold;"><?php echo app('translator')->get('index.fb'); ?></span>
                                    <span class="font-weight-bold" style="font-size: 13px; color: grey;"><?php echo app('translator')->get('index.подписчиков'); ?></span>
                                </a>

                            </div>
                        </div>
                        <div class="rg_anons mt-3">
                            <h5><?php echo app('translator')->get('index.Анонсы'); ?></h5>
                            <div id="news-data">
                                <?php echo $__env->make('simple.announce_show_news_scroll', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <p class="text-end">
                                <a href="<?php echo e(route('simple.announces')); ?>" class="text-dark" style="font-weight: 500;"><?php echo app('translator')->get('index.Все анонсы'); ?></a>
                            </p>
                        </div>

                        <?php echo $__env->make('simple.includes.youtube_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/announce_show.blade.php ENDPATH**/ ?>