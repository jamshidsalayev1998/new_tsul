
<div class="col-12 col-md-12 col-lg-3  imgCenter">
    <div class="left_menu_of_page">
        <div class="left_side_title_top d-none"></div>
        <div class="munu">
            <a href="{{route('simple.teacher.show' , ['id' => $teacher->id, 'slug' => $teacher->$fio_locale
])}}" class="@if(Route::is('simple.teacher.show')) {{'activeSidebar'}} @endif">@lang('index.Biography and CV')</a>
            <a href="{{route('simple.teacher_articles.show' , ['id' => $teacher->id , 'slug' => $teacher->$fio_locale])}}"
               class="@if(Route::is('simple.teacher_articles.show')) {{'activeSidebar'}} @endif">@lang('index.Articles')</a>
        </div>
    </div>
</div>
