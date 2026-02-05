
@extends('simple.layouts.master')
@section('title')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $short_info_locale = 'short_info_'.$locale;
    ?>
    {{$menu->$name_locale}}
    @endsection
@section('links')
@section('links')
        <link rel="stylesheet" href="{{asset('front_assets/css/department/department.css')}}">
@endsection
@section('content')
        <!--Main content-->
        <div class="departments">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <div>
                            <a href="index.html" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>


                            <span class="text-secondary" style="font-weight:500">&nbsp; <i
                                    class="fas fa-arrows-alt-h"></i>
                                &nbsp;</span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">
                               {{$menu->$name_locale}}</a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 mt-3">
                        <div class="left_menu_of_page">
                            @include('simple.includes.links')
                           @include('simple.includes.socials_box')
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 rounded-box mt-3">
                        <div class="department">

                            <div class="header">
                              <h3 class=" animate__animated animate__pulse">@lang('index.Ilmiy nashrlar')</h3>
                            </div>

                            <div class="cards">

                                @foreach($data as $item)

                              <div class=" card animate__animated animate__fadeIn ">
                                  <a href="{{route('simple.ilmiy_nashrlar.show' , ['id' => $item->id , 'name' => $item->$name_locale])}}" style="text-decoration: none">
                                      <div class="card__inner">
                                           <h2><i class="fas fa-graduation-cap"></i></h2>

                                           <div class="d-flex">
                                           <i class="fas fa-bookmark"></i>
                                           <p class="text-start"> &nbsp;{{$item->$name_locale}}</p>
                                           </div>

                                         <!-- <sub><i class="fas fa-align-center"></i> :&nbsp;{{$item->$short_info_locale}}</sub> -->
                                        </div>
                                  </a>
                              </div>
                                @endforeach

                              </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection




