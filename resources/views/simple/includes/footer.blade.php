<?php
$about = 'App\AboutUniversity'::where('status' , 1)->first();
$locale = app()->getLocale();
        $name_locale = 'name_'.$locale;
        $short_desc_locale = 'short_description_'.$locale;
        $full_inf_locale = 'full_information_'.$locale;
        $address_locale = 'address_'.$locale;
        $logo_locale = 'front_assets/assets/img/logo_university/TDYU_'.$locale.'_white.png';
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
                                <div style="height: auto !important; width:auto;" class="footer_logo_box">
                                    <img src="{{asset($logo_locale)}}" alt="">
                                </div>
                                <h5 class="footer_about_universty">
                                    {!! $about->$short_desc_locale !!}
                                </h5>
                            </div>
                        </div>
                        <div>
                            <h5 class="footer_title_columns">@lang('index.Контакт')</h5>
                            <div>
                                @if($about->kommutator_phone)
                                 <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    <span>@lang('index.Kommutator'): {!! $about->kommutator_phone !!}</span>
                                </p>
                                @endif
                                @if($about->qabul_phone)
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    <span>@lang('index.Qabul bo‘limi'): {{ $about->qabul_phone }}</span>
                                </p>
                                @endif
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-fax mr-2"></i>
                                    <span>@lang('index.Факс'): {{$about->faks}}</span>
                                </p>
                                @if($about->ishonch_phone)
                                 <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-phone-alt mr-2"></i>
                                    <span>@lang('index.Korrupsiya haqida xabar berish uchun ishonch telefoni'): {{ $about->ishonch_phone }}</span>
                                </p>
                                @endif
                                <p class="mt-3" style="font-size: 16px; font-weight: 600;">
                                    <i class="fas fa-envelope mr-2"></i>
                                    <span>@lang('index.e-mail'): <a class="owlItems" href="mailto:{{$about->email}}"
                                            style="font-size: 16px; font-weight: 600; color: white;">{{$about->email}}</a></span>
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
                                @if($about->map_link)
                                <div class="mt-3">
                                    {!! $about->map_link !!}
                                </div>
                                @endif
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
