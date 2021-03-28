@extends('simple.layouts.master')
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
    ?>

    <div class="general">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 mt-3">
                        <div class="left_menu_of_page">
                            <div>БЫСТРЫЕ ССЫЛКИ</div>
                            <div>
                                <a href="#"><i class="fas fa-angle-double-right text-secondary"></i>menyular 1</a>
                                <a href="#"><i class="fas fa-angle-double-right text-secondary"></i>menyular 2</a>
                                <a href="#"><i class="fas fa-angle-double-right text-secondary"></i>menyular 3</a>
                                <a href="#"><i class="fas fa-angle-double-right text-secondary"></i>menyular 4</a>
                                <a href="#"><i class="fas fa-angle-double-right text-secondary"></i>menyular 5</a>
                                <a href="#"><i class="fas fa-angle-double-right text-secondary"></i>menyular 6</a>
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
