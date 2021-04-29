@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/branches/branches.css')}}">
    @endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
    <div class="branches">
            <div class="container">
                <div class="row">

                    <!--breadcrumb-->
                    <div class="col-xl-12 col-lg-12">
                        <div>
                            <a href="/" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>
                            <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                    style="font-size:10px"></i></span>
                            <a href="" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">{{$menu->$name_locale}}</a>
                            <span class="text-secondary" style="font-weight:500">&nbsp;
                                </span>
                        </div>
                    </div>

                    <!--Fast links and social networks-->
                    <div class="col-xl-12 main-content">

                        <div class="col-xl-3 col-lg-3 mt-3 animate__animated animate__fadeInLeft">
                            <div class="left_menu_of_page">
                                 @include('simple.includes.links')
                               @include('simple.includes.socials_box')
                            </div>
                        </div>

                         <div class="col-xl-9">
                             <div class="row animate__animated animate__fadeIn">
                                 <!--first row-->
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-nukus.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/1.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-nukus.tsul.uz" target="_blank"> @lang('index.Қорақалпоғистон юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-andijon.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/2.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-andijon.tsul.uz" target="_blank"> @lang('index.Андижон вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-buxoro.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/3.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-buxoro.tsul.uz" target="_blank"> @lang('index.Бухоро вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <!--Second row-->
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-jizzax.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/4.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-jizzax.tsul.uz" target="_blank"> @lang('index.Жиззах вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-qarshi.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/5.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-qarshi.tsul.uz" target="_blank"> @lang('index.Қашқадарё вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-navoiy.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/6.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-navoiy.tsul.uz" target="_blank"> @lang('index.Навоий вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <!--Third row-->
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-namangan.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/7.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-namangan.tsul.uz" target="_blank"> @lang('index.Наманган вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-samarqand.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/8.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-samarqand.tsul.uz" target="_blank"> @lang('index.Самарқанд вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-guliston.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/9.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-guliston.tsul.uz" target="_blank"> @lang('index.Сирдарё вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <!--Fourth row-->
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-termiz.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/10.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-termiz.tsul.uz" target="_blank"> @lang('index.Сурхондарё вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-fargona.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/11.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-fargona.tsul.uz" target="_blank"> @lang('index.Фарғона вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-urganch.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/12.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-urganch.tsul.uz" target="_blank"> @lang('index.Хоразм вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <!--Fifth row-->
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-toshkent-vil.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/13.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-toshkent-vil.tsul.uz" target="_blank"> @lang('index.Тошкент вилояти юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-xs-12  petition-item-box">
                                    <div class="petition-item card">
                                        <div class="banner">
                                            <a href="https://srs-toshkent.tsul.uz" target="_blank">
                                                <img src="{{asset('front_assets/assets/img/branches/14.png')}}" alt="petition-cover"></a>
                                        </div>
                                        <div class="contents text-center">
                                            <h5><a href="https://srs-toshkent.tsul.uz" target="_blank"> @lang('index.Тошкент шаҳар юридик техникуми') </a></h5>
                                        </div>
                                    </div>
                                </div>
                             </div>



                         </div>


                    </div>


                    <!--Branches cards-->


                </div>
            </div>
        </div>
@endsection
