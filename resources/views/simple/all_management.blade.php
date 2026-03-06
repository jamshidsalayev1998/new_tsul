@extends('simple.layouts.master')
@section('title')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
    {{$menu->$name_locale}}
    @endsection
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/faculty_and_center.css')}}">
    @endsection
@section('content')

     <div class="all_faculty mt-4 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <a href="index.html" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>
                            <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                    style="font-size:10px"></i></span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">{{$menu->$name_locale}}</a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 mt-3">
                        <div class="left_menu_of_page">
                            @include('simple.includes.links')
                           @include('simple.includes.socials_box')
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 mt-3">
                        <h3 class="border-bottom pb-2" style="color: #233585;">{{$menu->$name_locale}}</h3>
                        <div class="af_item_box">
                            @foreach($data as $item)
                            <a href="{{route('simple.management.show' , ['id' => $item->id , 'name' => $item->$name_locale])}}" class="all_faculty_items">
                                <div class="all_faculty_items_icon"><i class="fas fa-gavel"></i></div>
                                <span class="card-text">{{$item->$name_locale}}</span>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
