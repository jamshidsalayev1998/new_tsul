@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/faculty_and_center.css')}}">
    @endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $students_locale = 'students_'.$locale;
        $teachers_locale = 'teachers_'.$locale;
        $directions_locale = 'directions_'.$locale;
        $type_name_locale = 'type_name_'.$locale;
        $full_name_locale = 'full_name_'.$locale;
        $address_locale = 'address_'.$locale;
        $reception_locale = 'reception_days_'.$locale;
        $scientific_activity_locale = 'scientific_activity_'.$locale;
        $lessons_locale = 'lessons_'.$locale;
        $professional_development_locale = 'professional_development_'.$locale;
        $labor_activity_locale = 'labor_activity_'.$locale;
    ?>
      <div class="faculty_and_center py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <a href="index.html" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">Главная
                                страница</a>
                            <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                    style="font-size:10px"></i></span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">Факултеты</a>
                            <span class="text-secondary" style="font-weight:500">&nbsp; <i
                                    class="fas fa-arrows-alt-h"></i>
                                &nbsp;</span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">О
                                физико-математическом факультете</a>
                        </div>
                    </div>
                    <div class="col-xl-3 mt-3">
                        <div class="left_menu_of_page">
                            <div class="left_side_title_top">БЫСТРЫЕ ССЫЛКИ</div>
                            <div>
                                @foreach($other_faculties as $other)
                                <a href="{{route('simple.faculty.show' , ['id' => $other->id , 'name' => $other->$name_locale])}}"><i class="fas fa-angle-double-right text-secondary"></i>{{$other->$name_locale}}</a>
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
                    <div class="col-xl-9 mt-3">
                        <div>
                            @foreach($data->administrations as $ad)
                            <div class="about_fc_card border mt-2">
                                <div>
                                    @if($ad->image)
                                    <img src="{{asset('')}}{{$ad->image}}" alt="">
                                        @else
                                    <img src="{{asset('images/alone/logo_main.png')}}" alt="">
                                    @endif
                                </div>
                                <div class="about_fc_card_text_box">
                                    <div>
                                        <i class="fas fa-user mr-1"></i>
                                        <b class="font-weight-bold" style="font-size: 16px;">{{$ad->$type_name_locale}}:</b>
                                        <span><span class="font-weight-bold">{{$ad->$full_name_locale}}</span><br /></span>
                                    </div>
                                    <div>
                                        <i class="fas fa-map-marked-alt mr-1"></i>
                                        <b>Manzil: </b>
                                        <span> {{$ad->$address_locale}}</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-phone-square-alt mr-1"></i>
                                        <b>Telefon: </b>
                                        <span> {{$ad->phone}}</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-fax mr-1"></i>
                                        <b>Faks: </b>
                                        <span> {{$ad->faks}}</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-envelope-square mr-1"></i>
                                        <b>Elektron pochta: </b>
                                        <span>{{$ad->email}}</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-clock mr-1"></i>
                                        <b>Qabul kunlari: </b>
                                        <span> {{$ad->$reception_locale}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="about_main_person mt-3">
                                <section id="content_accordion">

                                    <div id="accordion" class="accordion-container">
                                        <article class="content-entry">
                                            <h4 class="article-title"><i></i>Mehnat faoliyati</h4>
                                            <div class="accordion-content">
                                                {!! $ad->$labor_activity_locale !!}
                                            </div>
                                            <!--/.accordion-content-->
                                        </article>

                                        <article class="content-entry">
                                            <h4 class="article-title"><i></i>Malaka oshirish</h4>
                                            <div class="accordion-content">
                                                {!! $ad->$professional_development_locale !!}
                                            </div>
                                            <!--/.accordion-content-->
                                        </article>

                                        <article class="content-entry">
                                            <h4 class="article-title"><i></i>O`qitadigan fanlari (so`ngi uch o`quv
                                                yilida)</h4>
                                            <div class="accordion-content">
                                                {!! $ad->$lessons_locale !!}
                                            </div>
                                            <!--/.accordion-content-->
                                        </article>

                                        <article class="content-entry">
                                            <h4 class="article-title"><i></i>Ilmiy faoliyati</h4>
                                            <div class="accordion-content">
                                                {!! $ad->$scientific_activity_locale !!}
                                            </div>
                                            <!--/.accordion-content-->
                                        </article>

                                    </div>
                                    <!--/#accordion-->


                                </section>
                                <!--/#content-->
                            </div>
                            @endforeach
                              <div class="mt-3">
                                <ul class="fc_tabs">
                                    <li data-tab-target="#students" class="active fc_tab">Talabalar</li>
                                    <li data-tab-target="#teachers" class="fc_tab">O'qituvchilar</li>
                                    <li data-tab-target="#about" class="fc_tab">Yo'nalishlar</li>
                                </ul>

                                <div class="fc_tab-content">
                                    <div id="students" data-tab-content class="active m-5">
                                        {!! $data->$students_locale !!}
                                    </div>
                                    <div id="teachers" data-tab-content class="m-5">
                                        {!! $data->$teachers_locale !!}
                                    </div>
                                    <div id="about" data-tab-content class="m-5">
                                        {!! $data->$directions_locale !!}
                                    </div>


                                </div>
                            </div>
                            <div class="header_fc_content">
                                <h5 class="border-bottom pb-2">{{$data->$name_locale}}</h5>
                                {!! $data->$content_locale !!}
                            </div>

{{--                            <span class="text-secondary d-block mt-4"--}}
{{--                                style="font-weight: 500; font-size: 17px;">Fakultet ma'muryati</span>--}}


{{--                            <h5 class="text-center mt-4 text-secondary" style="font-size: 30px;">Fakultet--}}
{{--                                kafedralari</h5>--}}
{{--                            <div class="faculty_and_centers_list">--}}
{{--                                <div class="card mt-2">--}}
{{--                                    <i class="fas fa-mail-bulk"></i>--}}
{{--                                    <span>"Fizika" kafedrasi</span>--}}
{{--                                </div>--}}
{{--                                <div class="card mt-2">--}}
{{--                                    <i class="fas fa-mail-bulk"></i>--}}
{{--                                    <span>"Matematika" kafedrasi</span>--}}
{{--                                </div>--}}
{{--                                <div class="card mt-2">--}}
{{--                                    <i class="fas fa-mail-bulk"></i>--}}
{{--                                    <span>"Axborot texnologiyalari" kafedrasi</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}




                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
