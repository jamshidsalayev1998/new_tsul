<?php
$about = 'App\AboutUniversity'::where('status' , 1)->first();
$locale = app()->getLocale();
        $name_locale = 'name_'.$locale;
        $short_desc_locale = 'short_description_'.$locale;
        $full_inf_locale = 'full_information_'.$locale;
        $address_locale = 'address_'.$locale;
?>
<footer class="eighth-part w-100">
            <div class="footer_img_box">
                <img src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="img not found">
            </div>
            <div class="footer_data_box">
                <div class="container">
                    <div class="footer_box">
                        <div>
                            <div>
                                <div class="footer_logo_box">
                                    <img src="{{asset('front_assets/assets/img/logo_university/TDYU_UZ_white.png')}}" alt="">
                                </div>
                                <h5 class="footer_about_universty">
                                    {!! $about->$short_desc_locale !!}
                                </h5>
                            </div>
                        </div>
                        <div>
                            <h5 class="footer_title_columns">@lang('index.Контакт')</h5>
                            <div>
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    <span>@lang('index.Тел'): {{$about->phone}}</span>
                                </p>
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-fax mr-2"></i>
                                    <span>@lang('index.Факс'): {{$about->faks}}</span>
                                </p>
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span>@lang('index.e-mail'): <a href="#"
                                            style="font-size: 16px; font-weight: 600; color: white;">{{$about->email}}</a></span>
                                </p>
                                <p>
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                    <span style="font-size: 16px; font-weight: 600;">{{$about->$address_locale}}</span>
                                </p>
                                <p class="mt-4">
                                    <a href="{{$about->twitter}}" class="footer_icons" target="_blank"
                                        rel="noopener noreferrer">
                                        <i class="fab fa-twitter"></i></a>
                                    <a href="{{$about->telegram}}" target="_blank" class="footer_icons"
                                        rel="noopener noreferrer">
                                        <i class="fab fa-telegram-plane"></i>
                                    </a>
                                    <a href="{{$about->youtube}}"
                                        class="footer_icons" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a href="{{$about->instagram}}" class="footer_icons"
                                        target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-instagram"></i></a>
                                    <a href="{{$about->facebook}}" target="_blank" class="footer_icons"
                                        rel="noopener noreferrer">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>

                                </p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h5 class="footer_title_columns">@lang('index.Локация') </h5>
                                <div class="mt-3">
                                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aff74afcb8a7194150c0d50941943a50329548f652033ca20bb5ab6dc1a80a85f&amp;
                                width=100%&amp;height=200&amp;lang=ru_RU&amp;scroll=true"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
{{--        <div class="footer_info">--}}
{{--            <div class="container">--}}
{{--                <span class="d-block text-center">Внимаиние! если вы нашли ошибку в тексте, выделите её и нажмите--}}
{{--                    Ctrl+Enter--}}
{{--                    для уведомления--}}
{{--                    администрации--}}
{{--                </span>--}}
{{--            </div>--}}
{{--        </div>--}}
