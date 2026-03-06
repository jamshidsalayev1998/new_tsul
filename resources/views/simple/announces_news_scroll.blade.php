<?php
$locale = app()->getLocale();
$content_locale = 'content_' . $locale;
$title_locale = 'title_' . $locale;
$image_locale = 'image_' . $locale;
$name_locale = 'name_' . $locale;
$i = 0;
?>
@foreach($news as $announce)
    <div class="anons_in_news_card_item">

        <div>
                                                <span>
                                                    {{date('d' , strtotime($announce->date))}}<br/>{{$announce->get_month_short_name($locale)}}
                                                </span>
        </div>
        <div>
            <a href="{{route('simple.news.show' , ['id' => $announce->id , 'slug' => $announce->create_slug() , 'type' => $announce->create_type_slug()])}}">
                {{$announce->$title_locale}}
            </a>
        </div>
    </div>
@endforeach
