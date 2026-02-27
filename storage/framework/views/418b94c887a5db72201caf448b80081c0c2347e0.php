<?php
$locale = app()->getLocale();
$content_locale = 'content_' . $locale;
$title_locale = 'title_' . $locale;
$image_locale = 'image_' . $locale;
$name_locale = 'name_' . $locale;
$i = 0;
?>
<?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-6 col-lg-6 col-md-6   mt-2">
        <div class="news_small_cards">
            <div class="news_small_cards_img_box">
                <img src="<?php echo e(asset('')); ?><?php echo e($item->$image_locale); ?>" alt="">
            </div>
            <div class="px-2">
                <button class="card_button_links mt-2"><?php echo e($item->type->$name_locale); ?></button>
                <span class="news_small_cards_text "><a
                        href="<?php echo e(route('simple.news.show' , ['id' => $item->id, 'slug' => $item->create_slug() , 'type' => $item->create_type_slug()])); ?>"
                        style=""><?php echo e($item->$title_locale); ?></a>
                                                </span>
                <a href="<?php echo e(route('simple.news.show' , ['id' => $item->id, 'slug' => $item->create_slug() , 'type' => $item->create_type_slug()])); ?>"
                   class="text-end text-secondary mt-1 d-block"
                   style="font-size: 13px; font-weight: 600;"><?php echo e(date('d.m.Y' , strtotime($item->created_at))); ?></a>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/resources/views/simple/news_scroll.blade.php ENDPATH**/ ?>