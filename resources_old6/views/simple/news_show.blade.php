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
        $short_info_locale ='short_info_'.$locale;
        $logo_locale = 'front_assets/assets/img/logo_university/_TDYU_'.$locale.'_white_primary.png';
        $i = 0;
    ?>
    <style>
        .ck-media__wrapper div iframe{
            position: relative !important;
            min-width: 50vw !important;
            height: 50vh !important;
        }
        .ck-widget {
            justify-content: center !important;
        }
    </style>
    <div class="rg_page border-top pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div>
                            <a href="/" class="text-secondary"
                                style="font-weight:500; font-size: 15px;">@lang('index.Главная страница')</a>
                            <span class="text-secondary" style="font-weight:500">&nbsp; > &nbsp;</span>
                            <a href="{{route('simple.news')}}" class="text-secondary"
                                style="font-weight:500;  font-size: 15px;">@lang('index.Новости')</a>
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
                            <div class="row border-top">
                                @foreach($others as $other)
                                <div class="col-lg-4 mt-3 last_news_bottom_card">
                                    <a href="{{route('simple.news.show' , ['id' => $other->id, 'slug' => $other->create_slug() , 'type' => $other->create_type_slug()])}}">
                                    <div class="text-center">
                                        <img style="width: auto!important;" src="{{asset('')}}{{$other->$image_locale}}" alt="">
                                    </div>
                                    <button class="btn_link_menu mt-2">{{$other->type?$other->type->$name_locale:''}}</button>
                                    <h6 class="last_news_bottom_card_text mt-2">
                                        {{$other->$short_info_locale}}
                                    </h6>
                                    <span class="text-secondary text-end d-block" style="font-size: 13px; font-weight: 500;">28.12.2021</span>
                                    </a>
                                </div>
                                @endforeach

                                <p class="text-end mt-2">
                                    <a href="{{route('simple.news')}}" style="font-weight: 500; color: #006523; font-size: 14px;">@lang('index.Все новости')</a>
                                </p>
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
                                <a href="#" class="text-dark" style="font-weight: 500;">@lang('index.Все анонсы')</a>
                            </p>
                        </div>

                        @include('simple.includes.youtube_box')
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('title')
{{$new->$title_locale}}
@endsection
