@extends('simple.layouts.master')
@section('links')
<link rel="stylesheet" href="{{asset('front_assets/css/rectorate/rectorate.css')}}">
    @endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $full_name_locale = 'full_name_'.$locale;
        $content_locale = 'content_'.$locale;
        $address_locale = 'address_'.$locale;
        $type_name_locale = 'type_name_'.$locale;
    ?>
    <div class="rectorate">
            <div class="container">
                <div class="row">
                    <div>
                        <a href="/" class="text-secondary"
                            style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('indeex.Главная страница')</a>
                        <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                style="font-size:10px"></i></span>
                        <a href="/rektorat" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Проректоры')</a>
                        <span class="text-secondary" style="font-weight:500">&nbsp; <i class="fas fa-arrows-alt-h"></i>
                            &nbsp;</span>
                        <a href="#" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">{{$data->$full_name_locale}}</a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="left_menu_of_page">
                            <div class="left_side_title_top">@lang('index.БЫСТРЫЕ ССЫЛКИ')</div>
                            <div>
                                @foreach($links as $link)
                                <a href="{{route('simple.rektorat.show' , ['id' => $link->id])}}"><i class="fas fa-angle-double-right text-secondary"></i>{{$link->$type_name_locale}}</a>
                                @endforeach
                            </div>
                            @include('simple.includes.socials_box')
                        </div>
                    </div>
                    <div class="col-md-9 img-info mt-3">
                        <div class="col-md-12 contact">
                            <div class="col-md-4 img-card">
                                <img src="{{asset('')}}{{$data->image}}" alt="network error!">
                            </div>
                            <div class="col-md-8 contact-info">
                                <h3>@lang('index.Контакт')</h3>
                                <a href="tel: (+99871) 233-66-36" id="cp_btn"><i class="fas fa-mobile-alt"><span
                                            id="pwd_spn" class="ml-3"> {{$data->phone1}}</span></i></a>
                                <br>
                                <a href="tel: (+998 71) 233-42-09" id="cp_btn2"><i class="fas fa-mobile-alt"><span
                                            id="pwd_spn2" class="ml-3">{{$data->phone2}}</span></i></a>
                                <br>
                                <a href="tel: (+998 71) 233-37-48" id="cp_btn3"><i class="fas fa-fax"><span
                                            id="pwd_spn3" class="ml-3">{{$data->phone3}}</span></i></a>
                                <br>
                                <a href="mailto:info.tsul@.com" id="cp_btn4"><i class="fas fa-envelope"><span
                                            id="pwd_spn4" class="ml-3">{{$data->email}}</span></i></a>
                                <br>
                                <a
                                    href="https://yandex.uz/maps/10335/tashkent/?from=api-maps&ll=69.202046%2C41.280734&mode=usermaps&origin=jsapi_2_1_78&um=constructor%3Aff74afcb8a7194150c0d50941943a50329548f652033ca20bb5ab6dc1a80a85f&z=11"><i class="fas fa-map-marker-alt"></i>  <span style="font-size: 16px; font-weight: 600;">{{$data->$address_locale}}</span></a>
                            </div>
                        </div>
                        <div class="col-md-12 more-info">
                            <h2>{{$data->$full_name_locale}}</h2>
                            <br>
                            {!! $data->$content_locale !!}
                            <br>
                            <button class="allow-href" data-href="{{route('simple.rektorat.index')}}">@lang('index.назад')</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
