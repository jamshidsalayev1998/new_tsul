@extends('simple.layouts.master')
@section('title')
     <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $short_info_locale = 'short_info_'.$locale;
        $students_locale = 'students_'.$locale;
    ?>
    {{$menu->$name_locale}}
    @endsection
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/faculty_and_center.css')}}">
    @endsection
@section('content')

    <div class="all_faculty mt-4 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <a href="index.html" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>
                            <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                    style="font-size:10px"></i></span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Bo`limlar')</a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 mt-3">
                        <div class="left_menu_of_page">
                            <div class="left_side_title_top">@lang('index.БЫСТРЫЕ ССЫЛКИ')</div>
                            <div>
                                @foreach($links as $link)
                                <a href="@if($link->slug) {{$link->slug}} @else # @endif"><i class="fas fa-angle-double-right text-secondary"></i>{{$link->$name_locale}}</a>
                                @endforeach

                            </div>
                            <div class="left_side_title_top mt-3">@lang('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ')</div>
                            <div class="left_social_box">
                                <a href="https://twitter.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg"
                                    class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://www.fb.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 py-2 mt-3 bg-white">
                        <h3 class="border-bottom pb-2" style="color: #233585;">@lang('index.Bo`limlar')</h3>
                        <div class="ac_item_box">
                            @foreach($data as $item)
                                @if($item->id && $item->$name_locale)
                            <a href="{{route('simple.section.show' , ['id' => $item->id , 'name' => $item->$name_locale])}}" class="all_center_items">
                                <div class="all_center_items_icon"><i class="fas fa-gavel"></i></div>
                                <div class="all_center_items_text_card">
                                    <h4><i class="fas fa-door-open"></i>{{$item->$name_locale}}</h4>
{{--                                    <h5> <i class="fas fa-user-tie"></i><span class="font-weight-bold ac_title_1">Markaz direktori:</span> sadfsdfsdgfsgsvdfbh</h5>--}}
                                    <div class="border-bottom pb-1">
                                        <span class="font-weight-bold ac_title_1"><i class="fas fa-align-center"></i>@lang('index.Bo`lim haqida'):</span>
                                        <span>
                                           {!! $item->$students_locale !!}
                                        </span>
                                    </div>
                                </div>

{{--                                @else--}}
{{--                                    fdfsd {{$item}}--}}
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
