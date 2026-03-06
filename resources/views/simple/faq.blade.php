@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/faq_css/faq.css')}}">
{{--    <link rel="stylesheet" href="{{asset('front_assets/css/xalqaro.css')}}">--}}
@endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $links = 'App\Menu'::where('leap' , 0)->get();
    ?>
<div class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 mt-3">
                        <div class="left_menu_of_page">
                           @include('simple.includes.links')
                                @include('simple.includes.socials_box')
                        </div>
                    </div>
                    <div class="col-xl-9 accordion-style">
                <div class="mt-4">
                    <h2>@lang('index.Ko\'p beriladigan savollar va javoblar')</h2>
                    <div class="accordion">
                        <h3><i class="fas fa-chevron-down"></i>@lang('index.Talabalar qaysi yo‘nalishlar bo‘yicha ta’lim oladilar?')</h3>
                        <div>@lang('index.a1')
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>@lang('index.TDYU o‘quv rejasiga qanday modullar kiritilgan?')</h3>
                        <div>@lang('index.a2')
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>@lang('index.TDYUda ta’lim necha tilda olib boriladi?')</h3>
                        <div>@lang('index.a3')
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>@lang('index.Talabalar bilimi qanday baholanadi?')</h3>
                        <div>@lang('index.a4')
                        </div>
                        <h3><i class="fas fa-chevron-down"></i>@lang('index.O‘quv adabiyotlarini qayerdan olsa bo‘ladi?')
                        </h3>
                        <div>@lang('index.a5')
                        </div>
                        <h3><i class="fas fa-chevron-down"></i>@lang('index.Talabalarning amaliyoti qanday tashkil etilgan?')</h3>
                        <div>@lang('index.a6')
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>@lang('index.Taqsimot bo‘yicha ishga joylashish imkoniyati bormi?')</h3>
                        <div>@lang('index.a7')
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>@lang('index.TDYU doktoranturasiga o‘qishga kirish jarayoni qanday?')</h3>
                        <div>@lang('index.a8')</div>

                        <h3><i class="fas fa-chevron-down"></i>@lang('index.Toshkent davlat yuridik universiteti avvalgi institutdan nimasi bilan farq qiladi?')</h3>
                        <div>@lang('index.a9')</div>

                        <h3><i class="fas fa-chevron-down"></i>@lang('index.TDYUda xorijliklar tahsil olishi mumkinmi?')
                        </h3>
                        <div>@lang('index.a10')</div>

                        <h3><i class="fas fa-chevron-down"></i>@lang('index.TDYUga O‘zbekistonning boshqa oliy ta’lim muassasasidan yoki xorijiy oliy ta’lim muassasasidan o‘qishni o‘tkazish mumkinmi?')</h3>
                        <div>@lang('index.a11')</div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
@endsection
@section('js')
    <script src="{{asset('front_assets/js/faq.js')}}"></script>
    @endsection
