@extends('simple.layouts.master')
@section('content')
    <?php
        $locale = app()->getLocale();
        $main_rektor_word_locale = 'main_rektor_word_'.$locale;
        $short_info_locale = 'short_info_'.$locale;
        $duties_locale = 'duties_'.$locale;
        $biography_locale = 'biography_'.$locale;
        $reception_days_locale = 'reception_days_'.$locale;
        $full_name_locale = 'full_name_'.$locale;
    ?>
  <div class="rectors_page pb-5">
            <div class="rectors_page_main">
                <div>
                    <div>
                        {!! $data->$main_rektor_word_locale !!}
                    </div>
                </div>
                <div >
                    <img src="{{asset('')}}{{$data->main_image}}" alt="">
{{--                    <img src="https://storage.kun.uz/source/6/gC5S-URN34eqAzqeINO6zWUnfOeUPgWn.jpg" alt="">--}}
                    <span>
                        <h4>{{$data->$full_name_locale}}</h4>
                        <h5>@lang('index.Доктор юридических наук, профессор')</h5>
                    </span>
                </div>
            </div>
<div class="container mt-5">
    <div class="my-3 py-1"
                    style="margin: 0 auto; border-bottom: 1px solid #233585; font-size: 24px; color: #233585; font-weight: 500;">
                    @lang('index.Rektor murojati')</div>
                <div class="rp_appeal">
                    <div>
                        <div class="rp_video_materials wow fadeIn" data-wow-duration="0.2s" data-wow-delay="0.2s">
                            <div class="rp_vm_play_box rp_video-play-button">
                                <i class="fas fa-play" id="rp_vm_play_i"></i>
                                <button id="rp_vm_play"></button>
                            </div>
                            <video poster="{{asset('front_assets/assets/img/rolik.png')}}" id="rp_vm_id">
                                <source src="{{asset('front_assets/assets/tdyu3.mp4')}}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div>
                        {!! $data->$short_info_locale !!}
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="mt-3">
                    <ul class="rp_tabs">
                        <li data-tab-target="#biograpghy" class="active rp_tab">@lang('index.Biograpghy')</li>
                        <li data-tab-target="#duties_of_rector" class="rp_tab">@lang('index.Duties of the rector'):</li>
                        <li data-tab-target="#Speeches_and_publications" class="rp_tab">@lang('index.Speeches and publications')</li>
                    </ul>

                    <div class="rp_tab-content">
                        <div id="biograpghy" data-tab-content class="active rp_biograpghy">
                            {!! $data->$biography_locale !!}
                        </div>
                        <div id="duties_of_rector" data-tab-content>
                            <div>
                                {!! $data->$duties_locale !!}
                            </div>
                        </div>
                        <div id="Speeches_and_publications" data-tab-content>
                            <div class="container rp_speeches">
                                <div class="row">

                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 mt-3">
                                        <div class="rp_speeches_items">
                                            <p>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span>Lorem, ipsum dolor sit</span>
                                            </p>
                                            <span>
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                                exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                                cum
                                                exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                                officia?
                                            </span>
                                            <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
      <div class="container">
                <div class="short_card_about_rector">
                    <div>
                        <div class="rp_about_img" style="margin-left: 0 !important;">
                            <img src="{{asset('front_assets/assets/img/main_rector_old.jpg')}}" alt="" >
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="rp_contact">
                            <h3 class="font-weight-bold text-center">@lang('index.Contact Info')</h3>
                            <p>
                                <span class="font-weight-bold"><i class="fas fa-phone-square-alt mr-2"></i>@lang('index.Phone'):</span>
                                <span>{{$data->phone}}</span>
                            </p>
                            <p class="rp_contact_details_element">
                                <span class="font-weight-bold"><i class="fas fa-envelope-square mr-2"></i>@lang('index.Email'):</span>
                                <span> {{$data->email}}</span>
                            </p>
                            <p class="rp_contact_details_element">
                                <span class="font-weight-bold"><i class="fas fa-user-clock mr-2"></i>@lang('index.Время приема'):</span>
                                <span>{{$data->$reception_days_locale}}</span>
                            </p>
                            <p class="rp_contact_details_element">
                                <a href="#!" class="mr-2"><i class="fab fa-twitter-square"></i></a>
                                <a href="#!" class="mr-2"><i class="fab fa-facebook-square"></i></a>
                                <a href="#!"><i class="fab fa-linkedin"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
{{--       <div class="container">--}}
{{--                <div class="short_card_about_rector">--}}
{{--                    <div >--}}
{{--                        <div class="rp_box">--}}
{{--                                <img src="{{asset('front_assets/assets/img/main_rector_old.jpg')}}" alt="" >--}}
{{--                            <div class="rp_about_img" style="">--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <h4>Хакимов Рахим Расулжонович</h4>--}}
{{--                                <h5>--}}
{{--                                    <i> Доктор юридических наук, профессор </i>--}}
{{--                                </h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="d-flex align-items-center justify-content-center">--}}
{{--                        <div class="rp_contact">--}}
{{--                            <h3 class="font-weight-bold text-center">Contact Info</h3>--}}
{{--                            <p>--}}
{{--                                <span class="font-weight-bold"><i class="fas fa-phone-square-alt mr-2"></i>Phone:</span>--}}
{{--                                <span>{{$data->phone}}</span>--}}
{{--                            </p>--}}
{{--                            <p class="rp_contact_details_element">--}}
{{--                                <span class="font-weight-bold"><i class="fas fa-envelope-square mr-2"></i>Email:</span>--}}
{{--                                <span> {{$data->email}}</span>--}}
{{--                            </p>--}}
{{--                            <p class="rp_contact_details_element">--}}
{{--                                <span class="font-weight-bold"><i class="fas fa-user-clock mr-2"></i>Время--}}
{{--                                    приема:</span>--}}
{{--                                <span>{{$data->$reception_days_locale}}</span>--}}
{{--                            </p>--}}
{{--                            <p class="rp_contact_details_element">--}}
{{--                                <a href="#!" class="mr-2">twitter</a>--}}
{{--                                <a href="#!" class="mr-2">facebook</a>--}}
{{--                                <a href="#!">linkedin</a>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>

@endsection
