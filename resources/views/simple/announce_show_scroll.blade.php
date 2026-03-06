<?php
$locale = app()->getLocale();
$content_locale = 'content_'.$locale;
$title_locale = 'title_'.$locale;
$image_locale = 'image_'.$locale;
$name_locale ='name_'.$locale;
$short_info_locale ='short_info_'.$locale;
$i = 0;
?>
@foreach($others as $other)
    <div class="col-lg-4 mt-3 last_news_bottom_card">
        <a href="{{route('simple.announces.show' , ['id' => $other->id])}}">
            <div>
                <img src="{{asset('')}}{{$other->$image_locale}}" alt="">
            </div>
            {{--                                    <button class="btn_link_menu mt-2">Образование</button>--}}
            <h6 class="last_news_bottom_card_text mt-2">
                {{$other->$short_info_locale}}
            </h6>
            <span class="text-secondary text-end d-block"
                  style="font-size: 13px; font-weight: 500;">{{$other->date}}</span>
        </a>
    </div>
@endforeach
