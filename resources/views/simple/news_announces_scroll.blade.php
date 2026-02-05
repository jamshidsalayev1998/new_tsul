<?php
$locale = app()->getLocale();
$content_locale = 'content_' . $locale;
$title_locale = 'title_' . $locale;
$image_locale = 'image_' . $locale;
$name_locale = 'name_' . $locale;
$i = 0;
?>
@foreach($announces as $announce)
    <div class="anons_in_news_card_item">
        <div>
                                                <span>
                                                    {{date('d' , strtotime($announce->date))}}<br/>{{$announce->get_month_short_name($locale)}}
                                                </span>
        </div>
        <div>
            <a href="{{route('simple.announces.show' , ['id' => $announce->id])}}">
                {{$announce->$title_locale}}
            </a>
        </div>
    </div>
@endforeach
