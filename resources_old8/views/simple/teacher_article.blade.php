@extends('simple.layouts.master')
@section('title')
    <?php   
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $general_info_locale = 'general_info_' . $locale;
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

    <!--Main content-->
    <div class="container customShadow bg-white">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item small"><a href="#">@lang('index.Home')</a></li>
                <li class="breadcrumb-item small"><a href="#">@lang('index.Teachers')</a></li>
                <li class="breadcrumb-item small active" aria-current="page">{{$teacher->$fio_locale}}</li>
            </ol>
        </nav>

        <div id="printThis" class="row  py-4">

            <!-- Start in Browser Mode -->
            <div id="divBottom" class="col-12 col-md-8 col-lg-9 ">
                <div class="col-12 imgCenter">
                    <h1 class="fs-2 mb-3 text-bolder text-center">
                        {{$teacher->$fio_locale}}
                    </h1>
                    <div>
                        <p><b class="mr-2">{{$teacher->teacher_degree->$name_locale}}:</b> {{$teacher->kafedra->$name_locale}} </p>


                    </div>
                </div>

                <div class="col-12 justifyAll">
                    <p>
                       {!! $teacher->$general_info_locale !!}
                    </p>
                </div>

            </div>

            <div id="divTop" class="col-12 col-md-4 col-lg-3">
                <div>
                    <div id="imgCenter" class="imgCenter">
                        <img class="imgFit radiusCircle img-fluid " style=""
                             src="{{asset($teacher->image)}}" alt="">
                    </div>

                    <div class="my-2">
                        <p class="bold mb-2">Владение языками</p>
                        <span>английский</span><br>
                        <span>немецкий</span>
                    </div>

                    <div class="my-2">
                        <p class="bold mb-2">Контакты</p>
                        <i class="fas fa-phone-alt"><span class="mx-2">+7 (495) 772-95-9022779 </span></i>
                        <i class="fas fa-envelope"><span class="mx-2">getmanpav@hse.ru </span></i>
                        <i class="fas fa-map-marker-alt"><span
                                class="mx-2"> Б. Трехсвятительский пер., д. 3, каб. 410 </span></i>
                        <p>Время консультаций:</p>
                        <p>Hа платформе Zoom:</p>
                        <p>Блоги и соц. сети:</p>
                    </div>

                    <!-- Print all Teacher items -->
                    <div class="py-2">
                        <button id="magicPrint" class="btn btn-primary btn-sm"
                                style="text-transform: capitalize !important;"><i
                                class="fas fa-print mr-1"></i>Print
                        </button>
                    </div>
                    <!--End Print all Teacher items -->
                </div>
            </div>
            <!-- End in Browser Mode -->

        </div>
    </div>

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

        let divBottom = document.getElementById("divBottom");
        let divTop = document.getElementById("divTop");

        if (window.innerWidth < 768) {
            divBottom.classList.add("order-last");
            divTop.classList.add("order-first");
        }

        window.addEventListener("resize", function () {
            if (window.innerWidth < 768) {
                divBottom.classList.add("order-last");
                divTop.classList.add("order-first");
            } else {

                divBottom.classList.remove("order-last");
                divTop.classList.remove("order-first");

            }
        })
    </script>

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        });
        wow.init();

    </script>
@endsection
