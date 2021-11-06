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
    <link rel="stylesheet" href="{{asset('front_assets/css/general_page_content.css')}}">
    
    @endsection
@section('content')
    <div class="general">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 mt-3">
                        <div class="left_menu_of_page">
                           @include('simple.includes.links')
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 mt-3">
                        <div class="general_content">
                             <div class="content-from-editor">
                                 {!! $content->$content_locale !!}
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('js')
    <script src="{{asset('front_assets/js/general_page_content.js')}}"></script>

@endsection
