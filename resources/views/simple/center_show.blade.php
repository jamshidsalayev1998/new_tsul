@extends('simple.layouts.master')
@section('title')
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
    {{$data->$name_locale}}
    @endsection
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/faculty_and_center.css')}}">
    @endsection
@section('content')

  <div class="faculty_and_center py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <a href="index.html" class="text-secondary"
                                    style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>
                                <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                        style="font-size:10px"></i></span>
                                <a href="{{$menu->slug}}" class="text-secondary"
                                    style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">{{$menu->$name_locale}}</a>
                                <span class="text-secondary" style="font-weight:500">&nbsp; <i
                                        class="fas fa-arrows-alt-h"></i>
                                    &nbsp;</span>
                                <a href="#" class="text-secondary"
                                    style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">О
                                    Центр электроннго университета</a>
                            </div>
                        </div>
                        <div class="col-xl-3 mt-3">
                            <div class="left_menu_of_page">
                                <div class="left_side_title_top">БЫСТРЫЕ ССЫЛКИ</div>
                                <div>
                                    @foreach($other_centers as $link)
                                    <a href="{{route('simple.center.show' , ['id' => $link->id , 'name' => $link->$name_locale])}}"><i class="fas fa-angle-double-right text-secondary"></i>{{$link->$name_locale}}</a>
                                    @endforeach

                                </div>
                                @include('simple.includes.socials_box')
                            </div>
                        </div>
                        <div class="col-xl-9 mt-3">
                            <div>
                                <div class="header_fc_content">
                                    <h5 class="border-bottom pb-2">{{$data->$name_locale}}</h5>
                                    @if(count($data->administrations))
                                    <span class="text-secondary d-block mt-4"
                                        style="font-weight: 500; font-size: 17px;">@lang('index.Markaz ma`muryati')</span>
                                    @endif
                                    @foreach($data->administrations as $ad)
                                        <div class="about_fc_card border mt-2">
                                            <div>
                                                <img src="@if($ad->image){{asset('')}}{{$ad->image}}@else{{asset('images/alone/logo_main.png')}} @endif" alt="">
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

                                    @endforeach
                                    <span class="text-secondary d-block mt-4"
                                        style="font-weight: 500; font-size: 17px;">@lang('index.Markaz haqida')</span>
                                    {!! $data->$content_locale !!}
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
