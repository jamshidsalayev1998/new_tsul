@extends('simple.layouts.master')
@section('title')
    <?php
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $general_info_locale = 'general_info_' . $locale;
    $contact_info_locale = 'contact_info_' . $locale;
    $text_locale = 'text_' . $locale;
    $name_locale = 'name_' . $locale;
    $image_locale = 'image_' . $locale;
    $link_locale = 'link_' . $locale;
    $fio_locale = 'fio_' . $locale;
    $title_locale = 'title_' . $locale;
    $short_info_locale = 'short_info_' . $locale;

    ?>
    {{--    {{$menu->$name_locale}}--}}
@endsection
@section('content')
    <div class="container  bg-white">
        <div class="row py-4">

            <div class="d-flex align-items-center justify-content-between py-2 px-4 my-4 TeacherName imgCenter">
                <div>
                    <h4 class="fs-5 m-0 p-0">{{$teacher->$fio_locale}}</h4>
                    <span class="text-muted">{{$teacher->teacher_degree->$name_locale}}</span>
                </div>
                <div>
                    <img src="{{asset('front_assets/assets/img/logo_main.png')}}" alt="">
                </div>
            </div>

            <!--Start fast links-->
             @include('simple.includes.teacher_article_sidebar')
            <!--End fast links-->

            <!-- Article info secion -->
            <div id="divBottom" class="col-12 col-md-12 col-lg-9 px-4">
                <div class="borderTop borderBottom px-4 additionalInfo">
                    <h6 class="my-3 fw-bold">@lang('index.Articles')</h6>
                </div>

                <div class="col-12 justifyAll m-0  additionalInfo px-4 pr-5 my-3">
                    @foreach($teacher->articles as $article)
                    <div class="my-2">
                        <p class="fw-bolder bottomHr">{{$article->$name_locale}}</p>
                        {!! $article->short_info !!}
                    </div>
                    @endforeach
                </div>

            </div>
            <!--End Article info secion -->

        </div>

        <!--Start Teacher card section -->
        @include('simple.includes.teachers_corusel')
        <!--End Teacher card section -->
    </div>

@endsection
