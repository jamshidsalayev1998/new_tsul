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
        <!--Start Teacher info section -->
        <div id="printThis" class="row  py-4">
            <!--Start inPrintMode -->
            <div class="imgCenter1 my-3 row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between py-2 px-4 my-4 TeacherName">
                        <div>
                            <h4 class="fs-5 m-0 p-0">{{$teacher->$fio_locale}}</h4>
                            <span class="text-muted">{{$teacher->teacher_degree->$name_locale}}</span>
                        </div>
                        <div>
                            <img src="{{asset('front_assets/assets/img/logo_main.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex">
                    <div class="col-7">
                        <div class="teacherSoc">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                        </div>

                        <div class="my-2 mb-3">
                            <p class="bold mb-1">{{$teacher->kafedra->$name_locale}}</p>
                            <!-- <span>Toshkent sh, Sayilgokh ko'chasi 3a</span> -->
                        </div>

                        <div class="my-2 mb-3 TeacherCon">
                        <p class="bold mb-1">@lang('index.Contacts')</p>
                        {!! $teacher->$contact_info_locale !!}
                    </div>

                        <!-- <div class="my-2 mb-3">
                            <p class="bold mb-1">Ish vaqti</p>
                            <span>Dushanba-Chorshanba-09:00-18:00</span><br>
                            <span>Payshanba-Shanba-14:00-18:00</span>

                        </div> -->
                    </div>

                    <div class="col-5">
                        <img class="imgFit img-fluid" src="{{asset($teacher->image)}}"
                             alt="">
                    </div>
                </div>
            </div>
            <!--End inPrintMode -->

            <!-- Start in Browser Mode -->
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

            <!-- Teacher info secion -->
            <div id="divTop" class="col-12 col-md-4 col-lg-3 borderTop">
                <div class="my-2 imgCenter">
                    <div id="imgCenter" class="imgCenter">
                        <img class="imgFit  img-fluid px-4"
                             src="{{asset($teacher->image)}}" alt="">
                    </div>
                    <div class="teacherSoc">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </div>

                    <div class="my-2 mb-3">
                        <p class="bold mb-1">{{$teacher->kafedra->$name_locale}}</p>
                        {{--                            <span>Toshkent sh, Sayilgokh ko'chasi 3a</span>--}}
                    </div>

                    <div class="my-2 mb-3 TeacherCon">
                        <p class="bold mb-1">@lang('index.Contacts')</p>
                        {!! $teacher->$contact_info_locale !!}
                    </div>

                {{--                        <div class="my-2 mb-3">--}}
                {{--                            <p class="bold mb-1">Ish vaqti</p>--}}
                {{--                            <span>Dushanba-Chorshanba-09:00-18:00</span><br>--}}
                {{--                            <span>Payshanba-Shanba-14:00-18:00</span>--}}

                {{--                        </div>--}}

                <!-- Print all Teacher items -->
                    <div class="py-2">
                        <button id="magicPrint" class="btn btn-primary btn-sm w-100"
                                style="text-transform: capitalize !important;"><i
                                class="fas fa-print fs-6"></i></button>
                    </div>
                    <!--End Print all Teacher items -->
                </div>
            </div>

            <div id="divBottom" class="col-12 col-md-8 col-lg-6 px-4">
                <div class="borderTop borderBottom px-4 additionalInfo">
                    <h6 class="my-3">{{$teacher->kafedra->$name_locale}}</h6>
                </div>

                <div class="col-12 justifyAll  m-0 borderBottom additionalInfo px-4 my-3">
                    <p class="p-0 m-0 bold">@lang('index.Additional info')</p>
                    {!! $teacher->$general_info_locale !!}
                </div>

            </div>
            <!-- Teacher info secion -->

            <!-- End in Browser Mode -->
        </div>
        <!--Start all teacher print js -->
            <script>                
document.getElementById("magicPrint").onclick = function () {
    printElement(document.getElementById("printThis"))
}
function printElement(elem) {
    var domClone = elem.cloneNode(true);
    var $printSection = document.getElementById("printSection")

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print().callback((e) => {
        console.log(e);
    });
}
            </script>
        <!--End all teacher print js -->


        <!--End Teacher info section -->

        <!--Start Teacher card section -->
        @include('simple.includes.teachers_corusel')
        <!--End Teacher card section -->
    </div>

@endsection
