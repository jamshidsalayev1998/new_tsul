<?php
$locale = app()->getLocale();
$name_locale = 'name_' . $locale;
$menus = ('App\Menu')::where('leap', 0)->orderBy('order', 'ASC')->basic()->active()->get();
$menus_top_all = ('App\MenuTop')::where('leap', 0)->orderBy('order', 'ASC')->basic()->active()->get();
$menus_top = ('App\MenuTop')::where('leap', 0)->orderBy('order', 'ASC')->basic()->active()->take(2)->get();
$menus_top_last = ('App\MenuTop')::where('leap', 0)->orderBy('id', 'DESC')->basic()->active()->take(3)->get()->reverse();
$logo_locale = 'front_assets/assets/img/logo_university/logo_' . $locale . '.png';
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
                    <!-- <img src="<?php echo e(asset('front_assets/assets/img/logo_university/_Sign logo_EN_primary.png')); ?>" alt=""> -->
                    <img src="<?php echo e(asset($logo_locale)); ?>" alt="">
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

                    <script></script>


                    <!-- <a href="https://www.fb.com/tsulofficial"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://t.me/tsulofficial"><i class="fab fa-telegram-plane"></i></a>
                    <a href="https://www.instagram.com/tsulofficial/"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/tashkentlaw"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.youtube.com/channel/UCTAhGEQDYohjqmDAsD9yRBg"><i
                            class="fab fa-youtube"></i></a> -->


                    <!-- <div class="d-flex justify-content-start align-items-center">
                                <span class="pl-2" style="color: white !important;">
                            +998 71 233-42-09
                            </span></div> -->
                    <!-- <div class="d-flex justify-content-start align-items-center">
                                <a href="tel:+998712331395" class="pl-2" style="color: white !important; width:auto !important; border-radius:0 !important; background:transparent !important;">
                            <?php echo app('translator')->get('index.Qabul bo‘limi'); ?>: +998 71 233-13-95
                            </a></div> -->
                    <div class="d-flex justify-content-start align-items-center">
                        <a href="tel:+998712331395" class="pl-2"
                            style="color: white !important; width:auto !important; border-radius:0 !important; background:transparent !important;">
                            <?php echo app('translator')->get('index.Qabul bo‘limi'); ?>: +998 71 233-13-95
                        </a>

                        <div class="ml-3">
                            <button class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#rateModal">
                                Saytni baholash <i class="fas fa-star" data-value="1"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div style="z-index: 10000;" class="modal fade" id="rateModal" tabindex="-1"
                        aria-labelledby="rateModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 800px; width: 100%;">
                            <form class="modal-content" id="feedback-form" method="POST" action="<?php echo e(route('feedback.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('POST'); ?>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="rateModalLabel">Saytni baholash</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Yopish"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Yulduzcha baholash -->
                                    <div class="mb-3 text-center">
                                        Qanday baho berasiz:
                                        <span class="star-rating">
                                            <i class="fas fa-star" data-value="1"></i>
                                            <i class="fas fa-star" data-value="2"></i>
                                            <i class="fas fa-star" data-value="3"></i>
                                            <i class="fas fa-star" data-value="4"></i>
                                            <i class="fas fa-star" data-value="5"></i>
                                        </span>
                                        <input type="hidden" name="rating" id="rating" value="0">
                                    </div>

                                    <!-- F.I.O -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Ismingiz</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required>
                                    </div>

                                    <!-- Izoh -->
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Sayt haqida fikringiz va qanday
                                            qo'shimchalar kerakligi haqida izoh</label>
                                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="rateModalSubmitModal" class="btn btn-primary">Yuborish</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        document.querySelectorAll('.star-rating i').forEach(star => {
                            star.addEventListener('click', function() {
                                const rating = this.getAttribute('data-value');
                                document.getElementById('rating').value = rating;
                                document.querySelectorAll('.star-rating i').forEach(s => {
                                    s.classList.toggle('text-warning', s.getAttribute('data-value') <= rating);
                                });
                            });
                        });
                    </script>
                    <!-- top icon pop up contact form -->
                    <!-- <a  onclick="openForm()"><i class="fas fa-phone"></i></a>    -->

                    <!--
<div class="rn_form-popup" id="myForm">
  <div class="rn_form-container">
  <div class="d-flex text-center" style="position: relative;">
    <h1><?php echo app('translator')->get('index.pop-up-contact'); ?></h1>
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
                    <?php $__currentLoopData = $menus_top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="main_links">
                            <a class="owlItems"
                                href="<?php if($m_t->slug): ?> <?php echo e($m_t->slug); ?> <?php else: ?> # <?php endif; ?>"><?php echo e($m_t->$name_locale); ?></a>
                            <div class="mega_menu_custom" style="padding-top: 10px;">
                                <?php if($m_t->has_child()): ?>
                                    <div class="top_dropbox_box">
                                        <?php $__currentLoopData = $m_t->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_t_ch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php if($m_t_ch->slug): ?> <?php echo e($m_t_ch->slug); ?> <?php else: ?> # <?php endif; ?>"
                                                class="nav_dropdown_links"><i
                                                    class="fas fa-caret-right mr-2 text-secondary"></i><?php echo e($m_t_ch->$name_locale); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
            <div class="right_top_nav">
                <div>
                    <?php $__currentLoopData = $menus_top_last; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="main_links">
                            <a href="<?php if($m_t->slug): ?> <?php echo e($m_t->slug); ?> <?php else: ?> # <?php endif; ?>"
                                class="owlItems"><?php echo e($m_t->$name_locale); ?></a>
                            <div class="mega_menu_custom" style="padding-top: 10px;">
                                <?php if($m_t->has_child()): ?>
                                    <div class="top_dropbox_box">
                                        <?php $__currentLoopData = $m_t->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m_t_ch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php if($m_t_ch->slug): ?> <?php echo e($m_t_ch->slug); ?> <?php else: ?> # <?php endif; ?>"
                                                class="nav_dropdown_links owlItems"><i
                                                    class="fas fa-caret-right mr-2 text-secondary"></i><?php echo e($m_t_ch->$name_locale); ?></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="m-2 right-features-box">

                    <!-- <div class="text-center m-0 p-0 mb-1" style="border-radius: 10px;
    background-color: #2C42A6;">
                    <span class="align-items-center px-3">
                       <span class="fw-3 text-white" style="font-size: small;" type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#PC_modal"><?php echo app('translator')->get('index.Xizmatlardan foydalanish'); ?>
                       </span>
                       </span>
                </div> -->

                    <div class="p-0 m-0 d-flex h-100 align-items-center">


                        <div class="language_box">
                            <div id="hlb" class="head_language_box">
                                <span id="selected_language"><?php echo e(LaravelLocalization::getCurrentLocaleName()); ?></span>
                                <span id="animating_icons_lang" class="animating_language_icon"><i
                                        class="fas fa-chevron-down"></i></span>
                            </div>
                            <div id="selecting_box_id" class="selecting_box">
                                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(app()->getLocale() != $localeCode): ?>
                                        <span class="select-language-j" hreflang="<?php echo e($localeCode); ?>"
                                            data-href="<?php echo e(preg_replace('/^http:/i', 'https:', LaravelLocalization::getLocalizedURL($localeCode, null, [], true))); ?>"><?php echo e($properties['native']); ?></span>
                                        
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <span id="search_id" class="search_box  px-3"><i id="search_id_i" class="fas fa-search"></i>
                        </span>
                        <a href="/symbols" class="symbols_box">
                            <img src="<?php echo e(asset('front_assets/assets/img/gerb1.png')); ?>" width="30px"
                                height="100%" alt="">
                        </a>

                        <span class="d-flex align-items-center px-3 " style="height: 100%;">
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
                                                data-placement="bottom" title=""
                                                data-original-title="Темный режим">
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

                <!--Using services modal -->
                <!-- <div class="modal top fade d-none" id="PC_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel" style="color:#1d39c4;"><?php echo app('translator')->get('index.Pullik xizmatlardan foydalanish'); ?></h5>
        <button type="button" class="btn-close text-danger" data-mdb-dismiss="modal" style="font-size:small !important;"></button>
      </div>


    <form  action="<?php echo e(route('simple.services')); ?>" method="post" class="m-4">
      <?php echo csrf_field(); ?>
        <div class="form-outline mb-4">
            <input name="fio" type="text" required="true" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1"><?php echo app('translator')->get('index.Ism va familyangiz'); ?></label>
          </div>


       <div class="form-outline mb-4">
            <input name="phone" type="number" required="true" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example6"><?php echo app('translator')->get('index.Telifon raqamingiz'); ?></label>
        </div>


      <button type="submit"  class="btn" style="background-color:#1d39c4; color: white; text-transform: lowercase"><?php echo app('translator')->get('index.Yuborish'); ?></button>
    </form>

    </div>
  </div>
</div> -->


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
                <?php $i = 1; ?>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++; ?>
                    <?php if($i < 5): ?>
                        <span class="main_links">

                            <a class="owlItems" href="#"><?php echo e($menu->$name_locale); ?></a>
                            <div class="mega_menu_custom" style="padding-top: 33px;">
                                <div class="bottom_dropbox_box" style=" ">
                                    <?php $j = 0; ?>
                                    <?php $__currentLoopData = $menu->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($child->status): ?>
                                            <div class="text-left mx-3">
                                                <div class="<?php if($child->has_child()): ?> mt-2 <?php endif; ?>"
                                                    style="max-width: 250px">

                                                    <?php if($child->has_child()): ?>
                                                        <h6 class="font-weight-bold text-secondary menu-h "
                                                            data-href="<?php if($child->slug): ?> <?php echo e($child->slug); ?><?php else: ?># <?php endif; ?>">
                                                            <?php echo e($child->$name_locale); ?></h6>
                                                    <?php else: ?>
                                                        <a href="<?php if($child->slug): ?> <?php echo e($child->slug); ?><?php else: ?> # <?php endif; ?>"
                                                            class="nav_dropdown_links"><i
                                                                class="fas fa-caret-right mr-2 text-secondary"></i><?php echo e($child->$name_locale); ?></a>
                                                    <?php endif; ?>
                                                    <?php $__currentLoopData = $child->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php if($chch->slug): ?> <?php echo e($chch->slug); ?><?php else: ?> # <?php endif; ?>"
                                                            class="nav_dropdown_links"><i
                                                                class="fas fa-caret-right mr-2 text-secondary"></i><?php echo e($chch->$name_locale); ?></a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <?php $j++; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>

                            </div>
                        </span>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="right_bottom_nav">
                <?php $i = 1; ?>
                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $i++; ?>
                    <?php if($i >= 5): ?>
                        <span class="main_links">
                            <a class="owlItems" href="#"><?php echo e($menu->$name_locale); ?></a>
                            <div class="mega_menu_custom text-left" style="padding-top: 33px;">
                                <div class=" bottom_dropbox_box" style=" ">
                                    <?php $j = 0; ?>
                                    <?php $__currentLoopData = $menu->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="text-left mx-3">
                                            <div class="mt-2" style="max-width: 250px">
                                                <?php if($child->has_child()): ?>
                                                    <h6 class="font-weight-bold text-secondary menu-h"
                                                        data-href="<?php if($child->slug): ?> <?php echo e($child->slug); ?><?php else: ?># <?php endif; ?>">
                                                        <?php echo e($child->$name_locale); ?></h6>
                                                <?php else: ?>
                                                    <a href="<?php if($child->slug): ?> <?php echo e($child->slug); ?><?php else: ?> # <?php endif; ?>"
                                                        class="nav_dropdown_links"><i
                                                            class="fas fa-caret-right mr-2 text-secondary"></i><?php echo e($child->$name_locale); ?></a>
                                                <?php endif; ?>
                                                <?php $__currentLoopData = $child->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <a href="<?php if($chch->slug): ?> <?php echo e($chch->slug); ?><?php else: ?> # <?php endif; ?>"
                                                        class="nav_dropdown_links"><i
                                                            class="fas fa-caret-right mr-2 text-secondary"></i><?php echo e($chch->$name_locale); ?></a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <?php $j++; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </span>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <span id="selected_language_m"><?php echo e(LaravelLocalization::getCurrentLocaleName()); ?></span>
                    <span id="animating_icons_lang_m" class="animating_language_icon"><i
                            class="fas fa-chevron-down"></i></span>
                </div>
                <div id="selecting_box_id_m" class="selecting_box_m">
                    <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(app()->getLocale() != $localeCode): ?>
                            <span class="select-language-j" hreflang="<?php echo e($localeCode); ?>"
                                data-href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>"><?php echo e($properties['native']); ?></span>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <span id="search_id_m" class="search_box  px-3"><i id="search_id_i_m" class="fas fa-search"></i></span>
            <span class="d-flex align-items-center px-3 " style="height: 100%; background-color: #2C42A6;">
                <div class="maxsusimkoniyat" style="font-size: 18px;">
                    <a href="dropdown" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-eye text-white"
                            style="font-size: 15px;"></i></a>
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
                                <div class="squareBox spcWhiteAndBlack" data-toggle="tooltip" data-placement="bottom"
                                    title="">A</div>
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
                        <img class="img-responsive img-rounded"
                            src="<?php echo e(asset('front_assets/assets/img/logo_university/logo_white.png')); ?>"
                            alt="User picture">
                    </div>
                    <div class="user-info">
                        <?php echo app('translator')->get('index.Mobile-logo'); ?>
                    </div>
                </div>
                <div class="sidebar-menu pt-4">
                    <ul>
                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fas fa-university"></i>
                                    <span><?php echo e($menu->$name_locale); ?></span>
                                </a>
                                <?php if($menu->has_child()): ?>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <?php $__currentLoopData = $menu->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="sub_sub_link">
                                                    <a
                                                        href="<?php if($child->slug && !$child->has_child()): ?> <?php echo e($child->slug); ?> <?php else: ?> <?php echo e('#'); ?> <?php endif; ?>">
                                                        <i class="fas fa-caret-right mr-0"></i>
                                                        <?php echo e($child->$name_locale); ?>

                                                    </a>
                                                    <?php if($child->has_child()): ?>
                                                        <div class="sub_sub_menu">
                                                            <span>
                                                                <a
                                                                    href="<?php if($child->slug): ?> <?php echo e($child->slug); ?> <?php endif; ?>">-
                                                                    <?php echo e($child->$name_locale); ?></a>
                                                            </span>
                                                            <?php $__currentLoopData = $child->childs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <span>
                                                                    <a
                                                                        href="<?php if($chch->slug): ?> <?php echo e($chch->slug); ?><?php else: ?> # <?php endif; ?>">-
                                                                        <?php echo e($chch->$name_locale); ?></a>
                                                                </span>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </div>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="header-menu m-0 p-0">
                            <span><?php echo app('translator')->get('index.Extra'); ?></span>
                        </li>
                        <!-- //button using services  modal -->
                        <!-- <li>
                            <a href="#">
                            <i class="fas fa-envelope-open-text"></i>
                                <span data-mdb-toggle="modal" data-mdb-target="#MB_modal"><?php echo app('translator')->get('index.Xizmatlardan foydalanish'); ?></span>
                            </a>
                        </li> -->
                        <!--Using services  mobile modal -->
                        <div class="modal top fade" id="MB_modal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="true"
                            data-mdb-keyboard="true">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                <div class="modal-content">
                                    <!-- <div class="modal-header">
        <h5 class="modal-title fw-bold" id="exampleModalLabel" style="color:#1d39c4;"><?php echo app('translator')->get('index.Xizmatlardan foydalanish'); ?></h5>
        <button type="button" class="btn-close text-danger" data-mdb-dismiss="modal" style="font-size:small !important;"></button>
      </div> -->


                                    <form action="<?php echo e(route('simple.services')); ?>" method="post" class="m-4">
                                        <?php echo csrf_field(); ?>
                                        <!-- fio -->
                                        <div class="form-outline mb-4">
                                            <input name="fio" type="text" required="true" id="form6Example1"
                                                class="form-control" />
                                            <label class="form-label" for="form6Example1"><?php echo app('translator')->get('index.Ism va familyangiz'); ?></label>
                                        </div>

                                        <!-- Phone -->
                                        <div class="form-outline mb-4">
                                            <input name="phone" type="number" required="true" id="form6Example6"
                                                class="form-control" />
                                            <label class="form-label" for="form6Example6"><?php echo app('translator')->get('index.Telifon raqamingiz'); ?></label>
                                        </div>


                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input name="email" type="email" required="true" id="form6Example5"
                                                class="form-control" />
                                            <label class="form-label" for="form6Example5"><?php echo app('translator')->get('index.Email'); ?></label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn"
                                            style="background-color:#1d39c4; color: white; text-transform: lowercase"><?php echo app('translator')->get('index.Yuborish'); ?></button>
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
                                <span><?php echo app('translator')->get('index.NewsM'); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-book-reader"></i>
                                <span><?php echo app('translator')->get('index.Библиотека'); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-microscope"></i>
                                <span><?php echo app('translator')->get('index.Наука'); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-blog"></i>
                                <span><?php echo app('translator')->get('index.Онлайн'); ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-mail-bulk"></i>
                                <span><?php echo app('translator')->get('index.Платформа кабинет'); ?></span>
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
                    <span class="badge badge-pill badge-warning notification"><?php echo app('translator')->get('index.mfb'); ?></span>
                </a>
                <a href="https://t.me/tsulofficial" target="_blank">
                    <i class="fab fa-telegram text-white"></i>
                    <span class="badge badge-pill badge-warning notification"><?php echo app('translator')->get('index.mtg'); ?></span>
                </a>
                <a href="https://twitter.com/tashkentlaw" target="_blank">
                    <i class="fab fa-twitter text-white"></i>
                    <span class="badge badge-pill badge-success notification"><?php echo app('translator')->get('index.mtw'); ?></span>
                </a>
                <a href="#">
                    <i class="fab fa-youtube text-white"></i>
                    <span class="badge badge-pill badge-success notification"><?php echo app('translator')->get('index.myb'); ?></span>
                </a>
                <a href="#">
                    <i class="fab fa-google-plus-g text-white"></i>
                    <span class="badge-sonar"></span>
                </a>
            </div>
        </nav>
    </div>
</div>
<?php echo $__env->make('simple.includes.pop_up_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /var/www/html/resources/views/simple/includes/menu.blade.php ENDPATH**/ ?>