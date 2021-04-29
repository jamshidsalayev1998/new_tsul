@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/news.css')}}">
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

    <div class="news_page border-top py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 mt-2">
                            <span class="content_top_links">
                                <a href="/">@lang('index.Главная страница')</a>
                                <span class="mx-1"> <i class="fas fa-chevron-right" style="font-size:10px"></i> </span>
                                <span>@lang('index.АНОНС МЕРОПРИЯТИЙ')</span>
                            </span>
                            <div>
                                <h4>@lang('index.АНОНС МЕРОПРИЯТИЙ')</h4>
                                <div>
                                    @foreach($types as $type)
                                    <button class="content_top_btn">{{$type->$name_locale}}</button>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mt-2">
                            <div class="content_top_social_box">
                                <div>
                                    <h5 class="content_top_title_of_socials">Не пропустите важное</h5>
                                    <div class="content_top_line_socials">
                                        <div>
                                            <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                            <h6>21,290</h6>
                                            <span>подписчиков</span>
                                        </div>
                                        <div>
                                            <i class="fab fa-facebook-f" style="color: #4267B6;"></i>
                                            <h6>21,290</h6>
                                            <span>читателей</span>
                                        </div>
                                        <div>
                                            <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                            <h6>21,290</h6>
                                            <span class="text-secondary">подписчиков</span>
                                        </div>
                                        <div>
                                            <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                            <h6>21,290</h6>
                                            <span>подписчиков</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 mt-2">
                            @foreach($data as $item)
                                @if($i<1)
                            <div class="main_news_card">
                                <div class="main_news_card_img_box">
                                    <img src="{{asset('')}}{{$item->$image_locale}}" alt="">
                                </div>
                                @if($item->type)
                                <button class="card_button_links mt-2">{{$item->type->$name_locale}}</button>
                                @endif
                                <a href="{{route('simple.announces.show' , ['id' => $item->id])}}" class="news_main_card_text">
                                    {{$item->$title_locale}}
                                </a>
                                <div class="text-end text-secondary mt-1" style="font-size: 14px; font-weight: 500;">
                                    {{date('d.m.Y' , strtotime($item->date))}}</div>
                            </div>
                                @php
                                $data->forget($i);
                                @endphp
                                    <?php $i++?>
                                @endif
                            @endforeach
                        </div>

                        <div class="col-xl-6 col-lg-12">
                            <div class="row">
                                @foreach($data as $item)
                                @if($i<5)
                                <div class="col-xl-6 col-lg-6 col-md-6   mt-2">
                                    <div class="news_small_cards">
                                        <div class="news_small_cards_img_box">
                                            <img src="{{asset('')}}{{$item->$image_locale}}" alt="">
                                        </div>
                                        <div class="px-2">
                                             @if($item->type)
                                            <button class="card_button_links mt-2">{{$item->type->$name_locale}}</button>
                                            @endif
                                            <a href="{{route('simple.announces.show' , ['id' => $item->id])}}" class="news_small_cards_text ">{{$item->$title_locale}}
                                            </a>
                                            <span class="text-end text-secondary mt-1 d-block"
                                                style="font-size: 13px; font-weight: 600;">{{date('d.m.Y' , strtotime($item->date))}}</span>
                                        </div>
                                    </div>
                                </div>
                                    @php
                                $data->forget($i);
                                @endphp
                                    <?php $i++?>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 my-4">
                            <div class="row">
                                 @foreach($data as $item)

                                <div class="col-xl-6 col-lg-6 col-md-6   mt-2">
                                    <div class="news_small_cards">
                                        <div class="news_small_cards_img_box">
                                            <img src="{{asset('')}}{{$item->$image_locale}}" alt="">
                                        </div>
                                        <div class="px-2">
                                             @if($item->type)
                                            <button class="card_button_links mt-2">{{$item->type->$name_locale}}</button>
                                            @endif
                                            <span class="news_small_cards_text ">{{$item->$title_locale}}
                                            </span>
                                            <a href="{{route('simple.announces.show' , ['id' => $item->id])}}" class="text-end text-secondary mt-1 d-block"
                                                style="font-size: 13px; font-weight: 600;">{{date('d.m.Y' , strtotime($item->date))}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="row">
                                <div class="col-xl-12 col-lg-6 my-4">
                                    <div>
                                        <h5 class="font-weight-bold">@lang('index.Новости')</h5>
                                        <hr class="bottom_line_effect">
                                        @foreach($announces as $announce)
                                        <div class="anons_in_news_card_item">
                                            <div>
                                                <span>
                                                    {{date('d' , strtotime($announce->date))}}<br />{{$announce->get_month_short_name($locale)}}
                                                </span>
                                            </div>
                                            <div>
                                                <a href="{{route('simple.news.show' , ['id' => $announce->id])}}">
                                                    {{$announce->$title_locale}}
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
