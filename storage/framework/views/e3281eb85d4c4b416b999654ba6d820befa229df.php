<?php
$locale = app()->getLocale();
$content_locale = 'content_' . $locale;
$title_locale = 'title_' . $locale;
$image_locale = 'image_' . $locale;
$name_locale = 'name_' . $locale;
$i = 0;
?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="col-xl-6 col-lg-6 col-md-6   mt-2">
        <div class="news_small_cards">
            <div class="news_small_cards_img_box">
                <img src="<?php echo e(asset('')); ?><?php echo e($item->$image_locale); ?>" alt="">
            </div>
            <div class="px-2">
                <?php if($item->type): ?>
                    <button
                        class="card_button_links mt-2"><?php echo e($item->type->$name_locale); ?></button>
                <?php endif; ?>
                    <a href="<?php echo e(route('simple.announces.show' , ['id' => $item->id])); ?>"
                       class="news_main_card_text">
                        <?php echo e($item->$title_locale); ?>

                    </a>

                <a href="<?php echo e(route('simple.announces.show' , ['id' => $item->id])); ?>"
                   class="text-end text-secondary mt-1 d-block"
                   style="font-size: 13px; font-weight: 600;"><?php echo e(date('d.m.Y' , strtotime($item->date))); ?></a>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/resources/views/simple/announces_scroll.blade.php ENDPATH**/ ?>