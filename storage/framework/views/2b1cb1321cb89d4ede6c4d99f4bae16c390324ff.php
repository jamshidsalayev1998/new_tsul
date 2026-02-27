
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/symbols/symbols.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
        $links = 'App\Menu'::where('leap' , 0)->get();
    ?>
    <div class="symbols">
            <div class="container">
                <div class="row">
                     <!--breadcrumb-->
                     <div class="col-xl-12">
                        <div>
                            <a href="index.html" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Главная страница'); ?></a>
                            <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                    style="font-size:10px"></i></span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;">Символы</a>
                            <span class="text-secondary" style="font-weight:500">&nbsp;
                                </span>
                        </div>
                    </div>

                    <!--Sybols-->
                    <div class="col-xl-12  symbol-body">

                        <!--Fast links-->
                        <div class="col-xl-3 col-lg-3 animate__animated animate__fadeInLeft">
                            <div class="left_menu_of_page">

                                <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('simple.includes.socials_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                        <!--Gerb-->
                        <div class="col-xl-9 symbol-content ">
                            <div class="gerb card-text ">
                                <h4 ><?php echo app('translator')->get('index.O\'zbekiston Respublikasi davlat gerbi'); ?></h4>
                                <img src="<?php echo e(asset('front_assets/assets/img/symbols/gerb4.png')); ?>" alt="networ error!">
                                <?php echo app('translator')->get('index.gerb info'); ?>
                            </div>

                            <!--Flag-->
                            <div class="flag card-text">
                                <h4><?php echo app('translator')->get('index.O\'zbekiston Respublikasi davlat bayrog\'i'); ?></h4>
                                <img src="<?php echo e(asset('front_assets/assets/img/symbols/bayroq.png')); ?>" alt="networ error!">
                                <?php echo app('translator')->get('index.bayroq info'); ?>
                            </div>

                            <!--Madhiya-->
                            <div class="madhiya card-text">
                                <h4><?php echo app('translator')->get('index.O\'zbekiston Respublikasi davlat madhiyasi'); ?></h4>
                                <?php echo app('translator')->get('index.madhiya info'); ?>

                                    <p class="text-center font-weight-bold"><?php echo app('translator')->get('index.Eshitish uchun playerni bosing'); ?></p>
                                    <div class="audio-m">
                                        <audio controls class="animate_animated animate__fadeIn">
                                            <source src="<?php echo e(asset('front_assets/assets/audio/Madxiya.ogg')); ?>" type="audio/ogg">
                                            <source src="<?php echo e(asset('front_assets/assets/audio/Madxiya.mp3')); ?>" type="audio/mpeg">
                                                    Your browser does not support the audio element.
                                            </audio>
                                            <br><br>
                                            <strong style="text-align: center; " class="card-text">
                                                Serquyosh, hur o‘lkam, elga baxt, najot,
                                                <br>
                                                Sen o‘zing do‘stlarga yo‘ldosh, mehribon!
                                                <br>
                                                Yashnagay to abad ilmu fan, ijod,
                                                <br>
                                                Shuhrating porlasin toki bor jahon!
                                                <br><br>

                                                Oltin bu vodiylar — jon O‘zbekiston,
                                                <br>
                                                Ajdodlar mardona ruhi senga yor!
                                                <br>
                                                Ulug‘ xalq qudrati jo‘sh urgan zamon,
                                                <br>
                                                Olamni mahliyo aylagan diyor!
                                                <br><br>

                                                Bag‘ri keng o‘zbekning o‘chmas iymoni,
                                                <br>
                                                Erkin, yosh avlodlar senga zo‘r qanot!
                                                <br>
                                                Istiqlol mash’ali, tinchlik posboni,
                                                <br>
                                                Haqsevar, ona yurt, mangu bo‘l obod!
                                                <br><br>

                                                Oltin bu vodiylar — jon O‘zbekiston,
                                                <br>
                                                Ajdodlar mardona ruhi senga yor!
                                                <br>
                                                Ulug‘ xalq qudrati jo‘sh urgan zamon,
                                                <br>
                                                Olamni mahliyo aylagan diyor!
                                                <br>
                                            </strong>
                                            <br>
                                    </div>



                            </div>

                        </div>


                    </div>

                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/symbols.blade.php ENDPATH**/ ?>