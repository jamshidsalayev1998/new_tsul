
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
    <div class="container allTeacherSection  p-0  bg-white my-4">

        <div class="allTeacherImg position-relative">
            <img class="img-fluid"
                <?php if($banner->image): ?> src="<?php echo e(asset($banner->image)); ?>" <?php else: ?> src="<?php echo e(asset('front_assets/assets/all_teachers_banner/photo_2021-12-25_12-58-50.jpg')); ?>" <?php endif; ?> alt="">
            <!-- img backgroun shadow -->
            <div class="text-white allTeacherImgbackBlack"></div>
            <div class="text-white allTeacherImgbackCustom"></div>

            <!-- Start img backgroun shadow -->
            <div class="imgFrontText">
                <h1 class="topleft fs-1 BunderlineWhite"><?php echo e($banner->$title_locale); ?></h1>
                <h2 class="bottomleft fs-3"><?php echo $banner->$content_locale; ?>

                </h2>

            </div>
        </div>

        <div class="row">
            <!-- all teacher table section -->
            <div class="col-12  px-5 py-5">
                <div class="align-items-center justify-content-between d-flex">
                    <h5 class="my-3 bold textColor Bunderline"><?php echo app('translator')->get('index.All teachers list'); ?> <?php echo e($filters?isset($filters['kafedra'])?' | '.$filters['kafedra']->$name_locale:'':''); ?> <?php echo e($filters?isset($filters['degree'])?' | '.$filters['degree']->$name_locale:'':''); ?>   </h5>
                </div>

                <!--Start table  -->
                <div class="col-12 table-responsive  mt-4 p-0">
                    <table class="table table-hover  m-0 p-0" id="datatable">
                        <thead class="bgTable text-center thead">
                        <tr class="dataTable">
                            <th class="col-4 border-end align-middle" scope="col"><a href="#"><?php echo app('translator')->get('index.Last name first name'); ?></a>
                            </th>
                            <th class="col-2 border-end align-middle" scope="col"><a href="#"><?php echo app('translator')->get('index.Academic degree'); ?></a></th>
                            <th class="col-5 border-end align-middle" scope="col"><a href="#"><?php echo app('translator')->get('index.Kafedra'); ?></a></th>
                            <th class="col-1 border-end align-middle" scope="col"><a href="#">>></a></th>
                        </tr>
                        </thead>
                        <tbody class="tbody border-0">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="text-center">
                                <td class="align-start text-start ps-4 border-end"><a href="<?php echo e(route('simple.teacher.show' , ['id' => $item->id , 'slug' => $item->$fio_locale])); ?>"><?php echo e($item->$fio_locale); ?></a></td>
                                <td class="align-start text-start ps-4 border-end">
                                    <a href="<?php echo e(route('simple.teacher.index' , ['degree_id' => $item->degree])); ?>"><?php echo e($item->teacher_degree->$name_locale); ?></a>
                                </td>
                                <td class="align-start border-end text-start ps-4">
                                    <a href="<?php echo e(route('simple.teacher.index' , ['degree_id' => 'all','department_id' => $item->kafedra_id])); ?>"><?php echo e($item->kafedra->$name_locale); ?></a>
                                </td>
                                <td class="align-middle small bold"><a href="#">>></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- End table  -->

                <!-- Start pagination  -->
                <div class="mt-4 paginationTeach justify-content-center d-flex">






















                </div>
                <!-- End pagination  -->


            </div>
            <!--End all teacher table section -->

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('simple.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/simple/all_teachers.blade.php ENDPATH**/ ?>