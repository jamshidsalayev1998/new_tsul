@extends('simple.layouts.master')
@section('title')
    <?php
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $name_locale = 'name_' . $locale;
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
                            <style>
                                .card:hover {
                                    border: 1px solid #2f54eb;
                                    box-shadow: 0 4px 2px -2px #8c8c8c;
                                    cursor: pointer;
                                }

                                @media screen and (min-width: 320px) and (max-width: 425px) {
                                    .card {
                                        margin-bottom: 15px;
                                    }
                                }

                                @media screen and (min-width: 425px) and (max-width: 768px) {
                                    .card {
                                        margin-bottom: 15px;
                                    }
                                }

                                @media screen and (min-width: 768px) and (max-width: 1024px) {
                                    .card {
                                        margin-bottom: 15px;
                                    }
                                }


                            </style>


                            <div class="col-xl-12">
                            <div class="row">
                                <!-- <div class="col-xl-12 card p-3 mb-1">
                                    <a href="/all-faculties" style="text-decoration:none; font-weight:600;">
                                        <div class="card-header" style="background-color: #f0f5ff; text-align: center !important;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;@lang('index.Faculties')
                                        </div>
                                    </a>
                                </div> -->

                                <!--Start All Faculties -->
                                <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty%20of%20Law-QS"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;@lang('index.Xususiy huquq')
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty-of-Social-science"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;@lang('index.ommaviy huquq')
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty%20of%20Law-QS"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;@lang('index.jinoiy odil sudlov')
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty-of-Social-science"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;@lang('index.xalqaro huququ va qiyosiy ququqshunoslik')
                                        </div>
                                    </a>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3 my-2">
                                    <a href="https://tsul.uz/uz/general-page/Faculty%20of%20Law-QS"
                                       style="text-decoration:none; font-weight:600;">
                                        <div class="card-header text-center" style="background-color: #f0f5ff;">
                                            <i class="fas fa-book-reader"
                                               style="font-size: 24px; color:#2f54eb;"></i><b>
                                                :</b>&nbsp;@lang('index.magistratura va sirtqi talim')
                                        </div>
                                    </a>
                                </div> -->

                            
                                <!--End All Faculties -->
                                                                                                        
                                </div>
                            </div>

                            <div class="d-flex my-3">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3">
                                        <a href="https://tsul.uz/uz/general-page/Faculty%20of%20Law-QS"
                                           style="text-decoration:none; font-weight:600;">
                                            <div class="card-header text-center" style="background-color: #f0f5ff;">
                                                <i class="fas fa-book-reader"
                                                   style="font-size: 24px; color:#2f54eb;"></i><b>
                                                    :</b>&nbsp;@lang('index.Faculty of Law')
                                            </div>
                                        </a>
                                    </div>
    
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12  card p-3">
                                        <a href="https://tsul.uz/uz/general-page/Faculty-of-Social-science"
                                           style="text-decoration:none; font-weight:600;">
                                            <div class="card-header text-center" style="background-color: #f0f5ff;">
                                                <i class="fas fa-book-reader"
                                                   style="font-size: 24px; color:#2f54eb;"></i><b>
                                                    :</b>&nbsp;@lang('index.Faculty of Social science')
                                            </div>
                                        </a>
                                    </div>

                                </div>

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
