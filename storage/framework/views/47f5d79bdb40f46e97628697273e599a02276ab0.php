
<?php $__env->startSection('links'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('front_assets/css/asking_quations/asking_quations.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php
        $locale = app()->getLocale();
        $content_locale = 'content_'.$locale;
        $name_locale ='name_'.$locale;
    ?>
<div class="asking_quations animate__animated animate__fadeIn animate__delay-0.5s">
            <div class="container">
                <div class="row">

                     <!--breadcrumb-->
                     <div class="col-xl-12 col-lg-12">
                        <div>
                            <a href="/" class="text-secondary"
                                style="font-weight:500; font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo app('translator')->get('index.Главная страница'); ?></a>
                            <span class="text-secondary" style="font-weight:500"><i class="fas fa-chevron-right"
                                    style="font-size:10px"></i></span>
                            <a href="#" class="text-secondary"
                                style="font-weight:500;  font-size: 15px; font-family: Times New roman, sans-serif;"><?php echo e($menu->$name_locale); ?></a>
                            <span class="text-secondary" style="font-weight:500">&nbsp;
                                </span>
                        </div>
                    </div>


                    <div class="col-xl-3 mt-3 animate__animated animate__fadeInLeft">
                        <div class="left_menu_of_page">
                            <?php echo $__env->make('simple.includes.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('simple.includes.socials_box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>


                    <div class="col-xl-9  form mt-3">
                        <h1><?php echo app('translator')->get('index.Задать вопросы'); ?></h1>
                          <form  action="<?php echo e(route('simple.ask_question.store')); ?>" method="post">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('POST'); ?>
                            <div class="form-lines">
                              <label for="usr"> <?php echo app('translator')->get('index.Имя'); ?> </label>
                              <input type="text" class="form-control" id="usr" name="name" placeholder="" required>
                            </div>

                            <div class="form-lines">
                                <label for="usr"> <?php echo app('translator')->get('index.Фамилия'); ?> </label>
                                <input type="text" class="form-control" id="usr" name="surname" placeholder="" >
                            </div>

                            <div class="form-lines">
                                <label for="email"><?php echo app('translator')->get('index.Электронная почта'); ?></label>
                                <input type="email" class="form-control" placeholder="" id="email" name="email" required>
                            </div>

                            <div class="form-lines">
                                <label for="phone"><?php echo app('translator')->get('index.Телефон номер'); ?>:</label>
                                <input type="tel" class="form-control" placeholder="" id="tel" name="phone">
                            </div>

                            <div class="form-lines">
                                <label for="comment"><?php echo app('translator')->get('index.Ваш вопрос'); ?></label>
                                <textarea class="form-control" rows="8" placeholder="" id="comment" name="body" required></textarea>
                            </div>

                            <hr>
                            <div class="button-bottom">
                                <button type="submit" class="submit-button"><?php echo app('translator')->get('index.Submit'); ?></button>
                            </div>

                          </form>
                        </div>



                </div>




            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/ask_questions.blade.php ENDPATH**/ ?>