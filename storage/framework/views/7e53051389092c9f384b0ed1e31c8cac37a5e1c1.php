
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/faq_css/faq.css')); ?>">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                           <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->make('simple.includes.socials_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                    <div class="col-xl-9 accordion-style">
                <div class="mt-4">
                    <h2><?php echo app('translator')->get('index.Ko\'p beriladigan savollar va javoblar'); ?></h2>
                    <div class="accordion">
                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.Talabalar qaysi yo‘nalishlar bo‘yicha ta’lim oladilar?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a1'); ?>
                        </div>

                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.TDYU o‘quv rejasiga qanday modullar kiritilgan?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a2'); ?>
                        </div>

                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.TDYUda ta’lim necha tilda olib boriladi?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a3'); ?>
                        </div>

                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.Talabalar bilimi qanday baholanadi?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a4'); ?>
                        </div>
                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.O‘quv adabiyotlarini qayerdan olsa bo‘ladi?'); ?>
                        </h3>
                        <div><?php echo app('translator')->get('index.a5'); ?>
                        </div>
                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.Talabalarning amaliyoti qanday tashkil etilgan?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a6'); ?>
                        </div>

                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.Taqsimot bo‘yicha ishga joylashish imkoniyati bormi?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a7'); ?>
                        </div>

                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.TDYU doktoranturasiga o‘qishga kirish jarayoni qanday?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a8'); ?></div>

                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.Toshkent davlat yuridik universiteti avvalgi institutdan nimasi bilan farq qiladi?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a9'); ?></div>

                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.TDYUda xorijliklar tahsil olishi mumkinmi?'); ?>
                        </h3>
                        <div><?php echo app('translator')->get('index.a10'); ?></div>

                        <h3><i class="fas fa-chevron-down"></i><?php echo app('translator')->get('index.TDYUga O‘zbekistonning boshqa oliy ta’lim muassasasidan yoki xorijiy oliy ta’lim muassasasidan o‘qishni o‘tkazish mumkinmi?'); ?></h3>
                        <div><?php echo app('translator')->get('index.a11'); ?></div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('front_assets/js/faq.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/faq.blade.php ENDPATH**/ ?>