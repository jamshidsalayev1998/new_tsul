@extends('simple.layouts.master')
@section('content')
    <?php
        $locale = app()->getLocale();
        $name_locale = 'name_'.$locale;
        $short_desc_locale = 'short_description_'.$locale;
        $full_inf_locale = 'full_information_'.$locale;
    ?>
    <div class="about_university">
            <div class="container">
                <div class="row">                                                                   

                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center sticky">
                                <div class="">
                                    <div class="card-block  img_style">
                                        <img src="https://static.sof.uz/crop/8/7/826__90_87317598.jpg" class="mt-5 " alt="Server error!">
                                        <h3 class=" font-weight-bold mt-4">{{$about->$name_locale}}</h3>
                                        <h5 class="text-muted">
                                            <div class="rektor_icons text-start">
                                                <hr>
                                                <a href="mailto: info@tsul.uz"><i class="fas fa-envelope"><span class="ml-3">{{$about->email}}</span></i></a>
                                                <hr>
                                                <a href="tel: +99 871 233-66-36"><i class="fas fa-phone-alt"><span class="ml-3">{{$about->phone}}</span></i></a>                             
                                            </div>

                                            <div class="rektor_icons">
                                                <hr>                                               
                                                <a href="{{$about->telegram}}"><i class="fab fa-telegram-plane"></i></a>
                                                <a href="{{$about->twitter}}"><i class="fab fa-twitter ml-5"></i></a>
                                                <a href="{{$about->facebook}}"><i class="fab fa-facebook-f ml-5"></i></a>
                                                <hr>
                                            </div>
                                    </h5></div>
                                </div>

                            </div>

                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12 bg-white mt-5 ob-info">

                                <div class="card-text">
                                    {!! $about->$full_inf_locale !!}
                                </div>
                            </div>
                        

                    
                </div>
            </div>
        </div>
@endsection
