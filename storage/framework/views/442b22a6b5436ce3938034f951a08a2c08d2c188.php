
<div class="col-12 col-md-12 col-lg-3  imgCenter">
    <div class="left_menu_of_page">
        <div class="left_side_title_top d-none"></div>
        <div class="munu">
            <a href="<?php echo e(route('simple.teacher.show' , ['id' => $teacher->id, 'slug' => $teacher->$fio_locale
])); ?>" class="<?php if(Route::is('simple.teacher.show')): ?> <?php echo e('activeSidebar'); ?> <?php endif; ?>"><?php echo app('translator')->get('index.Biography and CV'); ?></a>
            <a href="<?php echo e(route('simple.teacher_articles.show' , ['id' => $teacher->id , 'slug' => $teacher->$fio_locale])); ?>"
               class="<?php if(Route::is('simple.teacher_articles.show')): ?> <?php echo e('activeSidebar'); ?> <?php endif; ?>"><?php echo app('translator')->get('index.Articles'); ?></a>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/simple/includes/teacher_article_sidebar.blade.php ENDPATH**/ ?>