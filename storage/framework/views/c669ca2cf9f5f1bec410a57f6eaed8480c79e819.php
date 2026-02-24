<section class="seventh-part w-100 my-5  bg-white rounded-3">
                <div class="container">

                    <div class="align-items-center justify-content-between d-block d-md-flex mb-4">
                        <div class="Bunderline">
                            <h2 class="textColor "><?php echo app('translator')->get('index.Our teachers'); ?></h2>
                        </div>
                        <div>
                            <a href="<?php echo e(route('simple.teacher.index')); ?>" class="fw-bold Bline decNone textColor fs-5"><?php echo app('translator')->get('index.All teachers list'); ?></a>
                        </div>
                    </div>
                    <div class="gtco-testimonials">
                        <div id="owl-carousel1" class="owl-carousel owl-carousel1 owl-theme">
                            <?php $__currentLoopData = $other_teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $other_teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="divHR">
                                    <a href="<?php echo e(route('simple.teacher.show' , ['id' => $other_teacher->id , 'slug' => $other_teacher->$fio_locale])); ?>">
                                    <div class="card text-center rounded-0">
                                        <div>
                                            <img class="card-img-top rounded-0"
                                                 src="<?php echo e(asset($other_teacher->image)); ?>"
                                                 alt="">
                                        </div>
                                        <div>
                                            <a href="<?php echo e(route('simple.teacher.show' , ['id' => $other_teacher->id , 'slug' => $other_teacher->$fio_locale])); ?>"
                                               class="decNone">
                                                <p class=" py-3"><?php echo e($other_teacher->$fio_locale); ?></p>
                                                <p class="text-white  py-3 bgText"><?php echo e($other_teacher->teacher_degree->$name_locale); ?></p>
                                            </a>
                                        </div>
                                    </div>
                                        </a>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </section>
<?php /**PATH /var/www/html/resources/views/simple/includes/teachers_corusel.blade.php ENDPATH**/ ?>