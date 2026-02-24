<?php
$locale = app()->getLocale();
$content_locale = 'content_'.$locale;
$title_locale = 'title_'.$locale;
$image_locale = 'image_'.$locale;
$name_locale ='name_'.$locale;
$short_info_locale ='short_info_'.$locale;
$i = 0;
?>
<?php $__currentLoopData = $others; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 mt-3 last_news_bottom_card">
        <a href="<?php echo e(route('simple.announces.show' , ['id' => $other->id])); ?>">
            <div>
                <img src="<?php echo e(asset('')); ?><?php echo e($other->$image_locale); ?>" alt="">
            </div>
            
            <h6 class="last_news_bottom_card_text mt-2">
                <?php echo e($other->$short_info_locale); ?>

            </h6>
            <span class="text-secondary text-end d-block"
                  style="font-size: 13px; font-weight: 500;"><?php echo e($other->date); ?></span>
        </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/resources/views/simple/announce_show_scroll.blade.php ENDPATH**/ ?>