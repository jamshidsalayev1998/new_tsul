<?php
$locale = app()->getLocale();
$name_locale = 'name_'.$locale;
$menus = 'App\Menu'::where('leap' , 0)->basic()->get();
?>
<div id="header_pc">
            <header class="tsul_header">
        <div class="logo_box">
            <div>
                <img src="{{asset('front_assets/assets/img/logo_university/_Sign logo_EN_primary.png')}}" alt="">
            </div>
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
                            <span id="selected_language">O'zbekcha</span>
                            <span id="animating_icons_lang" class="animating_language_icon"><i
                                    class="fas fa-chevron-down"></i></span>
                        </div>
                        <div id="selecting_box_id" class="selecting_box">
                            <span>Ўзбекча</span>
                            <span>Русский</span>
                            <span>English</span>
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
                 <?php
                    $i = 1;
                 ?>
                  @foreach($menus as $menu)
                   <?php
                  $i++;
                   ?>
                    @if($i < 3)
                <span class="main_links">
                    <a href="#">{{$menu->$name_locale}}</a>
                    <div class="mega_menu_custom" style="padding-top: 33px;">
                        <div class="d-flex bottom_dropbox_box" style="max-width: 1000px; flex-wrap: wrap ">
                                    <?php
                                    $j = 0;
                                    ?>
                                    @foreach($menu->childs() as $child)
                                            <div class="text-left mx-3">
                                            <div class="mt-2">

                                                <h6 class="font-weight-bold text-secondary">{{$child->$name_locale}}</h6>
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
                <span class="main_links">
                    <a href="#">Образование</a>
                    <div class="mega_menu_custom text-left" style="padding-top: 33px;">
                        <div class="bottom_dropbox_box">
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Факультеты бакалавриата</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Направления магистратуры</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Послевузовское образование</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Стипендии и гранты</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Библиотека</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Расписание заняти</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Расписание сессии</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Дистанционное обучение</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Дополнительное профессиональное
                                образование</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Платные образовательные
                                услуги</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Государственная итоговая
                                аттестация</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Конкурс на замещение вакантных
                                должностей ППС</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Практика и стажировка</a>
                        </div>
                    </div>
                </span>
                <span class="main_links">
                    <a href="#">Наука</a>
                    <div class="mega_menu_custom text-left" style="padding-top: 33px;">
                        <div class="bottom_dropbox_box">
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Направления научных
                                исследований</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Научная деятельность</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Публикации</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Совет молодых ученых</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Научные издания</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Авторефераты</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Фонд академических инноваций</a>
                            <a href="#" class="nav_dropdown_links"><i
                                    class="fas fa-caret-right mr-2 text-secondary"></i>Лаборатория Legal Tech</a>
                        </div>
                    </div>
                </span>
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
                        <div class="d-flex bottom_dropbox_box" style="max-width: 1000px; flex-wrap: wrap ">
                                    <?php
                                    $j = 0;
                                    ?>
                                    @foreach($menu->childs() as $child)
                                            <div class="text-left mx-3">
                                            <div class="mt-2">

                                                <h6 class="font-weight-bold text-secondary">{{$child->$name_locale}}</h6>
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
                            <span id="selected_language_m">O'zbekcha</span>
                            <span id="animating_icons_lang_m" class="animating_language_icon"><i
                                    class="fas fa-chevron-down"></i></span>
                        </div>
                        <div id="selecting_box_id_m" class="selecting_box_m">
                            <span>Ўзбекча</span>
                            <span>Русский</span>
                            <span>English</span>
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
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fas fa-university"></i>
                                        <span>Университет</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#" class="submenu_child"> <i
                                                        class="fas fa-caret-right mr-0"></i>Об университете</a>
                                            </li>
                                            <li class="sub_sub_link">
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Ректорат</a>
                                                <div class="sub_sub_menu">
                                                    <span>
                                                        <a href="/rektor.html">- Ректор</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="/not_found.html">- Проректор по учебной работе</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="/not_found.html">- Проректор по научной работе и
                                                            инновациям</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="/not_found.html">- Проректор по работе с молодежью</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="/not_found.html">- Проректор по международному
                                                            сотрудничеству и
                                                            непрерывному образованию</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="/not_found.html">- Проректор по финансовой и
                                                            экономической</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Факултеты</a>
                                                <div class="fgfg" style="background-color: green; display: none;">
                                                    <span>
                                                        <a href="#"></a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Отделы</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Центры</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Вакансии</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fas fa-graduation-cap"></i>
                                        <span>Новости</span>
                                    </a>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fas fa-user-graduate"></i>
                                        <span>Объявление</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#" class="submenu_child"> <i
                                                        class="fas fa-caret-right mr-0"></i>Всем</a>
                                            </li>
                                            <li class="sub_sub_link">
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Ректорат</a>
                                                <div class="sub_sub_menu">
                                                    <span>
                                                        <a href="#">- Ректор</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по учебной работе</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по научной работе и инновациям</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по работе с молодежью</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по международному сотрудничеству и
                                                            непрерывному образованию</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по финансовой и экономической</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Студентам</a>
                                                <div class="sub_sub_menu">
                                                    <span>
                                                        <a href="#">- Ректор</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по учебной работе</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по научной работе и инновациям</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по работе с молодежью</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по международному сотрудничеству и
                                                            непрерывному образованию</a>
                                                    </span>
                                                    <span class="border-top">
                                                        <a href="#">- Проректор по финансовой и экономической</a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Магистрантам</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Учителям</a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fas fa-caret-right mr-0"></i>Сотрудникам</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>Международное сотрудничество</span>
                                    </a>
                                </li>
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
