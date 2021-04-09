@extends('simple.layouts.master')
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>

    <div class="general">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 mt-3">
                        <div class="left_menu_of_page">
                            <div>БЫСТРЫЕ ССЫЛКИ</div>
                            <div>
                                @foreach($links as $link)
                                <a href="@if($link->slug){{$link->slug}}@else # @endif"><i class="fas fa-angle-double-right text-secondary"></i>{{$link->$name_locale}}</a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 mt-3">
                        <div class="general_content">
                             {!! $content->$content_locale !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
