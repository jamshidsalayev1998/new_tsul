<?php
$locale = app()->getLocale();
$content_locale = 'content_'.$locale;
$title_locale = 'title_'.$locale;
$image_locale = 'image_'.$locale;
$name_locale ='name_'.$locale;
$short_info_locale ='short_info_'.$locale;
$logo_locale = 'front_assets/assets/img/logo_university/_TDYU_'.$locale.'_white_primary.png';
$i = 0;
?>
<?php $__currentLoopData = $announces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <div>
            <?php echo e(date('d' , strtotime($anc->date))); ?><br> <br> <?php echo e($anc->get_month_short_name($locale)); ?>

        </div>
        <div>
            <a href="<?php echo e(route('simple.announces.show' , ['id' => $anc->id])); ?>">
                <?php echo e($anc->$title_locale); ?>

            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/resources/views/simple/news_show_announces_scroll.blade.php ENDPATH**/ ?>