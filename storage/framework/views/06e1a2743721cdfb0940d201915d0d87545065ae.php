
<?php $__env->startSection('content'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>

    <div class="euc border-top py-4">
            <div class="container">
                <div>
                    <a href="index.html" class="text-secondary"
                        style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Главная страница'); ?></a>
                    <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                            style="font-size:10px"></i></span>
                    <a href="#" class="text-secondary"
                        style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Электрон университет'); ?></a>
                </div>
                <div class="mt-3">
                    <h3 class="wow fadeInDown" data-wow-duration="0.2s" data-wow-delay="0.1s"><?php echo app('translator')->get('index.Elektron universitet markazi'); ?></h3>
                </div>

                <div class="mt-3">
                    <h4 class="border-bottom text-secondary pb-2 pt-4 text-center wow fadeInDown"
                        data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <?php echo app('translator')->get('index.Our products'); ?></h4>
                </div>
                <div class="euc_products">

                    <div class="container-fluid px-0">
                        <div class="row px-0">

                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Project marketing tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.marketing info'); ?>
                                        </span>
                                        <a href="http://marketing.tsul.uz" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Project degree tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.degree info'); ?>
                                        </span>
                                        <a href="http://degree.tsul.uz" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Project online tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.online info'); ?>
                                        </span>
                                        <a href="http://online.tsul.uz" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Project tech tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                        
                                            <?php echo app('translator')->get('index.tech info'); ?>
                                        </span>
                                        <a href="http://tech.tsul.uz" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Project kadr tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.kadr info'); ?>
                                        </span>
                                        <a href="http://kadr.tsul.uz" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Project topic tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.topic info'); ?>
                                        </span>
                                        <a href="http://topic.tsul.uz" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Project contingent tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.contingent info'); ?>
                                        </span>
                                        <a href="http://contingent.tsul.uz" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Qabul tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.Qabul info'); ?>
                                        </span>
                                        <a href="http://qabul.centertsul.uz/" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Ecenter tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.Ecenter info'); ?>
                                        </span>
                                        <a href="http://ecenter.tsul.uz/backend/uz/site/login" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Doc tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.Doc info'); ?>
                                        </span>
                                        <a href="http://doc.tsul.uz/login" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Reception tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.Reception info'); ?>
                                        </span>
                                        <a href="http://reception.tsul.uz/login" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Attestatsiya tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            <?php echo app('translator')->get('index.Attestatsiya info'); ?>
                                        </span>
                                        <a href="http://attestat.tsul.uz/login" target="_blank"><?php echo app('translator')->get('index.website'); ?></a>
                                    </div>
                                </div>
                            </div>

                            
                             <!-- All subdomens -->
                            <div class="col-xl-12  mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s "
                                    data-wow-delay="0.3s" style="border-radius: 15px !important;">
                                    <div class="text-center" style="background-color: #05D; color:white; !important; border-top-left-radius: 15px !important; border-top-right-radius: 15px !important; ">
                                        <i class="fas fa-sitemap d-block"></i>
                                        <h4><?php echo app('translator')->get('index.Subdomens tsul'); ?></h4>
                                    </div>
                                    <div class="project_euc_text fw-ligter">
                                        <span>
                                            <?php echo app('translator')->get('index.Subdomens info'); ?>
                                        </span>
                                        <a class='fw-bolder fs-medium' href="/general-page/all-eum-works" target="_blank"><?php echo app('translator')->get('index.domens enter'); ?></a>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>
                <div class="mt-4">
                    <h4 class="border-bottom text-secondary pb-2 pt-4 text-center wow fadeInDown" data-wow-duration="0.3s" data-wow-delay="0.2s"> <?php echo app('translator')->get('index.Our services'); ?></h4>
                </div>
                <div class="euc_services">
                    <div class="euc_services_item wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <div><i class="fas fa-globe"></i></div>
                        <div>
                            <h6 style="font-weight: 600 !important;"><?php echo app('translator')->get('index.WEB-сайты'); ?></h6>
                           <?php echo app('translator')->get('index.web sayt info'); ?>
                        </div>
                    </div>
                    <div class="euc_services_item wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.2s">
                        <div><i class="fas fa-braille"></i></div>
                        <div>
                            <h6 style="font-weight: 600 !important;"><?php echo app('translator')->get('index.CRM'); ?></h6>
                            <?php echo app('translator')->get('index.crm info'); ?>
                        </div>
                    </div>
                    <div class="euc_services_item wow fadeInRight" data-wow-duration="0.3s" data-wow-delay="0.2s">
                        <div><i class="fas fa-mobile-alt"></i></div>
                        <div>
                            <h6 style="font-weight: 600 !important;"><?php echo app('translator')->get('index.Mobile apps'); ?></h6>
                            <?php echo app('translator')->get('index.mobile apps info'); ?>
                        </div>
                    </div>
                    <div class="euc_services_item wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <div><i class="fas fa-chart-line"></i></div>
                        <div>
                            <h6 style="font-weight: 600 !important;"><?php echo app('translator')->get('index.SEO'); ?></h6>
                            <?php echo app('translator')->get('index.seo info'); ?>
                        </div>
                    </div>
                </div>


            </div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/eum.blade.php ENDPATH**/ ?>