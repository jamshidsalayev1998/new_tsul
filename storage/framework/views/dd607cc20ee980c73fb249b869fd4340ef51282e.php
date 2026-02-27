
<?php $__env->startSection('title'); ?>
    <?php
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $name_locale = 'name_' . $locale;
    ?>
    <?php echo e($menu->$name_locale); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/general_page_content.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="general">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 mt-3">
                    <div class="left_menu_of_page">
                        <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 mt-3">
                    <div class="general_content">
                        <div class="content-from-editor">
                            <style>
                                .card:hover {
                                    border: 1px solid #2f54eb;
                                    box-shadow: 0 4px 2px -2px #8c8c8c;
                                    cursor: pointer;
                                }

                                @media  screen and (min-width: 320px) and (max-width: 425px) {
                                    .card {
                                        margin-bottom: 15px;
                                    }
                                }

                                @media  screen and (min-width: 425px) and (max-width: 768px) {
                                    .card {
                                        margin-bottom: 15px;
                                    }
                                }

                                @media  screen and (min-width: 768px) and (max-width: 1024px) {
                                    .card {
                                        margin-bottom: 15px;
                                    }
                                }


                            </style>


                            <div class="col-xl-12">
                            <div class="row">
                                <!-- <div class="col-xl-12 card p-3 mb-1">
                                    <a href="/all-faculties" style="text-decoration:none; font-weight:600;">
                                        <div class="card-header" style="background-color: #f0f5ff; text-align: center !important;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;<?php echo app('translator')->get('index.Faculties'); ?>
                                        </div>
                                    </a>
                                </div> -->

                                <!--Start All Faculties -->
                                <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty%20of%20Law-QS"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;<?php echo app('translator')->get('index.Xususiy huquq'); ?>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty-of-Social-science"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;<?php echo app('translator')->get('index.ommaviy huquq'); ?>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty%20of%20Law-QS"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;<?php echo app('translator')->get('index.jinoiy odil sudlov'); ?>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty-of-Social-science"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;<?php echo app('translator')->get('index.xalqaro huququ va qiyosiy ququqshunoslik'); ?>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty%20of%20Law-QS"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;<?php echo app('translator')->get('index.magistratura va sirtqi talim'); ?>
                                        </div>
                                    </a>
                                </div> -->

                            
                                <!--End All Faculties -->
                                                                                                        
                                </div>
                            </div>

                            <div class="d-flex my-3">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3">
                                        <a href="https://tsul.uz/uz/general-page/Faculty%20of%20Law-QS"
                                           style="text-decoration:none; font-weight:600;">
                                            <div class="card-header text-center" style="background-color: #f0f5ff;">
                                                <i class="fas fa-book-reader"
                                                   style="font-size: 24px; color:#2f54eb;"></i><b>
                                                    :</b>&nbsp;<?php echo app('translator')->get('index.Faculty of Law'); ?>
                                            </div>
                                        </a>
                                    </div>
    
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3">
                                        <a href="https://tsul.uz/uz/general-page/Faculty-of-Social-science"
                                           style="text-decoration:none; font-weight:600;">
                                            <div class="card-header text-center" style="background-color: #f0f5ff;">
                                                <i class="fas fa-book-reader"
                                                   style="font-size: 24px; color:#2f54eb;"></i><b>
                                                    :</b>&nbsp;<?php echo app('translator')->get('index.Faculty of Social science'); ?>
                                            </div>
                                        </a>
                                    </div>

                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('front_assets/js/general_page_content.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/study_programs.blade.php ENDPATH**/ ?>