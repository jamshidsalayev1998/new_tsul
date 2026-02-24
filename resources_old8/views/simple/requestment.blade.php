@extends('simple.layouts.master')
@section('title')
    <?php
    $locale = app()->getLocale();
    $text_locale = 'text_' . $locale;
    $name_locale = 'name_' . $locale;
    $body_locale = 'body_' . $locale;
    $image_locale = 'image_' . $locale;
    $link_locale = 'link_' . $locale;
    $fio_locale = 'fio_' . $locale;
    $title_locale = 'title_' . $locale;
    $description_locale = 'description_' . $locale;
    $short_info_locale = 'short_info_' . $locale;
    $content_locale = 'content_' . $locale;
    $news = 'App\Neww'::orderBy('date', 'DESC')->get();
    $announces = 'App\Announce'::where('event', 0)->orderBy('id', 'DESC')->get();
    $announces_event = 'App\Announce'::where('event', 1)->orderBy('date', 'DESC')->take(4)->get();
    $sep = 'App\SeperatelyOneNew'::where('status', 1)->orderBy('id', 'DESC')->first();
    $men = 'App\Menu'::where('id', 58)->first();
    $sll = str_replace('/general-page/', '', $men->slug);
    $slug = 'App\Page'::where('slug', $sll)->first();
    $scientist_news = 'App\YoungScientistsNew'::where('status', 1)->orderBy('id', 'DESC')->get();
    $scientist_articles = 'App\ScientificArticle'::where('status', 1)->orderBy('id', 'DESC')->get();
    ?>
    @if($locale == 'uz')
        TDYU
    @elseif($locale == 'en')TSUL
    @elseif($locale == 'ru')
        ТГЮУ
    @endif
@endsection
@section('content')
    <!-- Start Requestment section -->
    <style>
        .requestmentName {
            background: #fff;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .requestmentName h1 {
            font-size: 36px;
            color: #2C42A7 !important;
        }

        .ark {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            background-color: #2C42A7;
            height: 10px;
            width: 100%;
        }

        .requestmentAnswers {
            background: #fff;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .requestmentAnswers h3 {
            font-size: 16px;
            color: #202124 !important;
        }

        .requestmentAnswers h3::after {
            color: red;
            content: " * ";
            font-size: 16px;
        }

        .form-check {
            line-height: 1.9;
        }

        .submitAgrees {
            background: #fff;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .submitAgrees h3 {
            font-size: 16px;
            color: #202124 !important;
        }

        .submitAgrees h3::after {
            color: red;
            content: " * ";
            font-size: 16px;
        }
    </style>

    <section class="seventh-part w-100 my-5  bg-white rounded-3">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @endif
        <form method="post" action="{{ route('simple.requestments.store') }}" id="requestmentFrom" class="row">
            @csrf
            <div class="container requestment">
                <div class="requestmentName">
                    <div class="p-4">
                        <h1>{{ $requestment->$name_locale }}:</h1>
                        <p>{!! $requestment->$description_locale !!}</p>
                    </div>
                </div>

                @foreach($requestment->questions as $question)
                    <input type="hidden" name="requestment_id" value="{{ $requestment->id }}">
                    <div class="requestmentAnswers">
                        <div class="p-4">
                            <h3>{{ $question->$body_locale }} ?</h3>

                            @foreach($question->answers as $answer)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="question_{{ $question->id }}"
                                           value="{{ $question->id.'.'.$answer->id }}">
                                    <label class="form-check-label">
                                        {{ $answer->$body_locale }}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endforeach

                <div class="submitAgrees p-4">
                    <h3> I understand all answers and I personally select all</h3>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="accept" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1"> yes</label>
                    </div>
                </div>

                <div class="d-flex">
{{--                    <button class="btn border-0 text-capitalize w-25" onclick="clearFunction()">Clear</button>--}}
                    <button type="submit" class="w-25 btn btn-primary text-capitalize mx-md-4 mx-sm-1">Submit</button>
                </div>
            </div>
        </form>

{{--        <script>--}}
{{--            function clearFunction() {--}}
{{--                document.getElementById("requestmentFrom").reset();--}}
{{--            }--}}
{{--        </script>--}}
    </section>
    <!--End Requestment section -->
@endsection
