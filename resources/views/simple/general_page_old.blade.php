@extends('simple.layouts.master')
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
    ?>
    {!! $content->$content_locale !!}
@endsection
