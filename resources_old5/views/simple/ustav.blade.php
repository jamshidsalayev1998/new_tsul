@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/charter/charter.css')}}">
@endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $file_locale = 'file_'.$locale;
    ?>
    <div class="charter">
    <div class="container">
        <div class="row">

        <div class="col-xl-3 col-lg-3 mt-3">
            <div class="left_menu_of_page">
                @include('simple.includes.links')
                @include('simple.includes.socials_box')
            </div>
        </div>

        <div class="col-xl-9 col-lg-9 rounded-box mt-3">
            <h3 class="pb-3 pt-3">@lang('index.Устав')</h3>

            <div class="box-body">
                @foreach($data as $item)
                <div class="pdf mt-2">
                    <a href="/{{$item->$file_locale}}"><i class="fas fa-file-pdf"></i></a>
                    <a href="/{{$item->$file_locale}}">{{$item->$name_locale}}</a>
                    <a href="/{{$item->$file_locale}}" class="download-icon"><i class="fas fa-download"></i></a>
                </div>
                @endforeach

                <h3></h3>

            </div>

        </div>
    </div>


    </div>
</div>
@endsection
