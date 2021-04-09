@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/Timetable_of_classes/Timetable_of_classes.css')}}">
    @endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $title_locale = 'title_'.$locale;
        $image_locale = 'image_'.$locale;
        $name_locale ='name_'.$locale;
        $i = 0;
    ?>
    <div class="Timetable_of_classes">
            <div class="container">
                <div class="row">
                    <div>
                        <a href="index.html" class="text-secondary"
                            style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">Главная
                            страница</a>
                        <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                style="font-size:10px"></i></span>
                        <a href="#" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">Расписание занятий</a>
                    </div>
                    <h1>Расписание занятий</h1>

                    <div class="tab-own">
                        @foreach($courses as $course)
                            <button class="tablink" @if($loop->first) style="border-top-left-radius:30px" @elseif($loop->last) style="border-top-right-radius:30px" @endif onclick="openPage('page{{$course->id}}', this, 'white')" @if($loop->first) id="defaultOpen" @endif>
                                {{$course->name}} курс</button>
                        @endforeach
                             @foreach($courses as $course)
                                  <div id="page{{$course->id}}" class="tabcontent">
                                      @foreach($course->get_faculties() as $faculty)
                                      <div class="class-list">
                                            <h5>@if($course->type_id == 1)Бакалавриат @else Магистратура @endif</h5>
                                            <p>{{$faculty->name_uz}}</p>
                                            @foreach($faculty->get_groups($course->id) as $group)
                                              <a href="{{asset('')}}{{$group->timetable_file}}">{{$group->name}}</a>
                                            @endforeach
                                        </div>
                                      @endforeach
                                    </div>
                            @endforeach



                    </div>




                </div>
            </div>
        </div>

@endsection
@section('js')
    <script src="{{asset('front_assets/js/Timetable_of_classes.js')}}"></script>
    @endsection
