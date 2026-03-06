<?php
$locale = app()->getLocale();
$content_locale = 'content_'.$locale;
$title_locale = 'title_'.$locale;
$image_locale = 'image_'.$locale;
$name_locale ='name_'.$locale;
$short_info_locale ='short_info_'.$locale;
$logo_locale = 'front_assets/assets/img/logo_university/_TDYU_'.$locale.'_white_primary.png';
$i = 0;
?>
@foreach($others as $other)
    <div class="col-lg-4 mt-3 last_news_bottom_card">
        <a href="{{route('simple.news.show' , ['id' => $other->id, 'slug' => $other->create_slug() , 'type' => $other->create_type_slug()])}}">
            <div class="text-center">
                <img style="width: auto!important;" src="{{asset('')}}{{$other->$image_locale}}" alt="">
            </div>
            <button class="btn_link_menu mt-2">{{$other->type?$other->type->$name_locale:''}}</button>
            <h6 class="last_news_bottom_card_text mt-2">
                {{$other->$short_info_locale}}
            </h6>
            <span class="text-secondary text-end d-block" style="font-size: 13px; font-weight: 500;">28.12.2021</span>
        </a>
    </div>
@endforeach
