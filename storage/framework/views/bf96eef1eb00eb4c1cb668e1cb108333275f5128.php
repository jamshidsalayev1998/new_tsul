
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/Timetable_of_classes/Timetable_of_classes.css')); ?>">
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $title_locale = 'title_'.$locale;
        $image_locale = 'image_'.$locale;
        $name_locale ='name_'.$locale;
        $i = 0;
    ?>
    <div class="Timetable_of_classes">
            <div class="container">
                <div class="row">
                    <div>
                        <a href="index.html" class="text-secondary"
                            style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Главная страница'); ?></a>
                        <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                style="font-size:10px"></i></span>
                        <a href="#" class="text-secondary"
                            style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Расписание сессии'); ?></a>
                    </div>
                    <h1><?php echo app('translator')->get('index.Расписание сессии'); ?></h1>

                    <div class="tab-own">
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <button class="tablink" <?php if($loop->first): ?> style="border-top-left-radius:30px" <?php elseif($loop->last): ?> style="border-top-right-radius:30px" <?php endif; ?> onclick="openPage('page<?php echo e($course->id); ?>', this, 'white')" <?php if($loop->first): ?> id="defaultOpen" <?php endif; ?>>
                                <?php echo e($course->name); ?> курс</button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div id="page<?php echo e($course->id); ?>" class="tabcontent">
                                      <?php $__currentLoopData = $course->get_faculties(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <div class="class-list">
                                            <h5><?php if($course->type_id == 1): ?><?php echo app('translator')->get('index.Бакалавриат'); ?> <?php else: ?> <?php echo app('translator')->get('index.Магистратура'); ?> <?php endif; ?></h5>
                                            <p><?php echo e($faculty->name_uz); ?></p>
                                            <?php $__currentLoopData = $faculty->get_groups($course->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($group->timetable_session_file): ?>
                                              <a href="<?php echo e(asset('')); ?><?php echo e($group->timetable_session_file); ?>"><?php echo e($group->name); ?></a>
                                              <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>




                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('front_assets/js/Timetable_of_classes.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/timetable_session.blade.php ENDPATH**/ ?>