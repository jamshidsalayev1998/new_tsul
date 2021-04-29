@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/news.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/reg_map.css')}}">
    @endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $title_locale = 'title_'.$locale;
        $image_locale = 'image_'.$locale;
        $name_locale ='name_'.$locale;
        $i = 0;
    ?>

    <div class="rg_page border-top pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div>
                            <a href="/" class="text-secondary"
                                style="font-weight:500; font-size: 15px;">Главная страница</a>
                            <span class="text-secondary" style="font-weight:500">&nbsp; > &nbsp;</span>
                            <a href="{{route('simple.news')}}" class="text-secondary"
                                style="font-weight:500;  font-size: 15px;">Новости</a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
                            <div class="col-xl-12 my-3">
                                 @foreach($types as $type)
                                    <button class="btn_link_menu">{{$type->$name_locale}}</button>
                                 @endforeach
                            </div>
                            <div>
                                <div style="width: 100%; align-items: center"  class="text-center">
                                    <h3 ><b>{{$new->$title_locale}}</b></h3>
                                </div>
                                <div class="rg_main_left_img">
                                    <img src="{{asset('')}}{{$new->$image_locale}}" alt="">
                                </div>
                                <span class="card-text">

                                {!! $new->$content_locale !!}
                                </span>
                            </div>
                        </div>
                        <div class="last_news_bottom_box">
                            <h5>Последние новости</h5>
                            <div class="row border-top">
                                @foreach($others as $other)
                                <div class="col-lg-4 mt-3 last_news_bottom_card">
                                    <div>
                                        <img src="{{asset('')}}{{$other->$image_locale}}" alt="">
                                    </div>
                                    <button class="btn_link_menu mt-2">Образование</button>
                                    <h6 class="last_news_bottom_card_text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Vero tempora mollitia amet nemo reprehenderit laborum eos officia
                                    </h6>
                                    <span class="text-secondary text-end d-block"
                                        style="font-size: 13px; font-weight: 500;">28.12.2021</span>
                                </div>
                                @endforeach

                                <p class="text-end mt-2">
                                    <a href="{{route('simple.news')}}" style="font-weight: 500; color: #006523; font-size: 14px;">Все
                                        новости</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 ">
                        <div class="social_box mt-3">
                            <h5>НЕ ПРОПУСТИТЕ ВАЖНОЕ</h5>
                            <div>
                                <div class="d-flex w-100 justify-content-center ">
                                    <div class="text-center">
                                        <div><i class="fab fa-twitter"></i></div>
                                        <h6 class="m-0 p-0">21,290</h6>
                                        <span class="text-secondary font-weight-bold font-size-13">подписчиков</span>
                                    </div>
                                    <div class="text-center">
                                        <div><i class="fab fa-youtube"></i></div>
                                        <h6 class="m-0 p-0">21,290</h6>
                                        <span class="text-secondary font-weight-bold font-size-13">подписчиков</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2 justify-content-center ">
                                    <div class="text-center">
                                        <div><i class="fab fa-telegram-plane"></i></div>
                                        <h6 class="m-0 p-0">21,290</h6>
                                        <span class="text-secondary font-weight-bold font-size-13">подписчиков</span>
                                    </div>
                                    <div class="text-center">
                                        <div><i class="fab fa-facebook-f"></i></div>
                                        <h6 class="m-0 p-0">21,290</h6>
                                        <span class="text-secondary font-weight-bold font-size-13">подписчиков</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rg_anons mt-3">
                            <h5>Анонсы</h5>
                            <div>
                                @foreach($announces as $anc)
                                <div>
                                    <div>
                                        {{date('d' , strtotime($anc->date))}}<br> <br> {{$anc->get_month_short_name($locale)}}
                                    </div>
                                    <div>
                                        <a href="{{route('simple.announces.show' , ['id' => $anc->id])}}">
                                            {{$anc->$title_locale}}
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            <p class="text-end">
                                <a href="#" class="text-dark" style="font-weight: 500;">Все анонсы</a>
                            </p>
                        </div>
{{--                        <div class="rg_last_news">--}}
{{--                            <h5>Последние статье</h5>--}}
{{--                            <div>--}}
{{--                                <a href="#" style="text-decoration: none; color: black;">--}}
{{--                                    <div class="rg_news_box">--}}
{{--                                        <div class="lg_news_img_box">--}}
{{--                                            <img src="assets/img/img1.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="lg_news_text_box">--}}
{{--                                            <div> Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
{{--                                                Rerum rem odit deserunt officia minima modi, quisquam fuga,--}}
{{--                                                dignissimos dolorem commodi amet consequatur provident facere--}}
{{--                                                cupiditate voluptates esse temporibus porro earum!</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" style="text-decoration: none; color: black;">--}}
{{--                                    <div class="rg_news_box border-top">--}}
{{--                                        <div class="lg_news_img_box">--}}
{{--                                            <img src="assets/img/img1.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="lg_news_text_box">--}}
{{--                                            <div> Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
{{--                                                Rerum rem odit deserunt officia minima modi, quisquam fuga,--}}
{{--                                                dignissimos dolorem commodi amet consequatur provident facere--}}
{{--                                                cupiditate voluptates esse temporibus porro earum!</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" style="text-decoration: none; color: black;">--}}
{{--                                    <div class="rg_news_box border-top">--}}
{{--                                        <div class="lg_news_img_box">--}}
{{--                                            <img src="assets/img/img1.jpg" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="lg_news_text_box">--}}
{{--                                            <div> Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
{{--                                                Rerum rem odit deserunt officia minima modi, quisquam fuga,--}}
{{--                                                dignissimos dolorem commodi amet consequatur provident facere--}}
{{--                                                cupiditate voluptates esse temporibus porro earum!</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <p class="text-end">--}}
{{--                                <a href="#" class="text-dark" style="font-weight: 500;">Все статье</a>--}}
{{--                            </p>--}}
{{--                        </div>--}}
                        <div class="bottom_youtube_box border">
                            <div class="d-flex align-items-center">
                                <span style="font-size: 18px; font-weight: bold;">
                                    YouTube
                                </span>
                                <i class="fab fa-youtube ml-2" style="color:#FF0000; font-size: 34px;"></i>
                            </div>
                            <div class="d-flex align-items-center mt-2">
                                <div class="youtube_profile">
                                    <span class="yt_icon_check"><i class="fas fa-check"></i></span>
                                    <img src="assets/img/img1.jpg" alt="">
                                </div>
                                <div class="ml-2">
                                    <h6 class="m-0 p-0 font-weight-bold">29,290</h6>
                                    <span class="text-secondary" style="font-weight: 500;">подписчиков</span>
                                </div>
                            </div>
                            <div class="youtube_video_box">
                                <div>
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                    </iframe>
                                </div>
                                <div>
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                    </iframe>
                                </div>
                                <div>
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                    </iframe>
                                </div>
                                <div>
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
