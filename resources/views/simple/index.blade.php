@extends('simple.layouts.master')
@section('content')
    <?php
        $locale = app()->getLocale();
        $text_locale = 'text_'.$locale;
        $name_locale = 'name_'.$locale;
        $image_locale = 'image_'.$locale;
        $title_locale = 'title_'.$locale;
        $short_info_locale = 'short_info_'.$locale;
        $content_locale = 'content_'.$locale;
        $news = 'App\Neww'::orderBy('date' , 'DESC')->get();
        $announces = 'App\Announce'::where('event' , 0)->orderBy('id' , 'DESC')->get();
        $announces_event = 'App\Announce'::where('event' , 1)->orderBy('date' , 'DESC')->take(4)->get();
        $sep = 'App\SeperatelyOneNew'::where('status' , 1)->orderBy('id' , 'DESC')->first();
        $men = 'App\Menu'::where('id' , 58)->first();
        $sll = str_replace('/general-page/' , '' , $men->slug);
        $slug = 'App\Page'::where('slug' , $sll)->first();
        $scientist_news = 'App\YoungScientistsNew'::where('status' , 1)->orderBy('id' , 'DESC')->get();
        $scientist_articles = 'App\ScientificArticle'::where('status' , 1)->orderBy('id' , 'DESC')->get();

    ?>
{{--<!--                    --><?php print_r($slug); die();?>--}}
            <div class="main_content ">
            <div class="main_content_text_box">
                <div>
                    <div>
                        <span>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@tsul.uz" class="text-white ">{{$slider_texts->email}} </a>
                        </span>
                        <span>
                            <i class="fas fa-phone-alt"></i>
                            {{$slider_texts->phone}}
                        </span>
                    </div>
                    <div class="card-text" style="color: white !important;">
                        {!! $slider_texts->$text_locale !!}
                        <a href="/about-university" class="mc_button">@lang('index.подробнее') <i class="fas fa-arrow-right ml-2"
                                style="font-size: 14px;"></i></a>
                        <div class="owl-dots">
                            <button role="button" class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot active"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button>
                        </div>
                    </div>
                    <div>
                        <div class="customNextBtn"><i class="fas fa-chevron-left"></i></div>
                        <div class="customPreviousBtn"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            <div id="owl-demo" class="owl-carousel">
                @foreach($slider_images as $image)
                    <div class="item">
                        <img class="lazyOwl" src="{{asset('/')}}{{$image->image_uz}}" alt="Lazy Owl Image">
                    </div>
                @endforeach

            </div>
        </div>

        <section class="main_menus_bottom">
            <div class="main_menus_box d-flex">
                @foreach($system_cards as $card)
                    <a href="{{$card->link}}" class="menu_icon_items card-text">
                       {!! $card->icon !!}
                        <h5>{{$card->$name_locale}}</h5>
                    </a>

                @endforeach
            </div>
        </section>


        <section class="bg-white py-3 mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="header_for_part my-2  wow fadeInDown" data-wow-duration="0.4s"
                            data-wow-delay="0.2s">

                            @lang('index.ВИДЕОМАТЕРИАЛЫ')
                        </div>

                        <div class="video_materials wow fadeIn" data-wow-duration="0.2s" data-wow-delay="0.2s">
                            <div class="vm_play_box video-play-button">
                                <i class="fas fa-play" id="vm_play_i"></i>
                                <button id="vm_play"></button>
                            </div>
                            <video poster="{{asset('front_assets/assets/img/rolik.png')}}" id="vm_id">
                                <source src="{{asset('front_assets/assets/tdyu2.mp4')}}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                            <div class="more_links_to_pages d-flex justify-content-end">
                                <a href="/all-videos">@lang('index.Все видео') <i
                                        class="fas fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 third_right_part_mt">
                        <div class="header_for_part my-2 wow fadeInDown" data-wow-duration="0.4s" data-wow-delay="0.2s">

                            <div>@lang('index.АНОНС МЕРОПРИЯТИЙ')</div>
                        </div>
                        <div class="row">
                            <?php
                            $an_id = 0;
                            ?>
                            @foreach($announces_event as $announce)
                            <div class="col-xl-6 mt-3">
                                <a href="{{route('simple.announces.show' , ['id' => $announce->id])}}" class="main_anons_items wow fadeInRight" data-wow-duration="0.2s"
                                    data-wow-delay="0.2s">
                                    <div class="main_anons_image_box">
                                        <img src="{{asset('')}}{{$announce->$image_locale}}" alt="image not found">
                                    </div>
                                    <div class="main_anons_text_box">
                                        <span>{{date('d.m.Y' , strtotime($announce->date))}}</span>
                                        <span class="card-text">
                                            {{$announce->$short_info_locale}}
                                        </span>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            <div class="more_links_to_pages d-flex justify-content-end mt-2">
                                <a href="{{route('simple.announces')}}"> @lang('index.Все анонсы') <i class="fas fa-arrow-circle-right ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    @if($slug)
                    <div class="col-xl-3">
                        <div class="rectors_card_appeal">
                            <h5> Rektor murojaati</h5>
                            <div class="rectors_card_appeal_img">
                                <img src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="">
                            </div>
                            <div class="rectors_card_text">
                                <span>
                                    <i> {!! $slug->$content_locale !!}</i>
                                </span>
                                <a href="/general-page/privetstvie-rektora">
                                    Read more <i class="fas fa-arrow-right ml-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-xl-9">
                        <div class="tab_news">
                            <button class="tablinks active font-weight-bold"
                                onclick="openCity(event, 'news')">@lang('index.Новости')</button>
                            <button class="tablinks font-weight-bold"
                                onclick="openCity(event, 'ads')">@lang('index.Объявления')</button>
                        </div>

                        <div id="news" class="tabcontent_news" style="display: block;">
                            <div class="news_card_box">
                                <div class="owl-carousel owl-theme" id="news_carousel">

                                    @foreach($news as $neww)
                                    <div class="news_items">
                                        <div class="news_card_image">
                                            <img src="{{asset('')}}{{$neww->$image_locale}}" alt="">
                                        </div>
                                        <div class="news_card_text">
                                            <span>{{$neww->type->$name_locale}} / {{$neww->date}}</span>
                                            <span class="card-text">
                                                @if($neww->$short_info_locale)
                                                    {{$neww->$short_info_locale}}
                                                    @else
                                                    {{$neww->$title_locale}}
                                                 @endif
                                            </span>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>
                                <div class="more_links_to_pages d-flex justify-content-end" style="margin-top: 0px;">
                                    <a href="{{route('simple.news')}}">@lang('index.Все новости') <i class="fas fa-arrow-circle-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div id="ads" class="tabcontent_news">
                            <div class="news_card_box">
                                <div class="owl-carousel owl-theme" id="ads_carousel">
                                    @foreach($announces as $ann)
                                    <div class="news_items">
                                        <div class="news_card_image">
                                            <img src="{{asset('')}}{{$ann->$image_locale}}" alt="">
                                            <!-- <span>наука</span> -->
                                        </div>
                                        <div class="news_card_text">
                                            <span>{{date('d.m.Y' , strtotime($ann->date))}}</span>
                                            <span>
                                                @if($ann->$short_info_locale)
                                                    {{$ann->$short_info_locale}}
                                                @else
                                                    {{$ann->$title_locale}}

                                                 @endif
                                            </span>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                                <div class="more_links_to_pages d-flex justify-content-end" style="margin-top: 0px;">
                                    <a href="{{route('simple.news')}}">@lang('index.Все новости') <i class="fas fa-arrow-circle-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    <section class="life_university">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <span class="life_university_icon"><i class="far fa-check-circle"></i></span>
                    </div>

                    <div class="col-xl-8">
                        <div class="life_univ_box">
                            <h1>{{$sep->$title_locale}}</h1>
                            <p>
                                {{$sep->$content_locale}}
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    <section class="scientific_chapter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <h5 class="scientific_articles_title">
                            @lang('index.Научные статьи')
                        </h5>
                        <div class="scientific_article_box">


                            @foreach($scientist_articles as $sc_art)
                                <div class="scientific_articles_items">
                                <span>
                                    <div style="font-size: 20px;">20</div>
                                    <div style="font-size: 14px;">Апр</div>
                                </span>
                                <span>
                                    <span class="d-block text-secondary"><i class="fas fa-clock"></i> {{$sc_art->date}}</span>
                                    <span>
                                       @if($sc_art->$short_info_locale)
                                                {{$sc_art->$short_info_locale}}
                                            @endif
                                    </span>
                                </span>
                            </div>
                            @endforeach


                            <div class="articles_box_shadow">

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div>
                            <h5 class="scientific_persons_card_title">@lang('index.Молодые ученые')
                            </h5>
                        </div>
                        <div class="scientific_card_box">
                            <div class="owl-carousel owl-theme" id="scientific_carousel">
                                @foreach($scientist_news as $sc)
                                <div class="scientific_items">
                                    <div class="scientific_card_image">
                                        <img src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="">
                                    </div>
                                    <div class="scientific_card_text">
                                        <span>
                                            @if($sc->$title_locale)
                                                {{$sc->$title_locale}}
                                            @endif
                                        </span>
                                        <span>
                                           @if($sc->$short_info_locale)
                                                {{$sc->$short_info_locale}}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div
                            style="box-shadow:0 0 10px 0 rgba(0, 0, 0, 0.2); padding: 10px; border-radius: 6px;  margin-top: 80px; text-align: center;">
                            <i>
                                @lang('index.With world-class faculty, groundbreaking research opportunities, and a diverse group of
                                talented students, Tsul is more than just a place to get an education.')
                            </i>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="sixth-part">
            <div class="container">
                <div class="header_for_part mt-2">

                    <div>@lang('index.УНИВЕРСИТЕТ В ЦИФРАХ')</div>
                </div>
            </div>
            <div class=" bg-white" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
                <div class="container">

                    <div class="row px-4">
                        <div class="col-xl-3 col-md-6 cb_6 p-0">
                            <div class="card_box_6 text-center">
                                <div>
                                    <div><i class="fas fa-user-graduate"></i></div>
                                    <h5>@lang('index.КОЛИЧЕСТВО СТУДЕНТОВ')</h5>
                                    <h3>4703</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 cb_6 p-0">
                            <div class="card_box_6 text-center">
                                <div>
                                    <div><i class="fas fa-chalkboard-teacher"></i></div>
                                    <h5>@lang('index.КОЛИЧЕСТВО СОТРУДНИКОВ')</h5>
                                    <h3>329</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 cb_6 p-0">
                            <div class="card_box_6 text-center">
                                <div>
                                    <div><i class="fas fa-user-tag"></i></div>
                                    <h5>@lang('index.КОЛИЧЕСТВО УЧИТЕЛЕЙ')</h5>
                                    <h3>333</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 cb_6 p-0">
                            <div class="card_box_6 text-center">
                                <div>
                                    <div><i class="fas fa-users"></i></div>
                                    <h5>@lang('index.КОЛИЧЕСТВО ВЫПУСКНИКОВ')</h5>
                                    <h3>19894</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="seventh-part w-100 my-5">
            <div class="container">
                <div id="owl-demo" class="owl-carousel owl-theme cb_7">
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="{{asset('front_assets/assets/img/lex.png')}}" alt="">
                        </div>
                        <span class="link_to_site">
                            <a href="https://lex.uz" target="_blank">lex.uz</a>
                        </span>

                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="{{asset('front_assets/assets/img/datagovuz.png')}}" alt="">
                        </div>
                        <span class="link_to_site">
                            <a href="https://data.gov.uz" target="_blank">data.gov.uz</a>
                        </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="{{asset('front_assets/assets/img/gerb1.png')}}" alt="">
                        </div>
                        <span class="link_to_site">
                            <a href="https://www.gov.uz" target="_blank">gov.uz</a>
                        </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="{{asset('front_assets/assets/img/uzeduuz.png')}}" alt="">
                        </div>
                        <span class="link_to_site">
                            <a href="http://uzedu.uz/" target="_blank" rel="noopener noreferrer">uzedu.uz</a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
@endsection

@section('js')
    <script>
        $('.vse_novosti').click(function(){
            window.location.href = $(this).attr('data-href');
        });
    </script>
@endsection
