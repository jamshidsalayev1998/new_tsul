@extends('simple.layouts.master')
@section('content')
            <div class="main_content ">
            <div class="main_content_text_box">
                <div>
                    <div>
                        <span>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:info@tsul.uz" class="text-white ">info@tsul.uz </a>
                        </span>
                        <span>
                            <i class="fas fa-phone-alt"></i>
                            +71 777 77 77
                        </span>
                    </div>
                    <div>
                        <h4 class="text-white" style="z-index: 100;">ОБ УНИВЕРСИТЕТЕ</h4>
                        <p>
                            Ташкентский государственный юридический университет является базовым
                            высшим образовательным и научно-методическим учреждением по
                            подготовке юридических кадров в Узбекистане.
                        </p>
                        <a href="ob_unversitete.html" class="mc_button">подробнее <i class="fas fa-arrow-right ml-2"
                                style="font-size: 14px;"></i></a>
                        <div class="owl-dots">
                            <button role="button" class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot active"><span></span></button><button role="button"
                                class="owl-dot"><span></span></button>
                        </div>
                    </div>
                    <div>
                        <div class="customNextBtn"><i class="fas fa-chevron-left"></i></div>
                        <div class="customPreviousBtn"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
            </div>
            <div id="owl-demo" class="owl-carousel">
                <div class="item"><img class="lazyOwl" src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="Lazy Owl Image">
                </div>
                <div class="item"><img class="lazyOwl" src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="Lazy Owl Image">
                </div>
                <div class="item"><img class="lazyOwl" src="{{asset('front_assets/assets/img/img3.jpg')}}" alt="Lazy Owl Image">
                </div>
            </div>
        </div>

        <section class="main_icon_menu">
            <div class="container-fuid menu_box_icon">
                <a href="#" class="menu_icon_box mt-2">
                    <div class="menu_icon_effect">
                        <i class="fas fa-user-cog"></i>
                        <h5>SRS</h5>
                    </div>
                </a>
                <a href="#" class="menu_icon_box  mt-2">
                    <div class="menu_icon_effect">
                        <i class="fas fa-laptop-house"></i>
                        <h5>Дистанционное образование</h5>
                    </div>
                </a>
                <a href="#" class="menu_icon_box  mt-2">
                    <div class="menu_icon_effect">
                        <i class="fas fa-user-clock"></i>
                        <h5>Приемная комиссия</h5>
                    </div>
                </a>
                <a href="#" class="menu_icon_box  mt-2">
                    <div class="menu_icon_effect">
                        <i class="fas fa-chart-bar"></i>
                        <h5>Статистика</h5>
                    </div>
                </a>
                <a href="./faq.html" class="menu_icon_box  mt-2">
                    <div class="menu_icon_effect">
                        <i class="fas fa-question-circle"></i>
                        <h5>Faq</h5>
                    </div>
                </a>
                <a href="#" class="menu_icon_box  mt-2">
                    <div class="menu_icon_effect">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h5>Моодле</h5>
                    </div>
                </a>
                <a href="./euc.html"  class="menu_icon_box  mt-2">
                    <!-- <div class="menu_icon_box  mt-2"> -->
                        <div class="menu_icon_effect">
                            <i class="fas fa-project-diagram"></i>
                            <h5>Электрон университет</h5>
                        </div>
                    <!-- </div> -->
                </a>
            </div>
        </section>



        <section class="third-part my-5  pt-1" style="background-color: #F6F7FD;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="header_for_part my-2  wow fadeInDown" data-wow-duration="0.4s"
                            data-wow-delay="0.2s">
                            <i class="fas fa-video"></i>
                            видеоматериалы
                        </div>
                        <div class="_3_video_box mt-4 wow fadeInLeft" data-wow-duration="0.4s" data-wow-delay="0.2s">
                            <i class="far fa-play-circle video_play_icon"></i>
                            <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12">
                        <div class="header_for_part my-2 wow fadeInDown" data-wow-duration="0.4s" data-wow-delay="0.2s">
                            <i class="fas fa-university"></i>
                            <div> открой для себя ташкентской государственный юридический университет</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mt-3 wow fadeInLeft" data-wow-duration="0.2s" data-wow-delay="0.2s">
                                <div class="_3_card_news_box">
                                    <div class="card_box_img">
                                        <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                                    </div>
                                    <div class="card_box_text py-2 px-2">
                                        <h5 class="title_3">Брошюра про университет Брошюра про университет</h5>
                                        <p class="py-0 my-0 text_size_3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facere, inventore similique. Aspernatur optio ipsa.
                                            Lorem ipsum dolor sit amet f ffkkkk consectetur adipisicing elit.
                                            Facere, inventore similique. Aspernatur optio ipsa.
                                        </p>
                                        <div class="text-end date_of_card">11.12.2020</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3 wow fadeInRight" data-wow-duration="0.4s" data-wow-delay="0.2s">
                                <div class="_3_card_news_box">
                                    <div class="card_box_img">
                                        <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                                    </div>
                                    <div class="card_box_text py-2 px-2">
                                        <h5 class="title_3">дом проживания студентов</h5>
                                        <p class="py-0 my-0 text_size_3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facere, inventore similique. Aspernatur optio ipsa.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facere, inventore similique. Aspernatur optio ipsa.
                                        </p>
                                        <div class="text-end date_of_card">11.12.2020</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3 wow fadeInRight" data-wow-duration="0.6s" data-wow-delay="0.2s">
                                <div class="_3_card_news_box">
                                    <div class="card_box_img">
                                        <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                                    </div>
                                    <div class="card_box_text py-2 px-2">
                                        <h5 class="title_3">Студенчиская жизнь Студенчиская жизнь</h5>
                                        <p class="py-0 my-0 text_size_3">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facere, inventore similique. Aspernatur optio ipsa.
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Facere, inventore similique. Aspernatur optio ipsa.
                                        </p>
                                        <div class="text-end date_of_card">11.12.2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="fourth-part ">
            <div class="container">
                <div class="header_for_part my-2  wow fadeInDown" data-wow-duration="0.4s" data-wow-delay="0.2s">
                    <i class="fas fa-volume-up"></i>
                    <div> анонс мероприятий</div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 four_card_1 wow fadeInLeft" data-wow-duration="0.6s"
                        data-wow-delay="0.2s">
                        <div class="card_box_4">
                            <div class="card_box_img_4">
                                <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                            </div>
                            <div class="card_box_text_4 py-2 px-2">
                                <div class="d-flex anons_text_top">
                                    <div>
                                        <span class="d-block">20</span>
                                        <span>янв</span>
                                    </div>
                                    <div class="title_4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                </div>
                                <p class="anons_text_bottom mb-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                </p>
                                <div class="date_of_card_4">11.12.2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 four_card_2 wow fadeInLeft" data-wow-duration="0.4s"
                        data-wow-delay="0.2s">
                        <div class="card_box_4">
                            <div class="card_box_img_4">
                                <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                            </div>
                            <div class="card_box_text_4 py-2 px-2">
                                <div class="d-flex anons_text_top">
                                    <div>
                                        <span class="d-block">20</span>
                                        <span>янв</span>
                                    </div>
                                    <div class="title_4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. jh kjh l;;lk; k
                                    </div>
                                </div>
                                <p class="anons_text_bottom mb-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                </p>
                                <div class="date_of_card_4">11.12.2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 four_card_3 wow fadeInRight" data-wow-duration="0.4s"
                        data-wow-delay="0.2s">
                        <div class="card_box_4">
                            <div class="card_box_img_4">
                                <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                            </div>
                            <div class="card_box_text_4 py-2 px-2">
                                <div class="d-flex anons_text_top">
                                    <div>
                                        <span class="d-block">20</span>
                                        <span>янв</span>
                                    </div>
                                    <div class="title_4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                </div>
                                <p class="anons_text_bottom mb-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                </p>
                                <div class="date_of_card_4">11.12.2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 four_card_4 wow fadeInRight" data-wow-duration="0.6s"
                        data-wow-delay="0.2s">
                        <div class="card_box_4">
                            <div class="card_box_img_4">
                                <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                            </div>
                            <div class="card_box_text_4 py-2 px-2">
                                <div class="d-flex anons_text_top">
                                    <div>
                                        <span class="d-block">20</span>
                                        <span>янв</span>
                                    </div>
                                    <div class="title_4">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                </div>
                                <p class="anons_text_bottom mb-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Facere, inventore similique. Aspernatur optio ipsa.
                                </p>
                                <div class="date_of_card_4">11.12.2020</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="fifth-part py-3" style="margin-top: 10rem; background-color: #F6F7FD;">
            <div class="container">
                <div class="header_for_part my-2 wow fadeInDown" data-wow-duration="0.4s" data-wow-delay="0.2s">
                    <i class="far fa-newspaper"></i>
                    <div>новости и публикации</div>
                </div>
                <div class="row">
                    <div class="col-xl-6 wow fadeInDown" data-wow-duration="0.6s" data-wow-delay="0.2s">
                        <div class="card_box_5">
                            <div class="card_box_img_5">
                                <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="image not found">
                            </div>
                            <div class="card_box_text_5">
                                <div>
                                    <span class="d-block">20</span>
                                    <span>янв</span>
                                </div>
                                <div class="big_card_text_5">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Qui consectetur provident commodi necessitatibus nulla, ipsum.
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Qui consectetur provident commodi necessitatibus nulla, ipsum.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div>
                            <div class="card_box_right_5 wow fadeInRight" data-wow-duration="0.4s"
                                data-wow-delay="0.2s">
                                <div class="card_box_img_right_5">
                                    <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="image not found">
                                </div>
                                <div>
                                    <div class="card_box_text_right_5">
                                        <div class="card_box_text_right_top_5">
                                            <div>
                                                <span class="d-block">20</span>
                                                <span>янв</span>
                                            </div>
                                            <div class="title_5">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            </div>
                                        </div>
                                        <div class="card_box_text_right_bottom_5">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non iusto illo
                                            tempora inventore sit,
                                            id perferendis mollitia nihil vitae, ad incidunt unde ipsum, ducimus
                                            recusandae minus blanditiis! Aut, rerum esse.
                                            id perferendis mollitia nihil vitae, ad incidunt unde ipsum, ducimus
                                            recusandae minus blanditiis! Aut, rerum esse.
                                        </div>
                                        <div class="date_and_link_5">
                                            <div style="font-weight: 600; font-size: 14px; margin-top: 5px;">11.12.2020
                                            </div>
                                            <span class="more_details_link">подробнее</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card_box_right_5 wow fadeInRight" data-wow-duration="0.4s"
                                data-wow-delay="0.2s">
                                <div class="card_box_img_right_5">
                                    <img src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="image not found">
                                </div>
                                <div>
                                    <div class="card_box_text_right_5">
                                        <div class="card_box_text_right_top_5">
                                            <div>
                                                <span class="d-block">20</span>
                                                <span>янв</span>
                                            </div>
                                            <div class="title_5">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            </div>
                                        </div>
                                        <div class="card_box_text_right_bottom_5">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Doloremque aperiam sunt dolore ea at ex optio rem, asperiores iste
                                            officia praesentium dolores.
                                        </div>
                                        <div class="date_and_link_5">
                                            <div style="font-weight: 600; font-size: 14px; margin-top: 5px;">11.12.2020
                                            </div>
                                            <span class="more_details_link">подробнее</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 more_link_box">
                        <span style="text-decoration: underline;">Все новости</span>
                    </div>
                </div>
            </div>
        </section>


        <section class="media_box bg-white">
            <div class="container wow fadeInDown" data-wow-duration="0.4s" data-wow-delay="0.2s">
                <div class="media_header">
                    <span>TSUL MEDIA</span>
                    <ul class="tabs_media">
                        <li class="tab-link_media current" data-tab="media_tab-1"><i
                                class="fas fa-video mr-2"></i>Videolar</li>
                        <li class="tab-link_media" data-tab="media_tab-2"><i class="fas fa-images mr-2"></i>Rasmlar</li>
                        <li class="tab-link_media" data-tab="media_tab-3"><i class="fas fa-volume-up mr-2"></i>Audiolar
                        </li>
                        <li class="tab-link_media" data-tab="media_tab-4"><i class="fas fa-file-pdf mr-2"></i>Jurnallar
                        </li>
                    </ul>
                </div>

                <div id="media_tab-1" class="tab-content current">
                    <div class="container-fluid">
                        <div class="row p-0">
                            <div class="col-xl-7 p-0 mt-2 main_right_media_box">
                                <iframe class="responsive-iframe"
                                    src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                            </div>
                            <div class="col-xl-5 p-0">
                                <div class="left_media_box">
                                    <div class="video_box_item mt-2">
                                        <div>
                                            <img src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="">
                                        </div>
                                        <div>
                                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse in
                                                tenetur molestias
                                                voluptates ipsa necessitatibus, quaerat quasi, exercitationem aliquid
                                                repudiandae aliquam
                                                quisquam mollitia. Nostrum obcaecati debitis molestiae repellendus quae
                                                provident?
                                            </span>
                                            <b class="text-secondary text-end d-block mt-2"
                                                style="font-size: 12px;">15.03.2021</b>
                                        </div>
                                    </div>
                                    <div class="video_box_item mt-2">
                                        <div>
                                            <img src="{{asset('front_assets/assets/img/img1.jp')}}g" alt="">
                                        </div>
                                        <div>
                                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse in
                                                tenetur molestias
                                                voluptates ipsa necessitatibus, quaerat quasi, exercitationem aliquid
                                                repudiandae aliquam
                                                quisquam mollitia. Nostrum obcaecati debitis molestiae repellendus quae
                                                provident?
                                            </span>
                                            <b class="text-secondary text-end d-block mt-2"
                                                style="font-size: 12px;">15.03.2021</b>
                                        </div>
                                    </div>
                                    <div class="video_box_item mt-2">
                                        <div>
                                            <img src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="">
                                        </div>
                                        <div>
                                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse in
                                                tenetur molestias
                                                voluptates ipsa necessitatibus, quaerat quasi, exercitationem aliquid
                                                repudiandae aliquam
                                                quisquam mollitia. Nostrum obcaecati debitis molestiae repellendus quae
                                                provident?
                                            </span>
                                            <b class="text-secondary text-end d-block mt-2"
                                                style="font-size: 12px;">15.03.2021</b>
                                        </div>
                                    </div>
                                    <div class="video_box_item mt-2">
                                        <div>
                                            <img src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="">
                                        </div>
                                        <div>
                                            <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse in
                                                tenetur molestias
                                                voluptates ipsa necessitatibus, quaerat quasi, exercitationem aliquid
                                                repudiandae aliquam
                                                quisquam mollitia. Nostrum obcaecati debitis molestiae repellendus quae
                                                provident?
                                            </span>
                                            <b class="text-secondary text-end d-block mt-2"
                                                style="font-size: 12px;">15.03.2021</b>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="media_tab-2" class="tab-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 p-0 mt-2">
                                <div class="main_media_image_box">
                                    <img id="img_box" src="{{asset('front_assets/assets/img/img1.jpg')}}" width="100%" height="100%" alt="">
                                </div>
                            </div>
                            <div class="col-xl-5 p-0">
                                <div class="link_image_box">
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img3.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img3.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img3.jpg')}}" alt="">
                                    </div>
                                    <div id="image_link">
                                        <img id="image_l" src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="media_tab-3" class="tab-content">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <h3 class="text-secodary">Ma'lumot topilmadi</h3>
                    </div>
                </div>
                <div id="media_tab-4" class="tab-content">
                    <div class="h-100 d-flex align-items-center justify-content-center">
                        <h3 class="text-secodary">Ma'lumot topilmadi</h3>
                    </div>
                </div>
            </div>

        </section>


        <section class="sixth-part">
            <div class="container">
                <div class="header_for_part mt-2">
                    <i class="fas fa-chart-bar"></i>
                    <div>университет в цифрах</div>
                </div>
            </div>
            <div class=" bg-white" style="border-top: 1px solid grey; border-bottom: 1px solid grey;">
                <div class="container">

                    <div class="row px-4">
                        <div class="col-xl-3 col-md-6 cb_6 p-0">
                            <div class="card_box_6 text-center">
                                <div>
                                    <div><i class="fas fa-user-graduate"></i></div>
                                    <h5>количество студентов</h5>
                                    <h3>1500</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 cb_6 p-0">
                            <div class="card_box_6 text-center">
                                <div>
                                    <div><i class="fas fa-chalkboard-teacher"></i></div>
                                    <h5>количество сотрудников</h5>
                                    <h3>1500</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 cb_6 p-0">
                            <div class="card_box_6 text-center">
                                <div>
                                    <div><i class="fas fa-user-tag"></i></div>
                                    <h5>количество учителей</h5>
                                    <h3>1500</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 cb_6 p-0">
                            <div class="card_box_6 text-center">
                                <div>
                                    <div><i class="fas fa-users"></i></div>
                                    <h5>количество выпускников</h5>
                                    <h3>1500</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="seventh-part w-100 my-5">
            <div class="container">
                <div id="owl-demo" class="owl-carousel owl-theme cb_7">
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="{{asset('front_assets/assets/img/lex.png')}}" alt="">
                        </div>
                        <span class="link_to_site">
                            <a href="https://lex.uz" target="_blank">lex.uz</a>
                        </span>

                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="{{asset('front_assets/assets/img/datagovuz.png')}}" alt="">
                        </div>
                        <span class="link_to_site">
                            <a href="https://data.gov.uz" target="_blank">data.gov.uz</a>
                        </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="{{asset('front_assets/assets/img/gerb1.png')}}" alt="">
                        </div>
                        <span class="link_to_site">
                            <a href="https://www.gov.uz" target="_blank">gov.uz</a>
                        </span>
                    </div>
                    <div class="item cb_7_card">
                        <div class="card_box_7">
                            <img src="{{asset('front_assets/assets/img/uzeduuz.png')}}" alt="">
                        </div>
                        <span class="link_to_site">
                            <a href="http://uzedu.uz/" target="_blank" rel="noopener noreferrer">uzedu.uz</a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
@endsection
