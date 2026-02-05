<?php $__env->startSection('title'); ?>
    <?php
    $locale = app()->getLocale();
    $text_locale = 'text_' . $locale;
    $name_locale = 'name_' . $locale;
    $image_locale = 'image_' . $locale;
    $link_locale = 'link_' . $locale;
    $fio_locale = 'fio_' . $locale;
    $title_locale = 'title_' . $locale;
    $description_locale = 'description_' . $locale;
    $short_info_locale = 'short_info_' . $locale;
    $content_locale = 'content_' . $locale;
    $news = 'App\Neww'::orderBy('date', 'DESC')->get()->take(4);
    $announces = 'App\Announce'::where('event', 0)->orderBy('id', 'DESC')->get()->take(4);
    $announces_event = 'App\Announce'::where('event', 1)->orderBy('date', 'DESC')->take(4)->get();
    $sep = 'App\SeperatelyOneNew'::where('status', 1)->orderBy('id', 'DESC')->first();
    $men = 'App\Menu'::where('id', 58)->first();
    $sll = str_replace('/general-page/', '', $men->slug);
    $slug = 'App\Page'::where('slug', $sll)->first();
    $scientist_news = 'App\YoungScientistsNew'::where('status', 1)->orderBy('id', 'DESC')->get()->take(4);
    $scientist_articles = 'App\ScientificArticle'::where('status', 1)->orderBy('id', 'DESC')->get()->take(4);
    ?>
    <?php if($locale == 'uz'): ?>
        TDYU
    <?php elseif($locale == 'en'): ?>TSUL
    <?php elseif($locale == 'ru'): ?>
        ТГЮУ
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    
    <!-- <div id="content">	 -->
    <div class="main_content ">
        <div class="main_content_text_box">
            <div>
                <div>
                            <span>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:info@tsul.uz" class="text-white "><?php echo e($slider_texts->email); ?> </a>
                            </span>
                    <span>
                                <i class="fas fa-phone-alt"></i>
                                <?php echo e($slider_texts->phone); ?>

                            </span>
                </div>
                <div class="card-text" style="color: white !important;">
                    <?php echo $slider_texts->$text_locale; ?>

                    <a href="/about-university" class="mc_button"><?php echo app('translator')->get('index.подробнее'); ?> <i
                            class="fas fa-arrow-right ml-2"
                            style="font-size: 14px;"></i></a>
                    <div class="owl-dots">
                        <button role="button" class="owl-dot"><span></span></button>
                        <button role="button"
                                class="owl-dot active"><span></span></button>
                        <button role="button"
                                class="owl-dot"><span></span></button>
                    </div>
                </div>
                <div>
                    <div class="customNextBtn"><i class="fas fa-chevron-left"></i></div>
                    <div class="customPreviousBtn"><i class="fas fa-chevron-right"></i></div>
                </div>
            </div>
        </div>
        <style>
            .div-fix {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(0, 0, 0, 0.2);

            }

            .lazyOwl::before {
                background-color: black;
                content: "dsds";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 1000;
            }

        </style>
        <div id="owl-demo" class="owl-carousel">

            <?php $__currentLoopData = $slider_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item redirect-item linkImage " alink="<?php echo e($image->$link_locale); ?>"  style="position: relative; ">
                 <a href="<?php echo e($image->$link_locale); ?>">
                    
                    <a href="<?php echo e($image->$link_locale); ?>"> <img alink="<?php echo e($image->$link_locale); ?>"  class="lazyOwl " src="<?php echo e(asset('/')); ?><?php echo e($image->$image_locale); ?>" alt="Lazy Owl Image"></a>
                    <div class="div-fix">
                        <div
                            style="position: absolute; top: 50%;left: 50%;transform: translate(-50%,-50%);color: white;"
                            class="col-lg-6"><?php echo $image->$text_locale; ?></div>
                    </div>
                 </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div>


    </div>
    <!-- six slider footer card -->
    <section class="main_menus_bottom">
        <div class="main_menus_box d-flex">
            <?php $__currentLoopData = $system_cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($card->link); ?>" class="menu_icon_items card-text">
                    <?php echo $card->icon; ?>

                    <h5><?php echo e($card->$name_locale); ?></h5>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- Videos and events ads -->
    <!-- <section class="bg-white py-3 mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="header_for_part my-2  wow fadeInDown" data-wow-duration="0.4s"
                         data-wow-delay="0.2s">
                        <?php echo app('translator')->get('index.ВИДЕОМАТЕРИАЛЫ'); ?>
                    </div>

                    <div class="video_materials wow fadeIn my-4" data-wow-duration="0.2s" data-wow-delay="0.2s">
                        <div class="vm_play_box video-play-button">
                            <i class="fas fa-play" id="vm_play_i"></i>
                            <button id="vm_play"></button>
                        </div>
                        <video poster="<?php echo e(asset('front_assets/assets/img/rolik.png')); ?>" id="vm_id">
                            <source src="<?php echo e(asset('front_assets/assets/tdyu2.mp4')); ?>" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div class="more_links_to_pages d-flex justify-content-end">
                            <a class="owlItems" href="/all-videos"><?php echo app('translator')->get('index.Все видео'); ?> <i
                                    class="fas fa-arrow-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-12 third_right_part_mt">
                    <div class="header_for_part my-2 wow fadeInDown" data-wow-duration="0.4s" data-wow-delay="0.2s">
                        <div><?php echo app('translator')->get('index.АНОНС МЕРОПРИЯТИЙ'); ?></div>
                    </div>
                    <div class="row">
                        <?php
                        $an_id = 0;
                        ?>
                        <?php $__currentLoopData = $announces_event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-6 mt-3">
                                <a href="<?php echo e(route('simple.announces.show' , ['id' => $announce->id])); ?>"
                                   class="main_anons_items wow fadeInRight  p-2" data-wow-duration="0.2s"
                                   data-wow-delay="0.2s">
                                    <div class="main_anons_image_box">
                                        <img src="<?php echo e(asset('')); ?><?php echo e($announce->$image_locale); ?>" alt="image not found">
                                    </div>
                                    <div class="main_anons_text_box">
                                        <span><?php echo e(date('d.m.Y' , strtotime($announce->date))); ?></span>
                                        <span class="card-text">
                                                <?php echo e($announce->$short_info_locale); ?>

                                            </span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="more_links_to_pages d-flex justify-content-end mt-2">
                            <a class="owlItems" href="<?php echo e(route('simple.announces')); ?>"> <?php echo app('translator')->get('index.Все анонсы'); ?> <i
                                    class="fas fa-arrow-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Rector's greeting and news  -->
    <section class="mt-3">
        <div class="container-fluid">
            <div class="row">
            <?php if($slug): ?>
                <!-- <div class="col-xl-3">
                            <div class="rectors_card_appeal">
                                <h5> <?php echo app('translator')->get('index.Rektor murojaati'); ?></h5>
                                
                
                
                    <div class="rectors_card_text">
                        <span style="display: -webkit-box;
max-width: 100%;
-webkit-line-clamp: 4;
-webkit-box-orient: vertical;
overflow: hidden;">
                            <i> <?php echo $slug->$content_locale; ?></i>
                                    </span>
                                    <a style="text-decoration: none; color:#1890ff;" href="/general-page/privetstvie-rektora">
                                        <?php echo app('translator')->get('index.Read more'); ?> <i class="fas fa-arrow-right ml-3"></i>
                                    </a>
                                </div>
                            </div>
                        </div> -->
            <?php endif; ?>

            <!-- News and ads -->
                <div class="col-xl-12">
                    <div class="tab_news">
                        <button class="tablinks active font-weight-bold border-end"
                                onclick="openCity(event, 'news')"><?php echo app('translator')->get('index.Новости'); ?></button>
                        <button class="tablinks font-weight-bold "
                                onclick="openCity(event, 'ads')"><?php echo app('translator')->get('index.Объявления'); ?></button>
                    </div>
                    <div id="news" class="tabcontent_news" style="display: block;">
                        <div class="news_card_box">
                            <div class="owl-carousel owl-theme" id="news_carousel">

                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $neww): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="news_items">
                                        <a href="<?php echo e(route('simple.news.show' , ['id'=>$neww->id, 'slug' => $neww->create_slug() , 'type' => $neww->create_type_slug()])); ?>">
                                            <div class="news_card_image">
                                                <img style="object-fit: contain !important;" class="img-fluid rounded"
                                                     src="<?php echo e(asset('')); ?><?php echo e($neww->$image_locale); ?>" alt="">
                                            </div>
                                            <div class="news_card_text">
                                                <span><?php echo e($neww->type->$name_locale); ?> / <?php echo e($neww->date); ?></span>
                                                <span class="truncate">
                                                    <?php if($neww->$short_info_locale): ?>
                                                        <?php echo e($neww->$short_info_locale); ?>

                                                    <?php else: ?>
                                                        <?php echo e($neww->$title_locale); ?>

                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="more_links_to_pages d-flex justify-content-end" style="margin-top: 0px;">
                                <a class="owlItems" href="<?php echo e(route('simple.news')); ?>"><?php echo app('translator')->get('index.Все новости'); ?> <i
                                        class="fas fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div id="ads" class="tabcontent_news">
                        <div class="news_card_box">
                            <div class="owl-carousel owl-theme" id="ads_carousel">
                                <?php $__currentLoopData = $announces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ann): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="news_items">
                                        <a href="<?php echo e(route('simple.announces.show' , ['id'=>$ann->id])); ?>">
                                            <div class="news_card_image">
                                                <img style="object-fit: contain !important;" class="img-fluid rounded"
                                                     src="<?php echo e(asset('')); ?><?php echo e($ann->$image_locale); ?>" alt="">
                                                <!-- <span>наука</span> -->
                                            </div>
                                            <div class="news_card_text">
                                                <span><?php echo e(date('d.m.Y' , strtotime($ann->date))); ?></span>
                                                <span class="truncate">
                                                    <?php if($ann->$short_info_locale): ?>
                                                        <?php echo e($ann->$short_info_locale); ?>

                                                    <?php else: ?>
                                                        <?php echo e($ann->$title_locale); ?>


                                                    <?php endif; ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="more_links_to_pages d-flex justify-content-end" style="margin-top: 0px;">
                                <a class="owlItems" href="<?php echo e(route('simple.news')); ?>"><?php echo app('translator')->get('index.Все новости'); ?> <i
                                        class="fas fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- <section class="life_university">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <span class="life_university_icon"><i class="far fa-check-circle"></i></span>
                    </div>

                    <div class="col-xl-8">
                        <div class="life_univ_box">
                            <h1><?php echo e($sep->$title_locale); ?></h1>
                            <p>
                                <?php echo e($sep->$content_locale); ?>

        </p>
    </div>
</div>

</div>
</div>
</section> -->


    <!-- Start Doctorate 2020 2021 -->
    <!-- <section class="doctorate-gallery mt-3 mb-3">

                    <div class="wrap" style="overflow-wrap: anywhere;">

                        <div class="first-inner-div col-xl-12">
                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/1.JPG')); ?>" alt="">
                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/2.JPG')); ?>" alt="" >
                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/4.JPG')); ?>" alt="" >
                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/5.JPG')); ?>" alt="" >

                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/3.JPG')); ?>" alt="" >
                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/6.JPG')); ?>" alt="" >


                            <h3><?php echo app('translator')->get('index.Doktorantura 2020-2021'); ?></h3>

                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/10.JPG')); ?>" alt="" >
                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/8.JPG')); ?>" alt="" >

                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/9.JPG')); ?>" alt="" >
                            <img class="img-fluid" src="<?php echo e(asset('front_assets/assets/doktorantura/7.JPG')); ?>" alt="" >


                        </div>



                    </div>


            </section>

        <section class="scientific_chapter"> -->
    <!-- End Doctorate 2020 2021 -->

    <!-- Scientific Articles section -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3">
                <h5 class="scientific_articles_title">
                    <?php echo app('translator')->get('index.Научные статьи'); ?>
                </h5>
                <div class="scientific_article_box">
                    <?php $__currentLoopData = $scientist_articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc_art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="scientific_articles_items">
                                    <span>
                                        <div style="font-size: 20px;"><?php echo e(date('d' , strtotime($sc_art->date))); ?></div>
                                        <div style="font-size: 14px;"><?php echo e(date('m' , strtotime($sc_art->date))); ?></div>
                                    </span>
                            <span>
                                        <span class="d-block text-secondary"><i class="fas fa-clock"></i> <?php echo e($sc_art->date); ?></span>
                                        <span>
                                            <a href="<?php echo e(route('all_young_articles_show' , ['id' => $sc_art->id])); ?>">
                                           <?php if($sc_art->$short_info_locale): ?>
                                                    <?php echo e($sc_art->$short_info_locale); ?>

                                                <?php endif; ?>
                                            </a>
                                        </span>
                                    </span>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="articles_box_shadow">
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div>
                    <h5 class="scientific_persons_card_title"><?php echo app('translator')->get('index.Молодые ученые'); ?>
                    </h5>
                </div>

                <div class="scientific_card_box">
                    <div class="owl-carousel owl-theme" id="scientific_carousel">
                        <?php $__currentLoopData = $scientist_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="scientific_items">
                                <div class="scientific_card_image img-fluid"
                                     style="width:100% !important; height: 200px !important;">
                                    <?php if($sc->image): ?>
                                        <img src="<?php echo e(asset('')); ?><?php echo e($sc->image); ?>" alt=""
                                             style="width:100% !important; height: 100% !important; object-fit:cover; border-radius:4px !important;">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('front_assets/assets/img/img1.jpg')); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <a class="h-100" href="<?php echo e(route('all_young_scientists_show' , ['id' => $sc->id])); ?>">
                                    <div class="scientific_card_text">
                                            <span>
                                                <?php if($sc->$title_locale): ?>
                                                    <?php echo e($sc->$title_locale); ?>

                                                <?php endif; ?>
                                            </span>
                                        <span>
                                               <?php if($sc->$short_info_locale): ?>
                                                <?php echo e($sc->$short_info_locale); ?>

                                            <?php endif; ?>
                                            </span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>

            </div>
        </div>


        <section class="seventh-part w-100 my-1">

            <?php echo $__env->make('simple.includes.teachers_corusel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <style>
                .requestmentName {
                    background: #fff;
                    border-radius: 8px;
                    margin-bottom: 12px;
                }

                .requestmentName h1 {
                    font-size: 36px;
                    color: #2C42A7 !important;
                }

                .ark {
                    border-top-left-radius: 8px;
                    border-top-right-radius: 8px;
                    background-color: #2C42A7;
                    height: 10px;
                    width: 100%;
                }

                .requestmentAnswers {
                    background: #fff;
                    border-radius: 8px;
                    margin-bottom: 12px;
                }

                .requestmentAnswers h3 {
                    font-size: 16px;
                    color: #202124 !important;
                }

                .requestmentAnswers h3::after {
                    color: red;
                    content: " * ";
                    font-size: 16px;
                }

                .form-check {
                    line-height: 1.9;
                }

                .submitAgrees {
                    background: #fff;
                    border-radius: 8px;
                    margin-bottom: 12px;
                }

                .submitAgrees h3 {
                    font-size: 16px;
                    color: #202124 !important;
                }

                .submitAgrees h3::after {
                    color: red;
                    content: " * ";
                    font-size: 16px;
                }
            </style>
            <?php if($requestment): ?>
            <section class="seventh-part w-100 my-5  bg-white rounded-3">

                <form id="requestmentFrom" class="row">
                    <div class="container requestment">
                        <div class="requestmentName">
                            <div class="p-4">
                                <h1><?php echo e($requestment->$name_locale); ?>:</h1>
                                <p><?php echo $requestment->$description_locale; ?></p>
                            </div>
                        </div>
                        <div class="more_links_to_pages d-flex justify-content-end" style="margin-top: 0px;">
                            <a class="owlItems" href="<?php echo e(route('simple.requestment', $requestment->id)); ?>"><?php echo app('translator')->get('index.Participate'); ?> <i
                                    class="fas fa-arrow-circle-right ml-2"></i></a>
                        </div>
                    </div>
                </form>

                <script>
                    function clearFunction() {
                        document.getElementById("requestmentFrom").reset();
                    }
                </script>
            </section>
<?php endif; ?>


            <!-- End Teacher info cards section -->
            <div class="container">
                <div id="owl-demo" class="owl-carousel owl-theme cb_7">
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/lex.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://lex.uz" target="_blank" class="owlItems">lex.uz</a>
                            </span>

                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/datagovuz.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://data.gov.uz" target="_blank" class="owlItems">data.gov.uz</a>
                            </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/gerb1.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://www.gov.uz" target="_blank" class="owlItems">gov.uz</a>
                            </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/minjust.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://minjust.uz" target="_blank" class="owlItems">minjust.uz</a>
                            </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/uzeduuz.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="http://uzedu.uz/" target="_blank" class="owlItems" rel="noopener noreferrer">uzedu.uz</a>
                            </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/gerb1.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://president.uz/" target="_blank" class="owlItems"
                                   rel="noopener noreferrer">president.uz</a>
                            </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/gerb1.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://pm.gov.uz/" target="_blank" class="owlItems" rel="noopener noreferrer">pm.gov.uz</a>
                            </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/gerb1.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://regulation.gov.uz/" target="_blank" class="owlItems"
                                   rel="noopener noreferrer">regulation.gov.uz</a>
                            </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/mygov.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://my.gov.uz/" target="_blank" class="owlItems" rel="noopener noreferrer">my.gov.uz</a>
                            </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="<?php echo e(asset('front_assets/assets/img/huquqiyportal.png')); ?>" alt="">
                        </div>
                        <span class="link_to_site">
                                <a href="https://huquqiyportal.uz/" target="_blank" class="owlItems"
                                   rel="noopener noreferrer">huquqiyportal.uz</a>
                            </span>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Yopish"></button>
    </div>

    <script>
        // 3 sekunddan keyin alertni yopish
        setTimeout(function () {
            let alert = document.getElementById('success-alert');
            if (alert) {
                let bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 3000); // 3000 ms = 3 sekund
    </script>
<?php endif; ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
    <script>
        $('.vse_novosti').click(function () {
            window.location.href = $(this).attr('data-href');
        });

        $(document).ready(function () {
            $('.redirect-item').click(function () {
                var href = $(this).attr('href');
                if (href) {
                    window.location.href = href;
                }
            })
            setTimeout(function () {
                $('body').addClass('loaded');
            }, 2000);

        });
        $('.linkImage').click(function(){
            window.location.href = $(this).attr('alink');
        })
    </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/index.blade.php ENDPATH**/ ?>