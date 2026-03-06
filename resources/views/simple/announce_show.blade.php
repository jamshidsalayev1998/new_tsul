@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/news.css')}}">
    <link rel="stylesheet" href="{{asset('front_assets/css/reg_map.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection
@section('content')
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
                                style="font-weight:500; font-size: 15px;">@lang('index.Главная страница')</a>
                            <span class="text-secondary" style="font-weight:500">&nbsp; > &nbsp;</span>
                            <a href="{{route('simple.news')}}" class="text-secondary"
                                style="font-weight:500;  font-size: 15px;">@lang('index.АНОНС МЕРОПРИЯТИЙ')</a>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="row">
{{--                            <div class="col-xl-12 my-3">--}}
{{--                                 @foreach($types as $type)--}}
{{--                                    <button class="btn_link_menu">{{$type->$name_locale}}</button>--}}
{{--                                 @endforeach--}}
{{--                            </div>--}}
                            <div>
                                <div style="width: 100%; align-items: center"  class="text-center">
                                    <h3 ><b>{{$new->$title_locale}}</b></h3>
                                </div>
                                <div class="rg_main_left_img text-center">
                                    <img style="width: auto!important;" src="{{asset('')}}{{$new->$image_locale}}" alt="">
                                </div>
                                <span class="card-text">

                                {!! $new->$content_locale !!}
                                </span>
                            </div>
                        </div>
                        <div class="last_news_bottom_box">
                            <h5>@lang('index.Последние новости')</h5>
                            <div id="announces-data" class="row border-top ">
                              @include('simple.announce_show_scroll')
                                <p class="text-end mt-2">
                                    <a href="{{route('simple.news')}}" style="font-weight: 500; color: #006523; font-size: 14px;">@lang('index.Все новости')</a>
                                </p>
                            </div>
                            <div class="ajax-load text-center p-3" style="display:none">
                                <p><img src="{{asset('images/ajax-loader.gif')}}">Load More Post...</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 ">
                        <div class="social_box mt-3">
                            <h5>@lang('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ')</h5>
                            <div class="left_social_box">
                                <a href="https://twitter.com/tsulofficial" class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                    <span class="card-text" style="font-size: 13px; font-weight: bold;">@lang('index.tw')</span>
                                    <span class="font-weight-bold" style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg" class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                    <span class="card-text" style="font-size: 13px; font-weight: bold;">@lang('index.yb')</span>
                                    <span class="font-weight-bold" style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                    <span class="card-text" style="font-size: 13px; font-weight: bold;">@lang('index.tg')</span>
                                    <span class="font-weight-bold" style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://www.fb.com/tsulofficial" class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
                                    <span class="card-text" style="font-size: 13px; font-weight: bold;">@lang('index.fb')</span>
                                    <span class="font-weight-bold" style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>

                            </div>
                        </div>
                        <div class="rg_anons mt-3">
                            <h5>@lang('index.Анонсы')</h5>
                            <div id="news-data">
                                @include('simple.announce_show_news_scroll')
                            </div>
                            <p class="text-end">
                                <a href="{{route('simple.announces')}}" class="text-dark" style="font-weight: 500;">@lang('index.Все анонсы')</a>
                            </p>
                        </div>

                        @include('simple.includes.youtube_box')
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
@endsection
