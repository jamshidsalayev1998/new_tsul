<?php
$locale = app()->getLocale();
$name_locale = 'name_'.$locale;
$menus = 'App\Menu'::where('leap' , 0)->basic()->active()->get();
?>
<style>
    .tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
    /*padding:50px;*/
    /*width: 100%;*/
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  /*top: 0%;*/
  left: 160%;
  margin-left: -60px;
}

/*.tooltip .tooltiptext::after {*/
/*  content: "";*/
/*  position: absolute;*/
/*  bottom: 100%;*/
/*  left: 50%;*/
/*  margin-left: -5px;*/
/*  border-width: 5px;*/
/*  border-style: solid;*/
/*  border-color: black transparent transparent transparent;*/
/*}*/

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
<div id="header_pc">
            <header class="tsul_header">
        <div class="logo_box" style="z-index: 100">
            <a href="/">
            <div  >
                <img src="{{asset('front_assets/assets/img/logo_university/_Sign logo_EN_primary.png')}}" alt="">
            </div>
                </a>
        </div>
        <div class="top_nav">
            <div class="left_top_nav">
                <div class="nav_social_box">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-telegram-plane"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
                <div>

                    <span class="main_links">
                        <a href="#">Абитуриентам</a>
                        <div class="mega_menu_custom" style="padding-top: 10px;">
                            <div class="top_dropbox_box">
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Поступление 2021</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>День открытых дверей</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Олимпиады</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Прием на 1 курс</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Прием в магистратуру</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Прием иностранных граждан</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Контакты приемной
                                    комиссии</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Задать вопрос</a>
                            </div>
                        </div>
                    </span>
                    <span class="main_links">
                        <a href="#">Студентам</a>
                        <div class="mega_menu_custom">
                            <div class="top_dropbox_box">
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Библиотека</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>E-university</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Первокурсникам</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Расписание занятий</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Расписание сессии</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Дистанционное обучение</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Иностранному студенту</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Стипендии и гранты</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Центр оказания услуг
                                    студентам</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Практика и
                                    трудоустройство</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Международная академическая
                                    мобильность</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Задать вопрос</a>
                            </div>
                        </div>
                    </span>
                    <span class="main_links">
                        <a href="#">Докторантам</a>
                        <div class="mega_menu_custom">
                            <div class="top_dropbox_box">
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Поступление</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Библиотека</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Корпоративный портал</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Дистанционное обучение</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Диссертационные советы</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Конференции</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Научные издания</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Задать вопрос</a>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <div class="right_top_nav">
                <div>
                    <span class="main_links">
                        <a href="#">Выпускникам</a>
                        <div class="mega_menu_custom">
                            <div class="top_dropbox_box">
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Клуб выпускников</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Образовательные программы для
                                    магистратуры</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Трудоустройство</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Задать вопрос</a>
                            </div>
                        </div>
                    </span>
                    <span class="main_links">
                        <a href="#">Сотрудникам</a>
                        <div class="mega_menu_custom">
                            <div class="top_dropbox_box">
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Корпоративная почта</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Работа в университете</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Профсоюз сотрудников</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Библиотека</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Задать вопрос</a>
                            </div>
                        </div>
                    </span>
                    <span class="main_links">
                        <a href="#">Партнерам</a>
                        <div class="mega_menu_custom">
                            <div class="top_dropbox_box">
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Вузы-партнеры</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Международные организации</a>
                                <a href="#" class="nav_dropdown_links"><i
                                        class="fas fa-caret-right mr-2 text-secondary"></i>Задать вопрос</a>
                            </div>
                        </div>
                    </span>

                </div>
                <div class="p-0 m-0 d-flex h-100 align-items-center">
                    <div class="language_box">
                        <div id="hlb" class="head_language_box">
                            <span id="selected_language">{{LaravelLocalization::getCurrentLocaleName()}}</span>
                            <span id="animating_icons_lang" class="animating_language_icon"><i
                                    class="fas fa-chevron-down"></i></span>
                        </div>
                        <div id="selecting_box_id" class="selecting_box">
                             @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if(app()->getLocale() != $localeCode)
                                            <span class="select-language-j" hreflang="{{ $localeCode }}" data-href="{{preg_replace("/^http:/i", "https:", LaravelLocalization::getLocalizedURL($localeCode, null, [], true))  }}">{{ $properties['native'] }}</span>
{{--                                            <span class="select-language-j" hreflang="{{ $localeCode }}" data-href="{{LaravelLocalization::getLocalizedURL($localeCode, null, [], true)  }}">{{ $properties['native'] }}</span>--}}
                                        @endif
                                    @endforeach
                        </div>
                    </div>
                    <span id="search_id" class="search_box  px-3"><i id="search_id_i"
                            class="fas fa-search"></i></span>
                    <span class="d-flex align-items-center px-3 "
                        style="height: 100%; background-color: #2C42A6;">
                        <div class="maxsusimkoniyat" style="font-size: 18px;">
                            <a href="dropdown" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-eye text-white" style="font-size: 15px;"></i></a>
                            <div class="dropdown-menu styledDrop dropdown-menu-right specialViewArea no-propagation"
                                x-placement="bottom-end"
                                style="position: absolute; transform: translate3d(97px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <div class="appearance">
                                    <p class="specialTitle">Ko'rinish</p>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcNormal" data-toggle="tooltip"
                                            data-placement="bottom" title="" data-title="Обычный режим">A
                                        </div>
                                    </div>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcWhiteAndBlack" data-toggle="tooltip"
                                            data-placement="bottom" title="">A</div>
                                    </div>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcDark" data-toggle="tooltip"
                                            data-placement="bottom" title="" data-original-title="Темный режим">
                                            A
                                        </div>
                                    </div>
                                </div>
                                <div class="appearance">
                                    <p class="specialTitle">Shirift o'lchami</p>
                                    <div class="block blocked">
                                        <div class="sliderText">Kattalashtirish <span class="range">0</span>%
                                        </div>
                                        <div id="fontSizer"
                                            class="defaultSlider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"
                                                style="width: 0%;"></div><span
                                                class="ui-slider-handle ui-state-default ui-corner-all"
                                                tabindex="0" style="left: 0%;"></span>
                                            <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
                                                style="width: 0%;"></div>
                                            <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
                                                style="width: 0%;"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- <p class="specialTitle">Masshtab</p>
                                    <div class="block">
                                        <div class="sliderZoom">Kattalashtirish <span class="range">0</span>%</div>
                                        <div id="zoomSizer" class="defaultSlider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                                    </div> -->

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="bottom_nav">
            <div class="left_bottom_nav">
                <span class="main_links" style="mr-0">
                        <a class="open-button" onclick="openFormTwo()"><i class="fas fa-th"></i></a>
                      </span>
                 <?php
                    $i = 1;
                 ?>
                  @foreach($menus as $menu)
                   <?php
                  $i++;
                   ?>
                    @if($i < 5)
                <span class="main_links">

                    <a href="#">{{$menu->$name_locale}}</a>
                    <div class="mega_menu_custom" style="padding-top: 33px;">
                        <div class="@if($menu->has_second_leap_child()) d-flex @else @endif bottom_dropbox_box" style="max-width: 1000px; flex-wrap: wrap ">
                                    <?php
                                    $j = 0;
                                    ?>
                                    @foreach($menu->childs() as $child)
                                        @if($child->status)
                                            <div class="text-left mx-3">
                                                <div class="mt-2">

                                                     @if($child->has_child())
                                                    <h6 class="font-weight-bold text-secondary menu-h " data-href="@if($child->slug){{$child->slug}}@else#@endif">{{$child->$name_locale}}</h6>
                                                    @else
                                                        <a href="@if($child->slug) {{$child->slug}}@else # @endif" class="nav_dropdown_links"><i
                                                            class="fas fa-caret-right mr-2 text-secondary"></i>{{$child->$name_locale}}</a>
                                                    @endif
                                                    @foreach($child->childs() as $chch)
                                                    <a href="@if($chch->slug) {{$chch->slug}}@else # @endif" class="nav_dropdown_links"><i
                                                            class="fas fa-caret-right mr-2 text-secondary"></i>{{$chch->$name_locale}}</a>
                                                     @endforeach

                                                        <?php $j++; ?>
                                                </div>
                                            </div>
                                         @endif
                                    @endforeach

                        </div>

                    </div>
                </span>

                       @endif
                @endforeach
            </div>
            <div class="right_bottom_nav">
                <?php
                    $i = 1;
                 ?>
                  @foreach($menus as $menu)
                   <?php
                  $i++;
                   ?>
                    @if($i >= 5)
                <span class="main_links">
                    <a href="#">{{$menu->$name_locale}}</a>
                    <div class="mega_menu_custom text-left" style="padding-top: 33px;">
                        <div class="@if($menu->has_second_leap_child()) d-flex @else @endif bottom_dropbox_box" style="max-width: 1000px; flex-wrap: wrap ">
                                    <?php
                                    $j = 0;
                                    ?>
                                    @foreach($menu->childs() as $child)
                                            <div class="text-left mx-3">
                                            <div class="mt-2">
                                                @if($child->has_child())
                                                <h6 class="font-weight-bold text-secondary menu-h" data-href="@if($child->slug){{$child->slug}}@else#@endif">{{$child->$name_locale}}</h6>
                                                @else
                                                    <a href="@if($child->slug) {{$child->slug}}@else # @endif" class="nav_dropdown_links"><i
                                                        class="fas fa-caret-right mr-2 text-secondary"></i>{{$child->$name_locale}}</a>
                                                @endif
                                                @foreach($child->childs() as $chch)
                                                <a href="@if($chch->slug) {{$chch->slug}}@else # @endif" class="nav_dropdown_links"><i
                                                        class="fas fa-caret-right mr-2 text-secondary"></i>{{$chch->$name_locale}}</a>
                                                 @endforeach

                                                    <?php $j++; ?>
                                            </div>
                                        </div>
                                    @endforeach
                        </div>
                    </div>
                </span>
                       @endif
                @endforeach
            </div>
        </div>
    </header>
        </div>
<div id="mobile_device">
            <div class="searching_box_m">
                <form id="searchingBox">
                    <input type="search" id="search_id_input_m">
                    <button><i class="fas fa-search" id="search_id_input_i_m"></i></button>
                </form>
            </div>
            <div class="mobile_menu d-flex">
                <div>
                    <span id="show-sidebar" style="font-size: 20px; cursor: pointer;"><i
                            class="fas fa-bars text-white"></i></span>
                </div>
                <div class="p-0 m-0 d-flex h-100 align-items-center">
                    <div class="language_box_m">
                        <div id="hlb_m" class="head_language_box" style="z-index: 2800;">
                            <span id="selected_language_m">{{LaravelLocalization::getCurrentLocaleName()}}</span>
                            <span id="animating_icons_lang_m" class="animating_language_icon"><i
                                    class="fas fa-chevron-down"></i></span>
                        </div>
                        <div id="selecting_box_id_m" class="selecting_box_m">
                             @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        @if(app()->getLocale() != $localeCode)
                                            <span class="select-language-j" hreflang="{{ $localeCode }}" data-href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</span>
                                        @endif
                                    @endforeach
                        </div>
                    </div>
                    <span id="search_id_m" class="search_box  px-3"><i id="search_id_i_m"
                            class="fas fa-search"></i></span>
                    <span class="d-flex align-items-center px-3 " style="height: 100%; background-color: #2C42A6;">
                        <div class="maxsusimkoniyat" style="font-size: 18px;">
                            <a href="dropdown" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-eye text-white" style="font-size: 15px;"></i></a>
                            <div class="dropdown-menu styledDrop dropdown-menu-right specialViewArea no-propagation"
                                x-placement="bottom-end"
                                style="position: absolute; transform: translate3d(97px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <div class="appearance">
                                    <p class="specialTitle">Ko'rinish</p>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcNormal" data-toggle="tooltip" data-placement="bottom"
                                            title="" data-title="Обычный режим">A
                                        </div>
                                    </div>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcWhiteAndBlack" data-toggle="tooltip"
                                            data-placement="bottom" title="">A</div>
                                    </div>
                                    <div class="squareAppearances">
                                        <div class="squareBox spcDark" data-toggle="tooltip" data-placement="bottom"
                                            title="" data-original-title="Темный режим">
                                            A
                                        </div>
                                    </div>
                                </div>
                                <div class="appearance">
                                    <p class="specialTitle">Shirift o'lchami</p>
                                    <div class="block blocked">
                                        <div class="sliderText">Kattalashtirish <span class="range">0</span>%
                                        </div>
                                        <div id="fontSizer"
                                            class="defaultSlider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"
                                                style="width: 0%;"></div><span
                                                class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                                style="left: 0%;"></span>
                                            <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
                                                style="width: 0%;"></div>
                                            <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
                                                style="width: 0%;"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <!-- <p class="specialTitle">Masshtab</p>
                                    <div class="block">
                                        <div class="sliderZoom">Kattalashtirish <span class="range">0</span>%</div>
                                        <div id="zoomSizer" class="defaultSlider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div></div>
                                    </div> -->

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <div class="page-wrapper chiller-theme ">
                <nav id="sidebar" class="sidebar-wrapper">
                    <!-- <span id="close-sidebar" class="text-white  close_btn" style="font-size: 20px;"><i
                            class="fas fa-times"></i></span> -->
                    <div class="sidebar-content">
                        <div class="sidebar-header">

                            <div class="user-pic">
                                <img class="img-responsive img-rounded" src="{{asset('front_assets/assets/img/logo_university/logo_white.png')}}"
                                    alt="User picture">
                            </div>
                            <div class="user-info">
                                ТАШКЕНТСКИЙ
                                ГОСУДАРСТВЕННЫЙ
                                ЮРИДИЧЕСКИЙ
                                УНИВЕРСИТЕТ
                            </div>
                        </div>
                        <div class="sidebar-menu pt-4">
                            <ul>
                                 @foreach($menus as $menu)
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fas fa-university"></i>
                                        <span>{{$menu->$name_locale}}</span>
                                    </a>
                                    @if($menu->has_child())
                                    <div class="sidebar-submenu">
                                        <ul>
                                            @foreach($menu->childs() as $child)
                                            <li class="sub_sub_link">
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>{{$child->$name_locale}}</a>
                                                @if($child->has_child())
                                                <div class="sub_sub_menu">
                                                    @foreach($child->childs() as $chch)
                                                    <span>
                                                        <a href="/rektor.html">- {{$chch->$name_locale}}</a>
                                                    </span>
                                                    @endforeach

                                                </div>
                                                @endif
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </li>
                                @endforeach
                                <li class="header-menu m-0 p-0">
                                    <span>Extra</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        <span>Новости</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-book-reader"></i>
                                        <span>Библиотека</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-microscope"></i>
                                        <span>Наука</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-blog"></i>
                                        <span>Онлайн</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-mail-bulk"></i>
                                        <span>Платформа кабинет</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- sidebar-menu  -->
                    </div>
                    <!-- sidebar-content  -->
                    <div class="sidebar-footer">
                        <a href="https://www.fb.com/tsulofficial" target="_blank">
                            <i class="fab fa-facebook text-white"></i>
                            <span class="badge badge-pill badge-warning notification">3</span>
                        </a>
                        <a href="https://t.me/tsulofficial" target="_blank">
                            <i class="fab fa-telegram text-white"></i>
                            <span class="badge badge-pill badge-warning notification">3</span>
                        </a>
                        <a href="https://twitter.com/tsulofficial" target="_blank">
                            <i class="fab fa-twitter text-white"></i>
                            <span class="badge badge-pill badge-success notification">7</span>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube text-white"></i>
                            <span class="badge badge-pill badge-success notification">7</span>
                        </a>
                        <a href="#">
                            <i class="fab fa-google-plus-g text-white"></i>
                            <span class="badge-sonar"></span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>



<div class="wrap  pop-upup">
        <div class="form-popup animate__animated animate__fadeInDown" id="myFormTwo">
            <div action="/action_page.php" class="form-container">
             <img class="animate__animated animate__fadeInDown animate__delay-1s" src="{{asset('front_assets/assets/img/logo_main_white.png')}}" alt="Network error!">
              <button type="button" class="btn cancel"  onclick="closeFormTwo()"><i class="fas fa-times"></i></button>


  <button  class="col-xl-12 button-open d-flex">

    <div class="top-icons">
        <a href="https://www.fb.com/tsulofficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://t.me/tsulofficial" target="_blank"><i class="fab fa-telegram-plane"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/tsulofficial" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>

      <div class="top-menu-linksTwo col-xl-12 d-flex">
          <a href="#">Университет</a>
          <a href="#">Образование</a>
          <a href="#">Наука</a>
          <a href="#">Международная деятельность</a>
          <a href="#">Студенческая жизнь</a>
          <a href="#">Приемная комиссия</a>
      </div>

  </button>

      <div class="panelTwo">
          <div class="row mt-3">
              <div class="col-xl-12 d-flex">
                  <div class="col-xl-3">
                      <ul>
                          <h6><a href="#">Университет</a></h6>
                          <h5><a href="about_university.html">Об университете</a></h5>
                          <li><a href="RectorsGreeting.html"><i class="fas fa-caret-right"></i>Приветствие ректора</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Миссия и ценности</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Отчеты и презентации</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Логотип и фирменный стиль</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Музей</a></li>

                          <h5><a href="#">Органы управления</a></h5>
                          <li><a href="administration.html"><i class="fas fa-caret-right"></i>Ректорат</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Попечительский совет</a></li>
                          <li><a href="#">Научный совет</a></li>

                          <h5><a href="#">Достижения</a></h5>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Цифры и факты</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Позиции в рейтингах</a></li>

                          <h5><a href="#">Общая структура университета</a></h5>
                          <li><a href="faculty_all.html"><i class="fas fa-caret-right"></i>Факультеты</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Управления</a></li>
                          <li><a href="center_all"><i class="fas fa-caret-right"></i>Центры</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Филиалы</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Академический лицей</a></li>
                          <h5><a href="#">Официальные документы</a></h5>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Сведения об образовательной организации</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Лицензия и аккредитация</a></li>
                          <li><a href="charter.html"><i class="fas fa-caret-right"></i>Устав</a></li>
                          <li><a href="Contact.html"><i class="fas fa-caret-right"></i>Реквизиты</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Противодействие коррупции</a></li>

                      </ul>
                  </div>

                  <div class="col-xl-3">
                      <ul>
                        <h5><a href="#">Пресс-служба</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Мероприятия</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Публикации в СМИ</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Медиацентр</a></li>

                        <h5><a href="Contact.html">Контакты</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Телефонный справочник</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Карта корпусов</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Виртуальная приёмная</a></li>

                        <h6 class="mt-5"><a href="#">Образование</a></h6>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Факультеты бакалавриата</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Направления магистратуры</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Послевузовское образование</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Стипендии и гранты</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Библиотека</a></li>
                          <li><a href="classes_schedule.html"><i class="fas fa-caret-right"></i>Расписание занятий</a></li>
                          <li><a href="Session_schedule.html"><i class="fas fa-caret-right"></i>Расписание сессии</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Дистанционное обучение</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Дополнительное профессиональное образование</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Платные образовательные услуги</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Государственная итоговая аттестация</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Конкурс на замещение вакантных должностей ППС</a></li>
                          <li><a href="#"><i class="fas fa-caret-right"></i>Практика и стажировка</a></li>
                      </ul>
                  </div>

                  <div class="col-xl-3">
                      <ul>
                            <h6><a href="#">Наука</a></h6>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Направления научных исследований</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Научная деятельность</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Публикации</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Совет молодых ученых</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Научные издания</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Авторефераты</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Фонд академических инноваций</a></li>
                            <li><a href="#"><i class="fas fa-caret-right"></i>Лаборатория Legal Tech</a></li>

                            <h6 class="mt-4"><a href="#">Международная деятельность</a></h6>
                        <h5><a href="#">Международные отношения</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Зарубежные партнеры – университеты</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Международные организации – партнеры</a></li>

                        <h5><a href="#">Академическая мобильность</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Совместные образовательные программы</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Образовательный курс University Foundation Program  совет</a></li>

                        <h5><a href="#">Исследовательские проекты</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Международные конференции, семинары и «круглые столы»</a></li>

                        <h5><a href="#">Международные студенты</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Прием иностранных студентов</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Программы академической мобильности</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Бакалавр</a></li>
                      </ul>
                  </div>

                  <div class="col-xl-3">
                    <ul>


                        <h5><a href="#">Пресс-служба</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Мероприятия</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Публикации в СМИ</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Медиацентр</a></li>
                        <h5><a href="3">Международные студенты</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Прием иностранных студентов</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Программы академической мобильности</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Бакалавр</a></li>

                        <h5><a href="Contact.html">Контакты</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Телефонный справочник</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Карта корпусов</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Виртуальная приёмная</a></li>

                        <h6 class="mt-5"><a href="#">Студенческая жизнь</a></h6>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Поощрение социальной активности</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Студенческие объединения</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Творческие студии и клубы по интересам</a></li>

                        <h6 class="mt-5"><a href="#">Приемная комиссия</a></h6>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Деятельность приемной комиссии</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Бакалавриат</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Магистратура</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Заочное обучение и второе высшее образование</a></li>
                    </ul>
                </div>

              </div>





              <div class="col-xl-12  mb-4">
                <button class="button-open animate__animated animate__fadeInUp" onclick="openForm()">

                    <div class="top-menu-linksNoactiveOne fixed-bottom d-flex">
                        <div class="animate__animated animate__fadeInUp animate__infinite">
                            <i class="fas fa-angle-double-up"></i>
                        </div>

                        <a href="#">Абитуриентам</a>
                        <a href="#">Студентам</a>
                        <a href="#">Докторантам</a>
                        <a href="#">Выпускникам</a>
                        <a href="#">Сотрудникам</a>
                        <a href="#">Партнерам</a>
                    </div>
                </button>
              </div>

          </div>
      </div>

            </div>
          </div>

        <div class="form-popup animate__animated animate__fadeInUp" id="myForm">
          <div action="/action_page.php" class="form-container">
           <img src="{{asset('front_assets/assets/img/logo_main_white.png')}}" alt="Network error!">
            <button type="button" class="btn cancel" onclick="closeAll()"><i class="fas fa-times"></i></button>

<div class="row">

    <button class="col-xl-12 button-open" onclick="closeForm()">

        <div class="top-menu-linksTwoNoactiveTwo col-xl-12 d-flex">
            <div class="animate__animated animate__fadeInDown animate__infinite">
                <i class="fas fa-angle-double-down"></i>
            </div>
            <a href="#">Университет</a>
            <a href="#">Образование</a>
            <a href="#">Наука</a>
            <a href="#">Международная деятельность</a>
            <a href="#">Студенческая жизнь</a>
            <a href="#">Приемная комиссия</a>
        </div>
    </button>

    <button  class="col-xl-12 button-open">

        <div class="top-icons">
            <a href="https://www.fb.com/tsulofficial" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://t.me/tsulofficial" target="_blank"><i class="fab fa-telegram-plane"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/tsulofficial" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>

        <div class="top-menu-links col-xl-12 d-flex" >
            <a href="#">Абитуриентам</a>
            <a href="#">Студентам</a>
            <a href="#">Докторантам</a>
            <a href="#">Выпускникам</a>
            <a href="#">Сотрудникам</a>
            <a href="#">Партнерам</a>
        </div>

    </button>



</div>




    <div class="panel">
        <div class="row mt-5">
            <div class="col-xl-12 d-flex">
                <div class="col-xl-2 d-block">
                    <ul>
                        <h5><a href="#">Абитуриентам</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Поступление 2021</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>День открытых дверей</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Олимпиады</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Прием на 1 курс</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Прием в магистратуру</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Прием иностранных граждан</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Контакты приемной комиссии</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Задать вопрос</a></li>
                    </ul>
                </div>

                <div class="col-xl-2">
                    <ul>
                        <h5><a href="#">Студентам</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Библиотека</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>E-university</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Первокурсникам</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Расписание занятий</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Расписание сессии</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Дистанционное обучение</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Иностранному студенту</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Стипендии и гранты</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Центр оказания услуг студентам</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Практика и трудоустройство</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Международная академическая мобильность</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Задать вопрос</a></li>
                    </ul>
                </div>

                <div class="col-xl-2">
                    <ul>
                        <h5><a href="#">Докторантам</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Поступление</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Библиотека</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Корпоративный портал</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Дистанционное обучение</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Диссертационные советы</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Конференции</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Научные издания</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Задать вопрос</a></li>
                    </ul>
                </div>

                <div class="col-xl-2 d-block">
                    <ul>
                        <h5><a href="#">Выпускникам</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Поступление 2021</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>День открытых дверей</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Олимпиады</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Прием на 1 курс</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Прием в магистратуру</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Прием иностранных граждан</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Контакты приемной комиссии</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Задать вопрос</a></li>
                    </ul>
                </div>

                <div class="col-xl-2">
                    <ul>
                        <h5><a href="#">Сотрудникам</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Библиотека</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>E-university</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Первокурсникам</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Расписание занятий</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Расписание сессии</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Дистанционное обучение</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Иностранному студенту</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Стипендии и гранты</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Центр оказания услуг студентам</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Практика и трудоустройство</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Международная академическая мобильность</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Задать вопрос</a></li>
                    </ul>
                </div>

                <div class="col-xl-2">
                    <ul>
                        <h5><a href="#">Партнерам</a></h5>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Поступление</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Библиотека</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Корпоративный портал</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Дистанционное обучение</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Диссертационные советы</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Конференции</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Научные издания</a></li>
                        <li><a href="#"><i class="fas fa-caret-right"></i>Задать вопрос</a></li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

          </div>
        </div>





        <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>

    <script>
    function openFormTwo() {
      document.getElementById("myFormTwo").style.display = "block";
    }

    function closeFormTwo() {
      document.getElementById("myFormTwo").style.display = "none";
    }
    </script>

    <script>
        function closeAll() {
            document.getElementById("myForm").style.display = "none";
            document.getElementById("myFormTwo").style.display= "none";
        }
    </script>

    </div>
