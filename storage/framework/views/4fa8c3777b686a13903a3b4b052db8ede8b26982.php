<div class="left_side_title_top"><?php echo app('translator')->get('index.БЫСТРЫЕ ССЫЛКИ'); ?></div>
<div>
    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($link->slug); ?>" class="card-text"><i
                class="fas fa-angle-double-right text-secondary"></i><?php echo e($link->$name_locale); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH /var/www/html/resources/views/simple/includes/links.blade.php ENDPATH**/ ?>