<?php
$locale = app()->getLocale();
$name_locale = 'name_' . $locale;
$menus = 'App\Menu'::where('leap', 0)->basic()->active()->get();
$menus_top_all = 'App\MenuTop'::where('leap', 0)->basic()->active()->get();
$menus_top = 'App\MenuTop'::where('leap', 0)->basic()->active()->take(3)->get();
$menus_top_last = 'App\MenuTop'::where('leap', 0)->orderBy('id', 'DESC')->basic()->active()->take(3)->get()->reverse();
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
                <div>
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
                    @foreach($menus_top as $m_t)
                        <span class="main_links">
                        <a href="@if($m_t->slug){{$m_t->slug}} @else # @endif">{{$m_t->$name_locale}}</a>
                        <div class="mega_menu_custom" style="padding-top: 10px;">
                            @if($m_t->has_child())
                                <div class="top_dropbox_box">
                                @foreach($m_t->childs() as $m_t_ch)
                                        <a href="@if($m_t_ch->slug){{$m_t_ch->slug}} @else # @endif"
                                           class="nav_dropdown_links"><i
                                                class="fas fa-caret-right mr-2 text-secondary"></i>{{$m_t_ch->$name_locale}}</a>
                                    @endforeach
                            </div>
                            @endif
                        </div>
                    </span>
                    @endforeach

                </div>
            </div>
            <div class="right_top_nav">
                <div>
                    @foreach($menus_top_last as $m_t)
                        <span class="main_links">
                        <a href="@if($m_t->slug){{$m_t->slug}} @else # @endif">{{$m_t->$name_locale}}</a>
                        <div class="mega_menu_custom" style="padding-top: 10px;">
                            @if($m_t->has_child())
                                <div class="top_dropbox_box">
                                @foreach($m_t->childs() as $m_t_ch)
                                        <a href="@if($m_t_ch->slug){{$m_t_ch->slug}} @else # @endif"
                                           class="nav_dropdown_links"><i
                                                class="fas fa-caret-right mr-2 text-secondary"></i>{{$m_t_ch->$name_locale}}</a>
                                    @endforeach
                            </div>
                            @endif
                        </div>
                    </span>
                    @endforeach

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
                                    <span class="select-language-j" hreflang="{{ $localeCode }}"
                                          data-href="{{preg_replace("/^http:/i", "https:", LaravelLocalization::getLocalizedURL($localeCode, null, [], true))  }}">{{ $properties['native'] }}</span>
                                    {{--                                            <span class="select-language-j" hreflang="{{ $localeCode }}" data-href="{{LaravelLocalization::getLocalizedURL($localeCode, null, [], true)  }}">{{ $properties['native'] }}</span>--}}
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <span id="search_id" class="search_box  px-3"><i id="search_id_i"
                                                                     class="fas fa-search"></i></span>
                    <a href="/symbols" class="symbols_box">
                        <img src="{{asset('front_assets/assets/img/gerb1.png')}}" width="30px" height="100%" alt="">
                    </a>
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
                                            <div
                                                class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"
                                                style="width: 0%;"></div><span
                                                class="ui-slider-handle ui-state-default ui-corner-all"
                                                tabindex="0" style="left: 0%;"></span>
                                            <div
                                                class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
                                                style="width: 0%;"></div>
                                            <div
                                                class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
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
                <span class="main_links" style="">
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
                        <div class="bottom_dropbox_box"
                             style=" ">
                                    <?php
                            $j = 0;
                            ?>
                            @foreach($menu->childs() as $child)
                                @if($child->status)
                                    <div class="text-left mx-3">
                                                <div class="@if($child->has_child()) mt-2 @endif" style="max-width: 250px">

                                                     @if($child->has_child())
                                                        <h6 class="font-weight-bold text-secondary menu-h "
                                                            data-href="@if($child->slug){{$child->slug}}@else#@endif">{{$child->$name_locale}}</h6>
                                                    @else
                                                        <a href="@if($child->slug) {{$child->slug}}@else # @endif"
                                                           class="nav_dropdown_links"><i
                                                                class="fas fa-caret-right mr-2 text-secondary"></i>{{$child->$name_locale}}</a>
                                                    @endif
                                                    @foreach($child->childs() as $chch)
                                                        <a href="@if($chch->slug) {{$chch->slug}}@else # @endif"
                                                           class="nav_dropdown_links"><i
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
                        <div class=" bottom_dropbox_box"
                             style=" ">
                                    <?php
                            $j = 0;
                            ?>
                            @foreach($menu->childs() as $child)
                                <div class="text-left mx-3">
                                            <div class="mt-2" style="max-width: 250px">
                                                @if($child->has_child())
                                                    <h6 class="font-weight-bold text-secondary menu-h"
                                                        data-href="@if($child->slug){{$child->slug}}@else#@endif">{{$child->$name_locale}}</h6>
                                                @else
                                                    <a href="@if($child->slug) {{$child->slug}}@else # @endif"
                                                       class="nav_dropdown_links"><i
                                                            class="fas fa-caret-right mr-2 text-secondary"></i>{{$child->$name_locale}}</a>
                                                @endif
                                                @foreach($child->childs() as $chch)
                                                    <a href="@if($chch->slug) {{$chch->slug}}@else # @endif"
                                                       class="nav_dropdown_links"><i
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
                            <span class="select-language-j" hreflang="{{ $localeCode }}"
                                  data-href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</span>
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
                                            <div
                                                class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"
                                                style="width: 0%;"></div><span
                                                class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                                style="left: 0%;"></span>
                                            <div
                                                class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
                                                style="width: 0%;"></div>
                                            <div
                                                class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min"
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
                        <img class="img-responsive img-rounded"
                             src="{{asset('front_assets/assets/img/logo_university/logo_white.png')}}"
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
                                                    <a href="#"> <i
                                                            class="fas fa-caret-right mr-0"></i>{{$child->$name_locale}}
                                                    </a>
                                                    @if($child->has_child())
                                                        <div class="sub_sub_menu">
                                                            @foreach($child->childs() as $chch)
                                                                <span>
                                                        <a href="@if($chch->slug){{$chch->slug}}@else # @endif">- {{$chch->$name_locale}}</a>
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
@include('simple.includes.pop_up_menu')
