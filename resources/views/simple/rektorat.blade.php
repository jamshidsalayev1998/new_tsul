@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/administration/administration.css')}}">
    @endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $full_name_locale = 'full_name_'.$locale;
        $academic_title_locale = 'academic_title_'.$locale;
        $academic_degree_locale = 'academic_degree_'.$locale;
        $type_name_locale = 'type_name_'.$locale;
        $name_locale = 'name_'.$locale;
    ?>
    <div class="administration">
            <div class="container">
                <div class="row">
                    <div>
                        <a href="index.html" class="text-secondary"
                            style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>
                        <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                style="font-size:10px"></i></span>
                        <a href="#" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Проректоры')</a>
                    </div>
                    
                   <div class="col-xl-9">
                       @foreach($data as $item)
                    <div class="col-md-12 mbsc-col-sm-12 info-card mt-3">
                    
                        <div class="row justify-content-center align-items-center d-flex">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 img-div">
                           <a href="{{route('simple.rektorat.show' , ['id' => $item->id])}}"> <img src="{{asset('')}}{{$item->image}}" class="image img-fluid" alt="network error!" style="width: 100%;" ></a>
{{--                           <div class="overlay">{{$item->$full_name_locale}}</div>--}}
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 img-info">
                            <h4> <a href="{{route('simple.rektorat.show' , ['id' => $item->id])}}">{{$item->$full_name_locale}}</a> </h4>

                                <h5 class="font-weight-bold mt-2 ">@lang('index.Ученое звание'): <span class="font-weight-normal">{{$item->$academic_title_locale}}</span></h5>

                                <h5 class="font-weight-bold mt-3 ">@lang('index.Ученая степень'):  <span class="font-weight-normal"> {{$item->$academic_degree_locale}}</span></h5>

                                <h5 class="font-weight-bold mt-3 mb-3 ">@lang('index.Должность'):  <span class="font-weight-normal"> {{$item->$type_name_locale}}</span></h5>

                                  <div class="col-md-12 col-sm-12 img-icons">
                                    <a href="tel: (+998 71) 233-42-09" class="col-md-6"><i class="fas fa-mobile"> : <span class="fs-6">{{$item->phone1}}</span></i></a>
                                    <a href="mailto:info.tsul@.com" class="col-md-6"><i class="fas fa-at"> : <span class="fs-6">{{$item->email}}</span></i></a>
                                  </div>

                                  <div class="col-md-12 img-footer-icons">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a style="color: #0270AD !important;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                  </div>
                        </div>
                        </div>
                       

                    </div>
                       @endforeach
                     <!-- <hr class="mt-5"> -->
                    </div>

                    <div class="col-xl-3 mt-3">
                        <div class="left_menu_of_page">
                            @include('simple.includes.links')
                           @include('simple.includes.socials_box')
                        </div>
                    </div>





                </div>
            </div>
        </div>
@endsection
