@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/contact_css/contact.css')}}">
@endsection
@section('content')
    <?php
$about = 'App\AboutUniversity'::where('status' , 1)->first();
$locale = app()->getLocale();
        $name_locale = 'name_'.$locale;
        $short_desc_locale = 'short_description_'.$locale;
        $full_inf_locale = 'full_information_'.$locale;
        $address_locale = 'address_'.$locale;
        $logo_locale = 'front_assets/assets/img/logo_university/TDYU_'.$locale.'_white.png';
?>
    </div>
            <!--Main content-->
            <div class="container mt-4 mb-4">
                <div class="row card-map_main">
                    <div class="col-md-8">
                        <div class="card-map">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aff74afcb8a7194150c0d50941943a50329548f652033ca20bb5ab6dc1a80a85f&amp;
                            width=300px&amp;height=500px&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                    <div class="col-md-4 card-body">
                        <div class=" contact">
                            <h2 class="card-title">@lang('index.Контакт')</h2>
                            <br><br>
                            <p>@lang('index.Щелкните по нему, чтобы скопировать данные')</p>
                        </div>
                        <div class="contact-info">
                            <a href="tel:{{$about->phone}}" id="cp_btn"><i class="fas fa-mobile-alt"><span id="pwd_spn" class="ml-3">{{$about->phone}}</span></i></a>
                            <br>
                            <a href="#" id="cp_btn3"><i class="fas fa-fax"><span id="pwd_spn3" class="ml-3">{{$about->faks}}</span></i></a>
                            <br>
                            <a href="mailto:{{$about->email}}" id="cp_btn4"><i class="fas fa-envelope"><span id="pwd_spn4"
                                        class="ml-3">{{$about->email}}</span></i></a>
                            <br>
                            <a
                                href="https://yandex.uz/maps/10335/tashkent/?from=api-maps&ll=69.202046%2C41.280734&mode=usermaps&origin=jsapi_2_1_78&um=constructor%3Aff74afcb8a7194150c0d50941943a50329548f652033ca20bb5ab6dc1a80a85f&z=11"><i
                                    class="fas fa-map-marker-alt"><span class="ml-3">{{$about->$address_locale}}</span></i></a>

                        </div>

                        <div class="social-icons-list">
                            <ul>
                                <li><a href="https://www.facebook.com/tsulofficial"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/tsulofficial"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/tsulofficial/"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://t.me/tsulofficial"><i class="fab fa-telegram-plane"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
