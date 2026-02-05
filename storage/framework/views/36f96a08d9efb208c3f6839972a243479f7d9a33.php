
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
        <!--Start Teacher info section -->
        <div id="printThis" class="row  py-4">
            <!--Start inPrintMode -->
            <div class="imgCenter1 my-3 row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between py-2 px-4 my-4 TeacherName">
                        <div>
                            <h4 class="fs-5 m-0 p-0"><?php echo e($teacher->$fio_locale); ?></h4>
                            <span class="text-muted"><?php echo e($teacher->teacher_degree->$name_locale); ?></span>
                        </div>
                        <div>
                            <img src="<?php echo e(asset('front_assets/assets/img/logo_main.png')); ?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex">
                    <div class="col-7">
                        <div class="teacherSoc">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                        </div>

                        <div class="my-2 mb-3">
                            <p class="bold mb-1"><?php echo e($teacher->kafedra->$name_locale); ?></p>
                            <!-- <span>Toshkent sh, Sayilgokh ko'chasi 3a</span> -->
                        </div>

                        <div class="my-2 mb-3 TeacherCon">
                        <p class="bold mb-1"><?php echo app('translator')->get('index.Contacts'); ?></p>
                        <?php echo $teacher->$contact_info_locale; ?>

                    </div>

                        <!-- <div class="my-2 mb-3">
                            <p class="bold mb-1">Ish vaqti</p>
                            <span>Dushanba-Chorshanba-09:00-18:00</span><br>
                            <span>Payshanba-Shanba-14:00-18:00</span>

                        </div> -->
                    </div>

                    <div class="col-5">
                        <img class="imgFit img-fluid" src="<?php echo e(asset($teacher->image)); ?>"
                             alt="">
                    </div>
                </div>
            </div>
            <!--End inPrintMode -->

            <!-- Start in Browser Mode -->
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

            <!-- Teacher info secion -->
            <div id="divTop" class="col-12 col-md-4 col-lg-3 borderTop">
                <div class="my-2 imgCenter">
                    <div id="imgCenter" class="imgCenter">
                        <img class="imgFit  img-fluid px-4"
                             src="<?php echo e(asset($teacher->image)); ?>" alt="">
                    </div>
                    <div class="teacherSoc">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                    </div>

                    <div class="my-2 mb-3">
                        <p class="bold mb-1"><?php echo e($teacher->kafedra->$name_locale); ?></p>
                        
                    </div>

                    <div class="my-2 mb-3 TeacherCon">
                        <p class="bold mb-1"><?php echo app('translator')->get('index.Contacts'); ?></p>
                        <?php echo $teacher->$contact_info_locale; ?>

                        <p>SPIN: <?php echo e($teacher->spin_rints); ?></p>
                        <p>ORCID: <?php echo e($teacher->orcid); ?></p>
                    </div>

                
                
                
                

                

                <!-- Print all Teacher items -->
                    <div class="py-2">
                        <button id="magicPrint" class="btn btn-primary btn-sm w-100"
                                style="text-transform: capitalize !important;"><i
                                class="fas fa-print fs-6"></i></button>
                    </div>
                    <!--End Print all Teacher items -->
                </div>
            </div>

            <div id="divBottom" class="col-12 col-md-8 col-lg-6 px-4">
                <div class="borderTop borderBottom px-4 additionalInfo">
                    <h6 class="my-3"><?php echo e($teacher->kafedra->$name_locale); ?></h6>
                </div>

                <div class="col-12 justifyAll  m-0 borderBottom additionalInfo px-4 my-3">
                    <p class="p-0 m-0 bold"><?php echo app('translator')->get('index.Language'); ?></p>
                    <small><?php echo e($teacher->language); ?></small>
                    <p class="p-0 m-0 bold"><?php echo app('translator')->get('index.Experience'); ?></p>
                    <small><?php echo e($teacher->staj); ?></small>
                    <p class="p-0 m-0 bold"><?php echo app('translator')->get('index.Additional info'); ?></p>
                    <?php echo $teacher->$general_info_locale; ?>

                </div>

            </div>
            <!-- Teacher info secion -->

            <!-- End in Browser Mode -->
        </div>
        <!--Start all teacher print js -->
            <script>
document.getElementById("magicPrint").onclick = function () {
    printElement(document.getElementById("printThis"))
}
function printElement(elem) {
    var domClone = elem.cloneNode(true);
    var $printSection = document.getElementById("printSection")

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    $printSection.innerHTML = "";
    $printSection.appendChild(domClone);
    window.print().callback((e) => {
        console.log(e);
    });
}
            </script>
        <!--End all teacher print js -->


        <!--End Teacher info section -->

        <!--Start Teacher card section -->
        <?php echo $__env->make('simple.includes.teachers_corusel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--End Teacher card section -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/teacher_article2.blade.php ENDPATH**/ ?>