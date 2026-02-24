<?php
$locale = app()->getLocale();
$content_locale = 'content_'.$locale;
$title_locale = 'title_'.$locale;
$image_locale = 'image_'.$locale;
$name_locale ='name_'.$locale;
$short_info_locale ='short_info_'.$locale;
$i = 0;
?>
<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <div>
            <?php echo e(date('d' , strtotime($anc->date))); ?><br> <br> <?php echo e($anc->get_month_short_name($locale)); ?>

        </div>
        <div>
            <a href="<?php echo e(route('simple.news.show' , ['id' => $anc->id,'slug' => $anc->create_slug() , 'type' => $anc->create_type_slug()])); ?>">
                <?php echo e($anc->$title_locale); ?>

            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/resources/views/simple/announce_show_news_scroll.blade.php ENDPATH**/ ?>