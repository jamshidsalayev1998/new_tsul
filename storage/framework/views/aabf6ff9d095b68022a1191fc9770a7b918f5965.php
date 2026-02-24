
<?php $__env->startSection('title'); ?>
    <?php
    $locale = app()->getLocale();
    $content_locale = 'content_' . $locale;
    $general_info_locale = 'general_info_' . $locale;
    $contact_info_locale = 'contact_info_' . $locale;
    $text_locale = 'text_' . $locale;
    $name_locale = 'name_' . $locale;
    $image_locale = 'image_' . $locale;
    $link_locale = 'link_' . $locale;
    $fio_locale = 'fio_' . $locale;
    $title_locale = 'title_' . $locale;
    $short_info_locale = 'short_info_' . $locale;

    ?>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container  bg-white">
        <div class="row py-4">

            <div class="d-flex align-items-center justify-content-between py-2 px-4 my-4 TeacherName imgCenter">
                <div>
                    <h4 class="fs-5 m-0 p-0"><?php echo e($teacher->$fio_locale); ?></h4>
                    <span class="text-muted"><?php echo e($teacher->teacher_degree->$name_locale); ?></span>
                </div>
                <div>
                    <img src="<?php echo e(asset('front_assets/assets/img/logo_main.png')); ?>" alt="">
                </div>
            </div>

            <!--Start fast links-->
             <?php echo $__env->make('simple.includes.teacher_article_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--End fast links-->

            <!-- Article info secion -->
            <div id="divBottom" class="col-12 col-md-12 col-lg-9 px-4">
                <div class="borderTop borderBottom px-4 additionalInfo">
                    <h6 class="my-3 fw-bold"><?php echo app('translator')->get('index.Articles'); ?></h6>
                </div>

                <div class="col-12 justifyAll m-0  additionalInfo px-4 pr-5 my-3">
                    <?php $__currentLoopData = $teacher->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="my-2">
                        <p class="fw-bolder bottomHr"><?php echo e($article->$name_locale); ?></p>
                        <?php echo $article->short_info; ?>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
            <!--End Article info secion -->

        </div>

        <!--Start Teacher card section -->
        <?php echo $__env->make('simple.includes.teachers_corusel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--End Teacher card section -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/teacher_article_show.blade.php ENDPATH**/ ?>