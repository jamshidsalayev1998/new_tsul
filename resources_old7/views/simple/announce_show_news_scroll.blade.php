<?php
$locale = app()->getLocale();
$content_locale = 'content_'.$locale;
$title_locale = 'title_'.$locale;
$image_locale = 'image_'.$locale;
$name_locale ='name_'.$locale;
$short_info_locale ='short_info_'.$locale;
$i = 0;
?>
@foreach($news as $anc)
    <div>
        <div>
            {{date('d' , strtotime($anc->date))}}<br> <br> {{$anc->get_month_short_name($locale)}}
        </div>
        <div>
            <a href="{{route('simple.news.show' , ['id' => $anc->id,'slug' => $anc->create_slug() , 'type' => $anc->create_type_slug()])}}">
                {{$anc->$title_locale}}
            </a>
        </div>
    </div>
@endforeach
