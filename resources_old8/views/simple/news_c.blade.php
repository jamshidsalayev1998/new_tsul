@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/news.css')}}">
@endsection
@section('content')
    <?php
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $title_locale = 'title_' . $locale;
    $image_locale = 'image_' . $locale;
    $name_locale = 'name_' . $locale;
    $i = 0;
    ?>

    <div class="news_page border-top py-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 mt-2">
                            <span class="content_top_links">
                                <a href="/">@lang('index.Главная страница')</a>
                                <span class="mx-1"> <i class="fas fa-chevron-right" style="font-size:10px"></i> </span>
                                <span>@lang('index.Новости')</span>
                            </span>
                    <div>
                        <h4>@lang('index.Новости')</h4>
                        <div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 mt-2">
                    <div class="content_top_social_box">
                        <div>
                            <h5 class="content_top_title_of_socials">@lang('index.НЕ ПРОПУСТИТЕ ВАЖНОЕ')</h5>
                            <div class="content_top_line_socials">
                                <div>
                                    <a href="https://t.me/tsulofficial">
                                        <i class="fab fa-telegram-plane" style="color: #03A9F5;"></i>
                                        <h6>@lang('index.tg')</h6>
                                        <span>@lang('index.подписчиков')</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.fb.com/tsulofficial">
                                        <i class="fab fa-facebook-f" style="color: #4267B6;"></i>
                                        <h6>@lang('index.fb')</h6>
                                        <span>@lang('index.подписчиков')</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://twitter.com/tsulofficial">
                                        <i class="fab fa-twitter" style="color: #03A9F5;"></i>
                                        <h6>@lang('index.tw')</h6>
                                        <span class="text-secondary">@lang('index.подписчиков')</span></a>
                                </div>
                                <div>
                                    <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg">
                                        <i class="fab fa-youtube" style="color: #FE0000;"></i>
                                        <h6>@lang('index.yb')</h6>
                                        <span>@lang('index.подписчиков')</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mt-2">
                    @foreach($data as $item)
                        @if($i<1)
                            <div class="main_news_card">
                                <div class="main_news_card_img_box text-center">
                                    <img style="width: auto!important;" src="{{asset('')}}{{$item->$image_locale}}"
                                         alt="">
                                </div>
                                <a href="{{route('simple.news.show' , ['id' => $item->id, 'slug' => $item->create_slug() , 'type' => $item->create_type_slug()])}}"
                                   class="news_main_card_text">
                                    {{$item->$title_locale}}
                                </a>
                                <div class="text-end text-secondary mt-1" style="font-size: 14px; font-weight: 500;">
                                    {{date('d.m.Y' , strtotime($item->created_at))}}</div>
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
                                            <a href="{{route('simple.news.show' , ['id' => $item->id, 'slug' => $item->create_slug() , 'type' => $item->create_type_slug()])}}"
                                               class="news_small_cards_text ">{{$item->$title_locale}}
                                            </a>
                                            <span class="text-end text-secondary mt-1 d-block"
                                                  style="font-size: 13px; font-weight: 600;">{{date('d.m.Y' , strtotime($item->created_at))}}</span>
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
                    <div class="scrolling-pagination">
                        <div class="row">
                            @foreach($data as $item)
                                <div class="col-xl-6 col-lg-6 col-md-6   mt-2">
                                    <div class="news_small_cards">
                                        <div class="news_small_cards_img_box">
                                            <img src="{{asset('')}}{{$item->$image_locale}}" alt="">
                                        </div>
                                        <div class="px-2">
                                            <button
                                                class="card_button_links mt-2">{{$item->type->$name_locale}}</button>
                                            <span class="news_small_cards_text "><a
                                                    href="{{route('simple.news.show' , ['id' => $item->id, 'slug' => $item->create_slug() , 'type' => $item->create_type_slug()])}}"
                                                    style="">{{$item->$title_locale}}</a>
                                                </span>
                                            <a href="{{route('simple.news.show' , ['id' => $item->id, 'slug' => $item->create_slug() , 'type' => $item->create_type_slug()])}}"
                                               class="text-end text-secondary mt-1 d-block"
                                                   style="font-size: 13px; font-weight: 600;">{{date('d.m.Y' , strtotime($item->created_at))}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="news-ul-div">
                                {{ $data->links() }}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 my-4">
                            <div>
                                <h5 class="font-weight-bold">ОБЪЯВЛЕНИЕ</h5>
                                <hr class="bottom_line_effect">
                                <div class="scrolling-pagination-announces">
                                @foreach($announces as $announce)
                                    <div class="anons_in_news_card_item">
                                        <div>
                                                <span>
                                                    {{date('d' , strtotime($announce->date))}}<br/>{{$announce->get_month_short_name($locale)}}
                                                </span>
                                        </div>
                                        <div>
                                            <a href="{{route('simple.announces.show' , ['id' => $item->id])}}">
                                                {{$announce->$title_locale}}
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                                    <div class="announces-ul-div">
                                        {{ $announces->links() }}

                                    </div>

                                </div>
                            </div>
                        </div>
                        {{--                                <div class="col-xl-6 col-lg-6 my-4">--}}
                        {{--                                    <div>--}}
                        {{--                                        <h5 class="font-weight-bold">Последние статьи</h5>--}}
                        {{--                                        <hr class="bottom_line_effect">--}}
                        {{--                                        <div class="last_news_card_item">--}}
                        {{--                                            <div>--}}
                        {{--                                                <img src="assets/img/img1.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div>--}}
                        {{--                                                <span class="d-block font-weight-bold">Alisher Abdullayev</span>--}}
                        {{--                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque,--}}
                        {{--                                                illum possimus reiciendis sunt sed aut ab provident. Sed iste qui--}}
                        {{--                                                voluptatem in. Veritatis culpa dolorem maiores ab illum deserunt ipsum.--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="last_news_card_item">--}}
                        {{--                                            <div>--}}
                        {{--                                                <img src="assets/img/img1.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div>--}}
                        {{--                                                <span class="d-block font-weight-bold">Alisher Abdullayev</span>--}}
                        {{--                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque,--}}
                        {{--                                                illum possimus reiciendis sunt sed aut ab provident. Sed iste qui--}}
                        {{--                                                voluptatem in. Veritatis culpa dolorem maiores ab illum deserunt ipsum.--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="last_news_card_item">--}}
                        {{--                                            <div>--}}
                        {{--                                                <img src="assets/img/img1.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div>--}}
                        {{--                                                <span class="d-block font-weight-bold">Alisher Abdullayev</span>--}}
                        {{--                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque,--}}
                        {{--                                                illum possimus reiciendis sunt sed aut ab provident. Sed iste qui--}}
                        {{--                                                voluptatem in. Veritatis culpa dolorem maiores ab illum deserunt ipsum.--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="last_news_card_item">--}}
                        {{--                                            <div>--}}
                        {{--                                                <img src="assets/img/img1.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div>--}}
                        {{--                                                <span class="d-block font-weight-bold">Alisher Abdullayev</span>--}}
                        {{--                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque,--}}
                        {{--                                                illum possimus reiciendis sunt sed aut ab provident. Sed iste qui--}}
                        {{--                                                voluptatem in. Veritatis culpa dolorem maiores ab illum deserunt ipsum.--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="last_news_card_item">--}}
                        {{--                                            <div>--}}
                        {{--                                                <img src="assets/img/img1.jpg" alt="">--}}
                        {{--                                            </div>--}}
                        {{--                                            <div>--}}
                        {{--                                                <span class="d-block font-weight-bold">Alisher Abdullayev</span>--}}
                        {{--                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque,--}}
                        {{--                                                illum possimus reiciendis sunt sed aut ab provident. Sed iste qui--}}
                        {{--                                                voluptatem in. Veritatis culpa dolorem maiores ab illum deserunt ipsum.--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <script>
        $('.news-ul-div ul.pagination').hide();
        // $('.announces-ul-div ul.pagination').hide();

        $(function () {
            $('.scrolling-pagination').jscroll({
                autoTrigger: true,
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.scrolling-pagination',
                callback: function () {
                    $('.news-ul-div ul.pagination').remove();
                }
            });
            // $('.scrolling-pagination-announces').jscroll({
            //     autoTrigger: true,
            //     padding: 0,
            //     nextSelector: '.pagination li.active + li a',
            //     contentSelector: 'div.scrolling-pagination-announces',
            //     callback: function () {
            //         $('.announces-ul-div ul.pagination').remove();
            //     }
            // });
        });

    </script>
@endsection
