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
@foreach($announces as $anc)
    <div>
        <div>
            {{date('d' , strtotime($anc->date))}}<br> <br> {{$anc->get_month_short_name($locale)}}
        </div>
        <div>
            <a href="{{route('simple.announces.show' , ['id' => $anc->id])}}">
                {{$anc->$title_locale}}
            </a>
        </div>
    </div>
@endforeach
