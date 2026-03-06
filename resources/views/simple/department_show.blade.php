@extends('simple.layouts.master')
@section('title')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
    {{$data->$name_locale}}
@endsection
@section('content')


    <div class="general">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 mt-3">
                        <div class="left_menu_of_page">
                            <div class="left_side_title_top">@lang('index.БЫСТРЫЕ ССЫЛКИ')</div>
                            <div>
                                @foreach($other_faculties as $other)
                                <a href="{{route('simple.department.show' , ['id' => $other->id , 'name' => $other->$name_locale])}}"><i class="fas fa-angle-double-right text-secondary"></i>{{$other->$name_locale}}</a>
                                @endforeach
                            </div>
                            <div class="left_side_title_top mt-3">@lang('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ')</div>
                            <div class="left_social_box">
                                <a href="https://twitter.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">@lang('index.tw')</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg"
                                    class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">@lang('index.yb')</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">@lang('index.tg')</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                                <a href="https://www.fb.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">@lang('index.fb')</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">@lang('index.подписчиков')</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 mt-3">
                        <div class="general_content">
                             {!! $data->$content_locale !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
