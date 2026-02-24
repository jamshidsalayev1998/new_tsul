@extends('simple.layouts.master')
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
<div class="video_gallery py-4">
            <div class="container">
                <div>
                    <a href="/" class="text-secondary"
                        style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Главная страница')</a>
                    <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                            style="font-size:10px"></i></span>
                    <a href="#" class="text-secondary"
                        style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">@lang('index.Видео галерея')</a>
                </div>
                <div class="header_for_part mt-4">
                    <h3>@lang('index.Video gallery')</h3>
                </div>
                <div class="bg-white w-100 video_gallery_loader">
                    <div class="d-flex">
                        <div class="dot-loader"></div>
                        <div class="dot-loader dot-loader--2"></div>
                        <div class="dot-loader dot-loader--3"></div>
                    </div>
                </div>
                <div id="video_gallery_box_parent_id">
                    <div class="video_gallery_box bg-white">

                        <div class="video_gallery_item">
                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/wUT1ZeQnSDk">
                            </iframe>
                        </div>
                        <div class="video_gallery_item">
                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/mz1EjtqVRNY">
                            </iframe>
                        </div>
                        <div class="video_gallery_item">
                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/WO5vu28AShQ">
                            </iframe>
                        </div>
                        <div class="video_gallery_item">
                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/4otlA31rJog">
                            </iframe>
                        </div>
                        <div class="video_gallery_item">
                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/HLJ3blIwIK0">
                            </iframe>
                        </div>
                        <div class="video_gallery_item">
                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/3NmdErqUJmQ">
                            </iframe>
                        </div>
{{--                        <div class="video_gallery_item">--}}
{{--                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/u6BZx78-u3I&t=17s">--}}
{{--                            </iframe>--}}
{{--                        </div>--}}
{{--                        <div class="video_gallery_item">--}}
{{--                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/rJt-6EBJhVE">--}}
{{--                            </iframe>--}}
{{--                        </div>--}}
{{--                        <div class="video_gallery_item">--}}
{{--                            <iframe class="loading_video_gallery" src="https://www.youtube.com/embed/_e_CtRvJ-Ok">--}}
{{--                            </iframe>--}}
{{--                        </div>--}}

                    </div>
                </div>
                <div class="more_links_to_pages d-flex justify-content-end mt-3">
                    <a href="#!"> Ещё <i class="fas fa-spinner ml-2 fa-spin" style=" font-size: 10px;"></i></a>
                </div>
            </div>
        </div>
@endsection
