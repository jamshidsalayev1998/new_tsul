@extends('simple.layouts.master')
@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/faq_css/faq.css')}}">
{{--    <link rel="stylesheet" href="{{asset('front_assets/css/xalqaro.css')}}">--}}
@endsection
@section('content')
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $links = 'App\Menu'::where('leap' , 0)->get();
    ?>
<div class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 mt-3">
                        <div class="left_menu_of_page">
                           @include('simple.includes.links')
                                @include('simple.includes.socials_box')
                        </div>
                    </div>
                    <div class="col-xl-9 accordion-style">
                <div class="mt-4">
                    <h2>@lang('index.Ko\'p beriladigan savollar va javoblar')</h2>
                    <div class="accordion">
                        <h3><i class="fas fa-chevron-down"></i>Talabalar qaysi yo‘nalishlar bo‘yicha ta’lim
                            oladilar?</h3>
                        <div>TDYUda bakalavriat ta’lim yo‘nalishi quyidagi soha mutaxassisliklari bo‘yicha amalga
                            oshiriladi:

                            - Davlat-huquqiy faoliyati;
                            - Fuqarolik-huquqiy faoliyati;
                            - Tadbirkorlik-huquqiy faoliyati;
                            - Jinoiy-huquqiy faoliyat;
                            - Xalqaro-huquqiy faoliyat.

                        </div>

                        <h3><i class="fas fa-chevron-down"></i>TDYU o‘quv rejasiga qanday modullar
                            kiritilgan?</h3>
                        <div>TDYU o‘quv rejasi fan va ta’limning quyidagi yo‘nalishlari bo‘yicha o‘quv modullarini o‘z
                            ichiga oladi:

                            Gumanitar va ijtimoiy-iqtisodiy fanlar;
                            Matematik va tabiiy-ilmiy fanlar;
                            Umumkasbiy fanlar;
                            Maxsus fanlar (kasbiy mutaxassislik);
                            Qo‘shimcha fanlar.
                            Har bir yo‘nalish bo‘yicha o‘qitishning zamonaviy shakl va metodlariga, pedagogik,
                            axborot-kommunikatsion, innovatsion texnologiyalarga asoslangan o‘quv jarayonini tashkil
                            qilishni ko‘zda tutgan, nazariy tayyorgarlikning huquqni qo‘llash amaliyoti bilan uzviy
                            bog‘liq
                            tarzda ta’minlash, talabalarda analitik tafakkurni shakllantirish, yangi bilimlarni mustaqil
                            o‘zlashtirish va ulardan foydalana olish, davlat qurilishi va boshqaruvi, sud-huquq tizimini
                            modernizatsiya qilish, bozor islohotlarini chuqurlashtirishning huquqiy asoslarini
                            rivojlantirish, shu sohadagi xalqaro tajribani o‘rganishning dolzarb huquqiy muammolari
                            bo‘yicha
                            kompleks ilmiy tadqiqotlar olib borish, ilmiy ish natijalarini huquqni qo‘llash amaliyoti va
                            o‘quv jarayoniga samarali tatbiq etishni ta’minlashga qaratilgan ta’limning modul tizimi
                            tashkil
                            qilingan.
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>TDYUda ta’lim necha tilda olib boriladi?</h3>
                        <div>TDYUda ta’lim davlat va rus tillarida olib boriladi.
                            Shuningdek, TDYUda yuridik fanlar bo‘yicha fakultativ mashg‘ulotlar ingliz, nemis va
                            frantsuz
                            tillarida olib boriladi.
                            TDYUda Yapon tili markazi faoliyat yuritadi. Bu markazda talabalar 1-kursdan boshlab yapon
                            tili
                            va huquqini o‘rganish imkoniyatiga egalar. Tahsil bepul amalga oshiriladi.
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>Talabalar bilimi qanday baholanadi?</h3>
                        <div>Toshkent davlat yuridik universitetida o‘qitishning modul tizimi sharoitlarida talabalar
                            bilimini nazorat qilish tartibi va baholash mezonlari to‘g‘risidagi nizom (2016 yil 22
                            aprel, ro‘yxat raqami 2780) asosida o‘quv jarayoni tashkil etilgan bo‘lib, oliy ta’lim
                            tizimida ilk bor Toshkent davlat yuridik universitetida talabalar bilimini baholashning
                            yangi zamonaviy tizimi yo‘lga qo‘yilgan. Talabalar bilimi bevosita joriy nazorat, oraliq
                            nazorat va yakuniy nazorat orqali aniqlanadi.

                            Talabalarning bilim saviyasi va o‘zlashtirish darajasini davlat ta’lim standartlariga
                            muvofiqligini ta’minlash uchun universitetda joriy, oraliq va yakuniy nazorat turlari
                            o‘tkaziladi.

                            Talabaning har bir modul bo‘yicha o‘zlashtirish darajasi talabalarning bilim, malaka va
                            ko‘nikmalarini baholashning reyting tizimi asosida ballarda aks ettiriladi.

                            Talabaning semestr mobaynidagi har bir modul bo‘yicha o‘zlashtirishi 100 ballik tizim
                            asosida butun sonlar bilan baholanadi. 100 ball nazorat turlari bo‘yicha quyidagicha
                            taqsimlanadi:

                            joriy nazorat — 30 ball;

                            oraliq nazorat — 20 ball;

                            yakuniy nazorat — 50 ball.
                        </div>
                        <h3><i class="fas fa-chevron-down"></i>O‘quv adabiyotlarini qayerdan olsa bo‘ladi?
                        </h3>
                        <div>TDYU keng qamrovli ilmiy fond va boy yuridik kutubxonaga ega. Talabalar o‘qish jarayonida
                            o‘quv manbalaridan bevosita foydalanish imkoniyatiga ega.

                            O‘quv adabiyotlarini, shuningdek, “Sharq” nashriyoti do‘konlari va yuridik adabiyotga
                            ixtisoslashgan maxsus kitob do‘konlaridan sotib olish mumkin.
                        </div>
                        <h3><i class="fas fa-chevron-down"></i>Talabalarning amaliyoti qanday tashkil
                            etilgan?</h3>
                        <div>TDYUda talabalarning o‘qish davrida olgan amaliy va nazariy bilimlarini amaliyotda
                            mustahkamlash masalasiga alohida e’tibor qaratilgan bo‘lib, Yuridik ta’lim muassasalari
                            (harbiy, maxsus oliy ta’lim muassasalaridan tashqari) talabalari tomonidan tanishtiruv va
                            malakaviy amaliyotni, shuningdek stajirovkani o‘tash tartibi to‘g‘risida nizom (2013 yil 31
                            dekabr, ro‘yxat raqami 2548) asosida bakalavriatning 2-kurs talabalari uchun tanishtiruv
                            amaliyoti, 3-kurs va magistratura 1-kurs talabalari uchun malakaviy amaliyot hamda 4-kurs
                            talabalari uchun diplom oldi amaliyoti, shuningdek 2-kurs magistratura talabalari uchun
                            stajirovka amalga oshiriladi.

                            Talabalar amaliyoti davlat hokimiyati va boshqaruvi organlari, sud, huquqni muhofaza
                            qiluvchi organlar, ishlab chiqarish, xo‘jalik, tijorat tashkilotlari, moliya-bank va boshqa
                            muassasalarning yuridik xizmatlarida tashkil etilgan.
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>Taqsimot bo‘yicha ishga joylashish imkoniyati
                            bormi?</h3>
                        <div>TDYU 4-kurs bitiruvchilarini ish bilan ta’minlash maqsadida ular uchun har yili bahor oyida
                            “Karera kuni” tashkil etiladi. Ushbu tadbirda ishtirok etish uchun manfaatdor davlat
                            boshqaruvi organlari, sud va huquqni muhofaza qiluvchi organlar, bank va moliya muassasalari
                            hamda boshqa tashkilotlardan vakillar taklif etiladi. Bundan maqsad bitiruvchilarga vakant
                            joylari, ishga joylashishning zaruriy talab va sharoitlari, shuningdek, maosh darajalari va
                            qiziqtirgan savollariga mehmonlardan javob olish, vakant joylar haqidagi takliflarni ko‘rib
                            chiqish imkoniga ega bo‘lish. Taqdim etilgan kvota asosida davlat granti bo‘yicha tahsil
                            olgan bitiruvchi taqsimot bo‘yicha 3 yildan kam bo‘lmagan muddatda ish bilan ta’minlanadi.
                        </div>

                        <h3><i class="fas fa-chevron-down"></i>TDYU doktoranturasiga o‘qishga kirish jarayoni
                            qanday?</h3>
                        <div>Oliy ta’limdan keyingi ta’lim TDYUda O‘zbekiston Respublikasi Prezidentining 2012 yil 24
                            iyuldagi № UP-4456 “Oliy toifadagi ilmiy va ilmiy-pedagogik kadrlarni tayyorlash va
                            attestatsiyadan o‘tkazish tizimini kelgusi takomillashtirish to‘g‘risida”gi buyrug‘i hamda
                            2012 yil 28 dekabrdagi Vazirlar Mahkamasining № 365 “Oliy toifadagi ilmiy va ilmiy-pedagogik
                            kadrlarni oliy ta’limdan keyingi ta’limini amalga oshirish va attestatsiyadan o‘tkazish
                            tizimini takomillashtirish chora-tadbirlari haqida”gi Qaroriga muvofiq uch yil muddatda
                            quyidagicha amalga oshiriladi:</div>

                        <h3><i class="fas fa-chevron-down"></i>Toshkent davlat yuridik universiteti avvalgi
                            institutdan nimasi bilan farq qiladi?</h3>
                        <div>O‘zbekiston Respublikasi Prezidentining 2013 yil 28 iyundagi “Yuridik kadrlar tayyorlash
                            tizimini yanada takomillashtirish chora-tadbirlari to‘g‘risida”gi PQ–1990-son qaroriga
                            asosan Toshkent davlat yuridik instituti Toshkent davlat yuridik universiteti etib qayta
                            tashkil etilib, “Yurisprudensiya” mutaxassisligi bo‘yicha yuridik kadrlarni tayyorlash,
                            qayta tayyorlash bo‘yicha bazaviy davlat oliy ta’lim va ilmiy-metodik muassasasi etib
                            belgilangan.

                            Toshkent davlat yuridik universitetida O‘zbekiston Respublikasida ilk bor oliy ta’lim
                            tizimida umume’tirof etilgan xalqaro ta’lim standartlari va talablariga muvofiq ravishda
                            o‘qitishning modulli tizimi asosida o‘quv jarayoni tashkil etilgan. Mazkur tizim doirasida
                            ilg‘or ta’lim texnologiyalarini qo‘llagan holda, talabalarda amaliy ko‘nikmalarni
                            shakllantirishga alohida e’tibor qaratilgan.</div>

                        <h3><i class="fas fa-chevron-down"></i>TDYUda xorijliklar tahsil olishi mumkinmi?
                        </h3>
                        <div>Chet el fuqarolarining TDYU bakalavriat va magistraturaga qabul qilinishi Vazirlar
                            Mahkamasining 2008 yil 4 avgustdagi № 169 “O‘zbekiston Respublikasi ta’lim muassasalariga
                            chet el fuqarolarining qabul qilinishi va unda tahsil olishi tartibini takomillashtirish
                            to‘g‘risida”gi Qaroriga hamda O‘zbekiston Respublikasining xalqaro shartnomalariga asosan
                            amalga oshiriladi.</div>

                        <h3><i class="fas fa-chevron-down"></i>TDYUga O‘zbekistonning boshqa oliy ta’lim
                            muassasasidan yoki xorijiy oliy ta’lim muassasasidan o‘qishni o‘tkazish mumkinmi?</h3>
                        <div>TDYUga O‘zbekistonning boshqa oliy ta’lim muassasasidan yoki xorijiy oliy ta’lim
                            muassasasidan o‘qishni o‘tkazish O‘zbekiston Respublikasi Vazirlar Mahkamasining
                            2017 yil 20 iyundagi 393-son qarori bilan tasdiqlangan Oliy ta’lim muassasalari talabalari
                            o‘qishini ko‘chirish, qayta tiklash va o‘qishdan chetlashtirish tartibi to‘g‘risidagi
                            nizomga asosan amalga oshiriladi.</div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
@endsection
