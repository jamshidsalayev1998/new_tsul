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
                            style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">Главная
                            страница</a>
                        <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                style="font-size:10px"></i></span>
                        <a href="/rektorat" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">Ректорат</a>
                        <span class="text-secondary" style="font-weight:500">&nbsp; <i class="fas fa-arrows-alt-h"></i>
                            &nbsp;</span>
                        <a href="#" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">{{$data->$full_name_locale}}</a>
                    </div>
                    <div class="col-md-3 mt-3">
                        <div class="left_menu_of_page">
                            <div class="left_side_title_top">БЫСТРЫЕ ССЫЛКИ</div>
                            <div>
                                @foreach($links as $link)
                                <a href="{{route('simple.rektorat.show' , ['id' => $link->id])}}"><i class="fas fa-angle-double-right text-secondary"></i>{{$link->$type_name_locale}}</a>
                                @endforeach
                            </div>
                            <div class="left_side_title_top mt-3">НЕ ПРОПУСТИТЕ ВАЖНОЕ</div>
                            <div class="left_social_box">
                                <a href="https://twitter.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">подписчиков</span>
                                </a>
                                <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg"
                                    class="left_social_box_items" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">подписчиков</span>
                                </a>
                                <a href="https://t.me/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">подписчиков</span>
                                </a>
                                <a href="https://www.fb.com/tsulofficial" class="left_social_box_items" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-facebook-f" style="color: #4267B8;"></i>
                                    <span style="font-size: 13px; font-weight: bold;">21.290</span>
                                    <span class="font-weight-bold"
                                        style="font-size: 13px; color: grey;">подписчиков</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 img-info mt-3">
                        <div class="col-md-12 contact">
                            <div class="col-md-4 img-card">
                                <img src="{{asset('')}}{{$data->image}}" alt="network error!">
                            </div>
                            <div class="col-md-8 contact-info">
                                <h3>Контакт</h3>
                                <h5>Щелкните по нему, чтобы скопировать данные</h5>
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
                            <button>назад</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
