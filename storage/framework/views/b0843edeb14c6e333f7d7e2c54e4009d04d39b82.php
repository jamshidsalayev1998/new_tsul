<?php
$locale = app()->getLocale();
$content_locale = 'content_' . $locale;
$title_locale = 'title_' . $locale;
$image_locale = 'image_' . $locale;
$name_locale = 'name_' . $locale;
$i = 0;
?>
<?php $__currentLoopData = $announces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announce): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="anons_in_news_card_item">
        <div>
                                                <span>
                                                    <?php echo e(date('d' , strtotime($announce->date))); ?><br/><?php echo e($announce->get_month_short_name($locale)); ?>

                                                </span>
        </div>
        <div>
            <a href="<?php echo e(route('simple.announces.show' , ['id' => $announce->id])); ?>">
                <?php echo e($announce->$title_locale); ?>

            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/resources/views/simple/news_announces_scroll.blade.php ENDPATH**/ ?>