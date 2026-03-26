@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/asking_quations/asking_quations.css')}}">
@endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
<div class="asking_quations animate__animated animate__fadeIn animate__delay-0.5s">
            <div class="container">
                <div class="row">

                     <!--breadcrumb-->
                     <div class="col-xl-12 col-lg-12">
                        <div>
                            <a href="/" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>
                            <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                    style="font-size:10px"></i></span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">{{$menu->$name_locale}}</a>
                            <span class="text-secondary" style="font-weight:500">&nbsp;
                                </span>
                        </div>
                    </div>


                    <div class="col-xl-3 mt-3 animate__animated animate__fadeInLeft">
                        <div class="left_menu_of_page">
                            @include('simple.includes.links')
                            @include('simple.includes.socials_box')
                        </div>
                    </div>


                    <div class="col-xl-9  form mt-3">
                        <h1>@lang('index.Задать вопросы')</h1>
                          <form  action="{{route('simple.ask_question.store')}}" method="post">
                              @csrf
                              @method('POST')
                            <div class="form-lines">
                              <label for="usr"> @lang('index.Имя') </label>
                              <input type="text" class="form-control" id="usr" name="name" placeholder="" required>
                            </div>

                            <div class="form-lines">
                                <label for="usr"> @lang('index.Фамилия') </label>
                                <input type="text" class="form-control" id="usr" name="surname" placeholder="" >
                            </div>

                            <div class="form-lines">
                                <label for="email">@lang('index.Электронная почта')</label>
                                <input type="email" class="form-control" placeholder="" id="email" name="email" required>
                            </div>

                            <div class="form-lines">
                                <label for="phone">@lang('index.Телефон номер'):</label>
                                <input type="tel" class="form-control" placeholder="" id="tel" name="phone">
                            </div>

                            <div class="form-lines">
                                <label for="comment">@lang('index.Ваш вопрос')</label>
                                <textarea class="form-control" rows="8" placeholder="" id="comment" name="body" required></textarea>
                            </div>

                            <hr>
                            <div class="button-bottom">
                                <button type="submit" class="submit-button">@lang('index.Submit')</button>
                            </div>

                          </form>
                        </div>



                </div>




            </div>
        </div>
@endsection
