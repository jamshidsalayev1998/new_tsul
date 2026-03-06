@extends('simple.layouts.master')

@section('content')
    <?php
    $locale = app()->getLocale();
    $main_rektor_word_locale = 'main_rektor_word_' . $locale;
    $short_info_locale = 'short_info_' . $locale;
    $duties_locale = 'duties_' . $locale;
    $biography_locale = 'biography_' . $locale;
    $reception_days_locale = 'reception_days_' . $locale;
    $full_name_locale = 'full_name_' . $locale;
                                    ?>
    <div class="rectors_page pb-5">
  <div id="rectorHero" style="position:relative;width:100%;height:520px;overflow:hidden;background:#f2f4f8;">

  <!-- Rasm -->
  <img
    id="rectorHeroImg"
    src="{{asset('')}}{{$data->main_image}}"
    alt=""
    style="
      position:absolute;left:0;top:0;
      width:56%;height:100%;
      object-fit:cover;
      object-position:center;
      display:block;
      z-index:1;
    "
  />

  <!-- O'ng fon + yumshoq gradient -->
  <div
    id="rectorHeroBg"
    style="
      position:absolute;right:0;top:0;
      width:44%;height:100%;
      background: linear-gradient(to left,#f2f4f8 70%, rgba(242,244,248,0));
      z-index:2;
      pointer-events:none;
    "
  ></div>

  <!-- Matn paneli -->
  <div
    id="rectorHeroText"
    style="
      position:absolute;left:28px;bottom:24px;
      z-index:3;
      max-width:520px;
      padding:14px 18px;
      border-radius:14px;
      background:rgba(0,0,0,0.48);
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      color:#fff;
    "
  >
    <div id="rectorHeroName" style="font-size:26px;font-weight:700;line-height:1.15;margin:0;">
      {{$data->$full_name_locale}}
    </div>
    <div id="rectorHeroRole" style="margin-top:6px;font-size:16px;font-weight:500;opacity:0.95;">
      @lang('index.Huquqshunos, 1-darajali adliya maslahatchisi')
    </div>
  </div>

</div>

<style>
  /* XL va XXL: aniq 50/50 */
  @media (min-width: 1200px) {
    #rectorHeroImg { width: 50% !important; }
    #rectorHeroBg  { width: 50% !important; }
  }

  /* XXL: balandlik biroz katta bo'lsin */
  @media (min-width: 1400px) {
    #rectorHero { height: 560px !important; }
  }

  /* Tablet/Mobile: rasm 100%, fon pastdan qorayib chiqadi, matn to'liq ko'rinadi */
  @media (max-width: 991px) {
    #rectorHero { height: 420px !important; }

    #rectorHeroImg{
      width: 100% !important;
      height: 100% !important;
      object-position: center !important;
    }

    #rectorHeroBg{
      width: 100% !important;
      left: 0 !important;
      right: auto !important;
      background: linear-gradient(to top, rgba(0,0,0,0.60) 0%, rgba(0,0,0,0) 60%) !important;
    }

    #rectorHeroText{
      left: 16px !important;
      right: 16px !important;
      bottom: 16px !important;
      max-width: none !important;
    }

    #rectorHeroName{ font-size: 20px !important; }
    #rectorHeroRole{ font-size: 14px !important; }
  }


  /* Wrapper card */
.short_card_about_rector{
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 28px;

  background: #ffffff;
  border-radius: 18px;
  padding: 22px;
  margin: 26px 0;

  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  border: 1px solid rgba(0,0,0,0.06);

  overflow: hidden;
}

/* Left image block */
.rp_about_img{
  border-radius: 16px;
  overflow: hidden;

  background: #1f2f7a; /* chap fon ko'k bo'lib chiroyli chiqadi */
  min-height: 260px;

  display: flex;
  align-items: center;
  justify-content: center;

  padding: 14px;
}

/* Image itself */
.rp_about_img img{
  width: 100% !important;
  height: 100%;
  max-height: 360px;
  object-fit: cover !important; /* contain emas, cover bo'lsa chiroyli */
  border-radius: 12px;
}

/* Right side contact box */
.rp_contact{
  width: 100%;
  max-width: 520px;

  padding: 10px 8px;
}

/* Title */
.rp_contact h3{
  font-size: 30px;
  font-weight: 800;
  margin-bottom: 18px;
  color: #1b2a6b;
}

/* Contact rows */
.rp_contact p{
  display: flex;
  align-items: center;
  gap: 10px;

  margin: 12px 0;
  padding: 12px 14px;

  border-radius: 12px;
  background: #f6f8fc;
  border: 1px solid rgba(27,42,107,0.08);

  color: #1a1a1a;
  font-size: 16px;
}

/* Left label (Phone/Email/...) */
.rp_contact p span.font-weight-bold{
  color: #1b2a6b;
  white-space: nowrap;
}

/* Icons */
.rp_contact i{
  color: #1b2a6b;
  font-size: 20px;
}

/* Social row (last p) */
.rp_contact .rp_contact_details_element:last-child{
  background: transparent;
  border: none;
  padding: 6px 0;
  margin-top: 12px;
}

/* Social icons */
.rp_contact a{
  display: inline-flex;
  align-items: center;
  justify-content: center;

  width: 42px;
  height: 42px;

  border-radius: 12px;
  background: #f0f3ff;
  border: 1px solid rgba(27,42,107,0.12);

  transition: transform .15s ease, background .15s ease;
  text-decoration: none;
}

.rp_contact a i{
  font-size: 22px;
}

.rp_contact a:hover{
  transform: translateY(-2px);
  background: #e7ecff;
}

/* Responsive */
@media (max-width: 992px){
  .short_card_about_rector{
    grid-template-columns: 1fr;
    gap: 18px;
    padding: 16px;
  }

  .rp_about_img{
    min-height: 220px;
  }

  .rp_contact h3{
    font-size: 24px;
    margin-bottom: 12px;
  }

  .rp_contact p{
    font-size: 15px;
    padding: 10px 12px;
  }
}
</style>      

        <div class="container">
            <div class="mt-3">
                <ul class="rp_tabs">
                    <li data-tab-target="#biograpghy" class="active rp_tab">@lang('index.Biograpghy')</li>
                    <li data-tab-target="#duties_of_rector" class="rp_tab">@lang('index.Duties of the rector'):</li>
                    <!-- <li data-tab-target="#Speeches_and_publications" class="rp_tab">@lang('index.Speeches and publications')</li> -->
                </ul>

                <div class="rp_tab-content">
                    <div id="biograpghy" data-tab-content class="active rp_biograpghy">
                        {!! $data->$biography_locale !!}
                    </div>
                    <div id="duties_of_rector" data-tab-content>
                        <div>
                            {!! $data->$duties_locale !!}
                        </div>
                    </div>
                    <div id="Speeches_and_publications" data-tab-content>
                        <div class="container rp_speeches">
                            <div class="row">

                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="col-xl-3 mt-3">
                                    <div class="rp_speeches_items">
                                        <p>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>Lorem, ipsum dolor sit</span>
                                        </p>
                                        <span>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem alias
                                            exercitationem suscipit delectus! Quos commodi, illum veritatis facere
                                            cum
                                            exercitationem numquam quas. Aliquam minima minus provident at eos vel
                                            officia?
                                        </span>
                                        <a href="#!">Read more <i class="fas fa-chevron-right ml-2"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="container">
    <div class="short_card_about_rector">       
            <div class="rp_about_img bg-none" style="margin-left: 0 !important;">
                <img style="width: 100%;  object-fit: contain;" src="{{asset('')}}{{$data->main_image}}" alt="">
            </div>      
        <div class="d-flex align-items-center justify-content-center">
            <div class="rp_contact">
                <h3 class="font-weight-bold text-center">@lang('index.Contact Info')</h3>
                <p>
                    <span class="font-weight-bold"><i class="fas fa-phone-square-alt mr-2"></i>@lang('index.Phone'):</span>
                    <span>{{$data->phone}}</span>
                </p>
                <p class="rp_contact_details_element">
                    <span class="font-weight-bold"><i class="fas fa-envelope-square mr-2"></i>@lang('index.Email'):</span>
                    <span> {{$data->email}}</span>
                </p>
                <p class="rp_contact_details_element">
                    <span class="font-weight-bold"><i class="fas fa-user-clock mr-2"></i>@lang('index.Время приема'):</span>
                    <span>{{$data->$reception_days_locale}}</span>
                </p>
                <p class="rp_contact_details_element">
                    <a href="#!" class="mr-2"><i class="fab fa-twitter-square"></i></a>
                    <a href="#!" class="mr-2"><i class="fab fa-facebook-square"></i></a>
                    <a href="#!"><i class="fab fa-linkedin"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>
        {{-- <div class="container">--}}
            {{-- <div class="short_card_about_rector">--}}
                {{-- <div>--}}
                    {{-- <div class="rp_box">--}}
                        {{-- <img src="{{asset('front_assets/assets/img/main_rector_old.jpg')}}" alt="">--}}
                        {{-- <div class="rp_about_img" style="">--}}
                            {{-- </div>--}}
                        {{-- <div>--}}
                            {{-- <h4>Хакимов Рахим Расулжонович</h4>--}}
                            {{-- <h5>--}}
                                {{-- <i> Доктор юридических наук, профессор </i>--}}
                                {{-- </h5>--}}
                            {{-- </div>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- <div class="d-flex align-items-center justify-content-center">--}}
                    {{-- <div class="rp_contact">--}}
                        {{-- <h3 class="font-weight-bold text-center">Contact Info</h3>--}}
                        {{-- <p>--}}
                            {{-- <span class="font-weight-bold"><i
                                    class="fas fa-phone-square-alt mr-2"></i>Phone:</span>--}}
                            {{-- <span>{{$data->phone}}</span>--}}
                            {{-- </p>--}}
                        {{-- <p class="rp_contact_details_element">--}}
                            {{-- <span class="font-weight-bold"><i class="fas fa-envelope-square mr-2"></i>Email:</span>--}}
                            {{-- <span> {{$data->email}}</span>--}}
                            {{-- </p>--}}
                        {{-- <p class="rp_contact_details_element">--}}
                            {{-- <span class="font-weight-bold"><i class="fas fa-user-clock mr-2"></i>Время--}}
                                {{-- приема:</span>--}}
                            {{-- <span>{{$data->$reception_days_locale}}</span>--}}
                            {{-- </p>--}}
                        {{-- <p class="rp_contact_details_element">--}}
                            {{-- <a href="#!" class="mr-2">twitter</a>--}}
                            {{-- <a href="#!" class="mr-2">facebook</a>--}}
                            {{-- <a href="#!">linkedin</a>--}}
                            {{-- </p>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </div>--}}

    </div>

@endsection