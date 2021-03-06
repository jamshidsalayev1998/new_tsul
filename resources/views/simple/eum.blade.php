@extends('simple.layouts.master')
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>

    <div class="euc border-top py-4">
            <div class="container">
                <div>
                    <a href="index.html" class="text-secondary"
                        style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>
                    <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                            style="font-size:10px"></i></span>
                    <a href="#" class="text-secondary"
                        style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Электрон университет')</a>
                </div>
                <div class="mt-3">
                    <h3 class="wow fadeInDown" data-wow-duration="0.2s" data-wow-delay="0.1s">@lang('index.Elektron universitet markazi')</h3>
                </div>

                <div class="mt-3">
                    <h4 class="border-bottom text-secondary pb-2 pt-4 text-center wow fadeInDown"
                        data-wow-duration="0.6s" data-wow-delay="0.3s">
                        @lang('index.Our products')</h4>
                </div>
                <div class="euc_products">

                    <div class="container-fluid px-0">
                        <div class="row px-0">

                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Project marketing tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.marketing info')
                                        </span>
                                        <a href="http://marketing.tsul.uz" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Project degree tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.degree info')
                                        </span>
                                        <a href="http://degree.tsul.uz" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Project online tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.online info')
                                        </span>
                                        <a href="http://online.tsul.uz" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Project tech tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                        
                                            @lang('index.tech info')
                                        </span>
                                        <a href="http://tech.tsul.uz" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Project kadr tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.kadr info')
                                        </span>
                                        <a href="http://kadr.tsul.uz" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Project topic tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.topic info')
                                        </span>
                                        <a href="http://topic.tsul.uz" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Project contingent tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.contingent info')
                                        </span>
                                        <a href="http://contingent.tsul.uz" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Qabul tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.Qabul info')
                                        </span>
                                        <a href="http://qabul.centertsul.uz/" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Ecenter tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.Ecenter info')
                                        </span>
                                        <a href="http://ecenter.tsul.uz/backend/uz/site/login" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Doc tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.Doc info')
                                        </span>
                                        <a href="http://doc.tsul.uz/login" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Reception tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.Reception info')
                                        </span>
                                        <a href="http://reception.tsul.uz/login" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6 mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s"
                                    data-wow-delay="0.3s">
                                    <div>
                                        <i class="fas fa-project-diagram d-block"></i>
                                        <h4>@lang('index.Attestatsiya tsul')</h4>
                                    </div>
                                    <div class="project_euc_text">
                                        <span>
                                            @lang('index.Attestatsiya info')
                                        </span>
                                        <a href="http://attestat.tsul.uz/login" target="_blank">@lang('index.website')</a>
                                    </div>
                                </div>
                            </div>

                            
                             <!-- All subdomens -->
                            <div class="col-xl-12  mt-3 d-flex">
                                <div class="euc_product_item  flex-fill wow fadeInLeft" data-wow-duration="0.6s "
                                    data-wow-delay="0.3s" style="border-radius: 15px !important;">
                                    <div class="text-center" style="background-color: #05D; color:white; !important; border-top-left-radius: 15px !important; border-top-right-radius: 15px !important; ">
                                        <i class="fas fa-sitemap d-block"></i>
                                        <h4>@lang('index.Subdomens tsul')</h4>
                                    </div>
                                    <div class="project_euc_text fw-ligter">
                                        <span>
                                            @lang('index.Subdomens info')
                                        </span>
                                        <a class='fw-bolder fs-medium' href="/general-page/all-eum-works" target="_blank">@lang('index.domens enter')</a>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>

                </div>
                <div class="mt-4">
                    <h4 class="border-bottom text-secondary pb-2 pt-4 text-center wow fadeInDown" data-wow-duration="0.3s" data-wow-delay="0.2s"> @lang('index.Our services')</h4>
                </div>
                <div class="euc_services">
                    <div class="euc_services_item wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <div><i class="fas fa-globe"></i></div>
                        <div>
                            <h6 style="font-weight: 600 !important;">@lang('index.WEB-сайты')</h6>
                           @lang('index.web sayt info')
                        </div>
                    </div>
                    <div class="euc_services_item wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.2s">
                        <div><i class="fas fa-braille"></i></div>
                        <div>
                            <h6 style="font-weight: 600 !important;">@lang('index.CRM')</h6>
                            @lang('index.crm info')
                        </div>
                    </div>
                    <div class="euc_services_item wow fadeInRight" data-wow-duration="0.3s" data-wow-delay="0.2s">
                        <div><i class="fas fa-mobile-alt"></i></div>
                        <div>
                            <h6 style="font-weight: 600 !important;">@lang('index.Mobile apps')</h6>
                            @lang('index.mobile apps info')
                        </div>
                    </div>
                    <div class="euc_services_item wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.3s">
                        <div><i class="fas fa-chart-line"></i></div>
                        <div>
                            <h6 style="font-weight: 600 !important;">@lang('index.SEO')</h6>
                            @lang('index.seo info')
                        </div>
                    </div>
                </div>


            </div>





@endsection
