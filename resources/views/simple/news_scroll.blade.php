<?php
$locale = app()->getLocale();
$content_locale = 'content_' . $locale;
$title_locale = 'title_' . $locale;
$image_locale = 'image_' . $locale;
$name_locale = 'name_' . $locale;
$i = 0;
?>
@foreach($news as $item)
    <div class="col-xl-6 col-lg-6 col-md-6   mt-2">
        <div class="news_small_cards">
            <div class="news_small_cards_img_box">
                <img src="{{asset('')}}{{$item->$image_locale}}" alt="">
            </div>
            <div class="px-2">
                <button class="card_button_links mt-2">{{$item->type->$name_locale}}</button>
                <span class="news_small_cards_text "><a
                        href="{{route('simple.news.show' , ['id' => $item->id, 'slug' => $item->create_slug() , 'type' => $item->create_type_slug()])}}"
                        style="">{{$item->$title_locale}}</a>
                                                </span>
                <a href="{{route('simple.news.show' , ['id' => $item->id, 'slug' => $item->create_slug() , 'type' => $item->create_type_slug()])}}"
                   class="text-end text-secondary mt-1 d-block"
                   style="font-size: 13px; font-weight: 600;">{{date('d.m.Y' , strtotime($item->created_at))}}</a>
            </div>
        </div>
    </div>
@endforeach
