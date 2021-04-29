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
    ?>
    <div class="administration">
            <div class="container">
                <div class="row">
                    <div>
                        <a href="/" class="text-secondary"
                            style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">Главная
                            страница</a>
                        <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                style="font-size:10px"></i></span>
                        <a href="#" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">Ректорат</a>
                    </div>

                    @foreach($data as $item)
                    <div class="col-xl-12 info-card mt-3">
                        <div class="col-md-4 col-sm-4">
                           <a href="{{route('simple.rektorat.show' , ['id' => $item->id])}}"> <img src="{{asset('')}}{{$item->image}}" alt="network error!" ></a>
                        </div>

                        <div class="col-md-8 col-sm-8 img-info">

                            <h4> <a href="{{route('simple.rektorat.show' , ['id' => $item->id])}}">{{$item->$full_name_locale}}</a> </h4>
                            <hr>
                            <p>Ученое звание:</p>
                            <h5>{{$item->$academic_title_locale}}.</h5>


                            <p>Ученая степень:</p>
                            <h5>{{$item->$academic_degree_locale}}</h5>


                            <p>Должность:</p>
                            <h5>{{$item->$type_name_locale}}</h5>

                        </div>
                    </div>
                    @endforeach
                     <hr class="mt-5">






                </div>
            </div>
        </div>
@endsection
