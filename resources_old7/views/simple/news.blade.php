@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/news.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    @foreach($news as $item)
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
                                $news->forget($i);
                            @endphp
                            <?php $i++?>
                        @endif
                    @endforeach
                </div>

                <div class="col-xl-6 col-lg-12">
                    <div class="row">
                        @foreach($news as $item)
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
                                    $news->forget($i);
                                @endphp
                                <?php $i++?>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 my-4">
                    <div class="row">
                        <div class="row" id="news-data">
                            @include('simple.news_scroll')
                        </div>
                        <div class="ajax-load text-center p-3" style="display:none">
                            <p><img src="{{asset('images/ajax-loader.gif')}}">Load More Post...</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 my-4">
                            <div>
                                <h5 class="font-weight-bold">ОБЪЯВЛЕНИЕ</h5>
                                <hr class="bottom_line_effect">
                                <div id="announces-data">
                                    @include('simple.news_announces_scroll')
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
                        $('.ajax-load').html("No more Newss Found!");
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
