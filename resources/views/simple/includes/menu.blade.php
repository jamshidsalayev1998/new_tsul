<?php
$locale = app()->getLocale();
$name_locale = 'name_' . $locale;
$menus = 'App\Menu'::where('leap', 0)->orderBy('order' , 'ASC')->basic()->active()->get();
$menus_top_all = 'App\MenuTop'::where('leap', 0)->orderBy('order' , 'ASC')->basic()->active()->get();
$menus_top = 'App\MenuTop'::where('leap', 0)->orderBy('order' , 'ASC')->basic()->active()->take(2)->get();
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
    <div class="searching_box">
                <form id="searchingBox">
                    <input type="search" id="search_id_input">
                    <button> <i class="fas fa-search" id="search_id_input_i"></i></button>
                </form>
            </div>
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




<!-- <style>
/* The popup form - hidden by default */
.rn_form-popup {
  display: none;
  position: fixed;
  top: 100px;
  left: 105px;
  border: 1px solid #f0f0f0;
  border-radius: 7px;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  z-index: 9;
}

/* Add styles to the form container */
.rn_form-container {
  max-width: 300px;
  padding: 10px;
  background-color: #fafafa;
}
.rn_form-container  h1{
color: #2f54eb;
 font-size: medium;
 font-weight: 600;
 margin: 7px;
}

/* Set a style for the submit/login button */
.rn_form-container .btn {
  color: white;
   border: none;
  cursor: pointer;
  width: auto;
   opacity: 0.8;
}

/* Add a red background color to the cancel button */
.rn_form-container .cancel {
  background-color: red;
  font-size: 10px !important;
}

.rn_pop-up-contact {
    margin: 10px;
}

.rn_pop-up-contact ul li{
    margin: 5px;
    font-size: medium;
    list-style-type:none;
}
.rn_pop-up-contact ul{
margin-left: -20px;
padding: 15px;
   top: 0;
   left: 0;
}

.rn_pop-up-contact ul li i{
  color: #2f54eb;
  background-color: #fff;
  border: 1px solid #f5f5f5;
  border-radius: 3px;
  padding: 3px;
}

</style> -->

<script>

</script>


                    <a href="https://www.fb.com/tsulofficial"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://t.me/tsulofficial"><i class="fab fa-telegram-plane"></i></a>
                    <a href="https://www.instagram.com/tsulofficial/"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/tashkentlaw"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg"><i
                            class="fab fa-youtube"></i></a>

                            <!-- top icon pop up contact form -->
                            <!-- <a  onclick="openForm()"><i class="fas fa-phone"></i></a>    -->

<!--
<div class="rn_form-popup" id="myForm">
  <div class="rn_form-container">
  <div class="d-flex text-center" style="position: relative;">
    <h1>@lang('index.pop-up-contact')</h1>
    <button type="button" class="btn cancel float-right" onclick="closeForm()" style="position: absolute; top:0; right:0;">x</button>
  </div>
            <div class="rn_pop-up-contact">
                <ul>
                    <li><b><i class="fas fa-phone"></i>&nbsp;: </b>+998 71 233-66-36</li>
                    <li><b><i class="fas fa-fax"></i>&nbsp;: </b>+998 71 233-37-48</li>
                    <li><b><i class="fas fa-envelope"></i>&nbsp;: </b>info@tsul.uz</li>
                </ul>
            </div>
  </div>
</div> -->


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

                <div class="m-2">

                <div class="text-center m-0 p-0 mb-1" style="border-radius: 10px;
    background-color: #2C42A6;">
                    <!-- //Start using services  modal -->
                    <span class="align-items-center px-3">
                       <span class="fw-3 text-white" style="font-size: small;" type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#PC_modal">@lang('index.Xizmatlardan foydalanish')
                       </span>
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
                                        <span class="select-language-j" hreflang="{{ $localeCode }}"
                                              data-href="{{preg_replace("/^http:/i", "https:", LaravelLocalization::getLocalizedURL($localeCode, null, [], true))  }}">{{ $properties['native'] }}</span>
                                        {{--                                            <span class="select-language-j" hreflang="{{ $localeCode }}" data-href="{{LaravelLocalization::getLocalizedURL($localeCode, null, [], true)  }}">{{ $properties['native'] }}</span>--}}
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <span id="search_id" class="search_box  px-3"><i id="search_id_i"
                                                                         class="fas fa-search"></i>
                                                                        </span>
                        <a href="/symbols" class="symbols_box">
                            <img src="{{asset('front_assets/assets/img/gerb1.png')}}" width="30px" height="100%" alt="">
                        </a>

                        <span class="d-flex align-items-center px-3 "
                              style="height: 100%;">
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

    <!--Using services modal -->
<div class="modal top fade" id="PC_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel" style="color:#1d39c4;">@lang('index.Pullik xizmatlardan foydalanish')</h5>
        <button type="button" class="btn-close text-danger" data-mdb-dismiss="modal" style="font-size:small !important;"></button>
      </div>


    <form  action="{{route('simple.services')}}" method="post" class="m-4">
      @csrf
  <!-- fio -->
        <div class="form-outline mb-4">
            <input name="fio" type="text" required="true" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1">@lang('index.Ism va familyangiz')</label>
          </div>

  <!-- Phone -->
       <div class="form-outline mb-4">
            <input name="phone" type="number" required="true" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example6">@lang('index.Telifon raqamingiz')</label>
        </div>


  <!-- Email input -->
      <!-- <div class="form-outline mb-4">
        <input name="email" type="email" required="true" id="form6Example5" class="form-control" />
        <label class="form-label" for="form6Example5">@lang('index.Email')</label>
      </div> -->

  <!-- Submit button -->
      <button type="submit"  class="btn" style="background-color:#1d39c4; color: white; text-transform: lowercase">@lang('index.Yuborish')</button>
    </form>

    </div>
  </div>
</div>


<script>
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.mdb.modal', () => {
  myInput.focus()
})
</script>
<!-- //End Using services  modal -->

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
                                                <div class="@if($child->has_child()) mt-2 @endif"
                                                     style="max-width: 250px">

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
                        @lang('index.Mobile-logo')
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
                                                <a href="@if($child->slug && (!$child->has_child())){{$child->slug}} @else {{'#'}}@endif">
                                                    <i class="fas fa-caret-right mr-0"></i>
                                                        {{$child->$name_locale}}
                                                    </a>
                                                    @if($child->has_child())
                                                        <div class="sub_sub_menu">
                                                            <span>
                                                                <a href="@if($child->slug){{$child->slug}}@endif">-  {{$child->$name_locale}}</a>
                                                            </span>
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
                            <span>@lang('index.Extra')</span>
                        </li>
<!-- //button using services  modal -->
                        <li>
                            <a href="#">
                            <i class="fas fa-envelope-open-text"></i>
                                <span data-mdb-toggle="modal" data-mdb-target="#MB_modal">@lang('index.Xizmatlardan foydalanish')</span>
                            </a>
                        </li>
                        <!--Using services  mobile modal -->
<div class="modal top fade" id="MB_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel" style="color:#1d39c4;">@lang('index.Xizmatlardan foydalanish')</h5>
        <button type="button" class="btn-close text-danger" data-mdb-dismiss="modal" style="font-size:small !important;"></button>
      </div>


    <form  action="{{route('simple.services')}}" method="post" class="m-4">
      @csrf
  <!-- fio -->
        <div class="form-outline mb-4">
            <input name="fio" type="text" required="true" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1">@lang('index.Ism va familyangiz')</label>
          </div>

  <!-- Phone -->
       <div class="form-outline mb-4">
            <input name="phone" type="number" required="true" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example6">@lang('index.Telifon raqamingiz')</label>
        </div>


  <!-- Email input -->
      <div class="form-outline mb-4">
        <input name="email" type="email" required="true" id="form6Example5" class="form-control" />
        <label class="form-label" for="form6Example5">@lang('index.Email')</label>
      </div>

  <!-- Submit button -->
      <button type="submit"  class="btn" style="background-color:#1d39c4; color: white; text-transform: lowercase">@lang('index.Yuborish')</button>
    </form>

    <script>
const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.mdb.modal', () => {
  myInput.focus()
})
</script>

    </div>
  </div>
</div>



<!-- //End Using services mobile modal -->

                        <li>
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>@lang('index.NewsM')</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-book-reader"></i>
                                <span>@lang('index.Библиотека')</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-microscope"></i>
                                <span>@lang('index.Наука')</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-blog"></i>
                                <span>@lang('index.Онлайн')</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-mail-bulk"></i>
                                <span>@lang('index.Платформа кабинет')</span>
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
                    <span class="badge badge-pill badge-warning notification">@lang('index.mfb')</span>
                </a>
                <a href="https://t.me/tsulofficial" target="_blank">
                    <i class="fab fa-telegram text-white"></i>
                    <span class="badge badge-pill badge-warning notification">@lang('index.mtg')</span>
                </a>
                <a href="https://twitter.com/tashkentlaw" target="_blank">
                    <i class="fab fa-twitter text-white"></i>
                    <span class="badge badge-pill badge-success notification">@lang('index.mtw')</span>
                </a>
                <a href="#">
                    <i class="fab fa-youtube text-white"></i>
                    <span class="badge badge-pill badge-success notification">@lang('index.myb')</span>
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
