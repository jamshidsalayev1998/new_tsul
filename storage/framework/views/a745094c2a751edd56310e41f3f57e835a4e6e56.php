
<?php $__env->startSection('title'); ?>
     <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $students_locale = 'students_'.$locale;
        $teachers_locale = 'teachers_'.$locale;
        $directions_locale = 'directions_'.$locale;
        $type_name_locale = 'type_name_'.$locale;
        $full_name_locale = 'full_name_'.$locale;
        $address_locale = 'address_'.$locale;
        $reception_locale = 'reception_days_'.$locale;
        $scientific_activity_locale = 'scientific_activity_'.$locale;
        $lessons_locale = 'lessons_'.$locale;
        $professional_development_locale = 'professional_development_'.$locale;
        $labor_activity_locale = 'labor_activity_'.$locale;
    ?>
    <?php echo e($data->$name_locale); ?>

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/faculty_and_center.css')); ?>">
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

      <div class="faculty_and_center py-3">
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
                            <span class="text-secondary" style="font-weight:500">&nbsp; <i
                                    class="fas fa-arrows-alt-h"></i>
                                &nbsp;</span>
                            <a href="#" class="text-secondary" style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo e($data->$name_locale); ?></a>
                        </div>
                    </div>
                    <div class="col-xl-3 mt-3">
                        <div class="left_menu_of_page">
                            <div class="left_side_title_top"><?php echo app('translator')->get('index.БЫСТРЫЕ ССЫЛКИ'); ?></div>
                            <div>
                                <?php $__currentLoopData = $other_faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('simple.faculty.show' , ['id' => $other->id , 'name' => $other->$name_locale])); ?>"><i class="fas fa-angle-double-right text-secondary"></i><?php echo e($other->$name_locale); ?></a>
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
                    <div class="col-xl-9 mt-3">
                        <div>
                            <?php $__currentLoopData = $data->administrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="about_fc_card border mt-2">
                                <div>
                                    <?php if($ad->image): ?>
                                    <img src="<?php echo e(asset('')); ?><?php echo e($ad->image); ?>" alt="">
                                        <?php else: ?>
                                    <img src="<?php echo e(asset('images/alone/logo_main.png')); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="about_fc_card_text_box">
                                    <div>
                                        <i class="fas fa-user mr-1"></i>
                                        <b class="font-weight-bold" style="font-size: 16px; margin-left: 2px;"><?php echo e($ad->$type_name_locale); ?></b>
                                        <span><span class="font-weight-bold"><?php echo e($ad->$full_name_locale); ?></span><br /></span>
                                    </div>
                                    <div>
                                        <i class="fas fa-map-marked-alt mr-1"></i>
                                        <b><?php echo app('translator')->get('index.Manzil'); ?>:</b>
                                        <span><?php echo e($ad->$address_locale); ?></span>
                                    </div>
                                    <div>
                                        <i class="fas fa-phone-square-alt mr-1"></i>
                                        <b><?php echo app('translator')->get('index.Telefon'); ?>: </b>
                                        <span> <?php echo e($ad->phone); ?></span>
                                    </div>
                                    <div>
                                        <i class="fas fa-fax mr-1"></i>
                                        <b><?php echo app('translator')->get('index.Faks'); ?>: </b>
                                        <span> <?php echo e($ad->faks); ?></span>
                                    </div>
                                    <div>
                                        <i class="fas fa-envelope-square mr-1"></i>
                                        <b><?php echo app('translator')->get('index.Elektron pochta'); ?>: </b>
                                        <span><?php echo e($ad->email); ?></span>
                                    </div>
                                    <div>
                                        <i class="fas fa-clock mr-1"></i>
                                        <b><?php echo app('translator')->get('index.Qabul kunlari'); ?>: </b>
                                        <span> <?php echo e($ad->$reception_locale); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="about_main_person mt-3">
                                <section id="content_accordion">

                                    <div id="accordion" class="accordion-container">








                                        <article class="content-entry">
                                            <h4 class="article-title"><i></i><?php echo app('translator')->get('index.Talim profillari'); ?></h4>
                                            <div class="accordion-content">
                                                <?php echo $ad->$professional_development_locale; ?>

                                            </div>
                                            <!--/.accordion-content-->
                                        </article>

                                        <article class="content-entry">
                                            <h4 class="article-title"><i></i><?php echo app('translator')->get('index.O`qitadigan fanlari (so`ngi uch o`quv yilida)'); ?></h4>
                                            <div class="accordion-content">
                                                <?php echo $ad->$lessons_locale; ?>

                                            </div>
                                            <!--/.accordion-content-->
                                        </article>

                                        <!-- <article class="content-entry">
                                            <h4 class="article-title"><i></i><?php echo app('translator')->get('index.Ilmiy faoliyati'); ?></h4>
                                            <div class="accordion-content">
                                                <?php echo $ad->$scientific_activity_locale; ?>

                                            </div> -->
                                            <!--/.accordion-content-->
                                        <!-- </article> -->

                                    </div>
                                    <!--/#accordion-->


                                </section>
                                <!--/#content-->
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <!-- <div class="mt-3">
                                <ul class="fc_tabs">
                                    <li data-tab-target="#about" class="active fc_tab"><?php echo app('translator')->get('index.Yo`nalishlar'); ?></li>
                                    
                                    <li data-tab-target="#teachers" class="fc_tab"><?php echo app('translator')->get('index.O`qituvchilar'); ?></li>
                                    
                                    <li data-tab-target="#students" class="fc_tab"><?php echo app('translator')->get('index.Talabalar'); ?></li>
                                </ul>

                                <div class="fc_tab-content">
                                    <div id="students" data-tab-content class="active m-5">
                                        <?php echo $data->$students_locale; ?>

                                    </div>
                                    <div id="teachers" data-tab-content class="m-5">
                                        <?php echo $data->$teachers_locale; ?>

                                    </div>
                                    <div id="about" data-tab-content class="m-5">
                                        <?php echo $data->$directions_locale; ?>

                                    </div>


                                </div>
                            </div> -->
                            <div class="header_fc_content mt-2">
                                <h5 class="border-bottom pb-2"><?php echo e($data->$name_locale); ?></h5>
                                <?php echo $data->$content_locale; ?>

                            </div>

























                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/faculty_show.blade.php ENDPATH**/ ?>