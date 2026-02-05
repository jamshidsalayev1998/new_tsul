
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header w-100">
                                <div style="display: flex; justify-content: space-between ; width: 100%">
                                    <div>
                                        <h3 class="card-title">Slider</h3>
                                    </div>
                                    <div>
                                        <a type="submit" href="<?php echo e(route('admin.slider.create')); ?>"
                                           class="btn btn-success"><i
                                                class="fa fa-plus-circle"></i> Yangi
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table bordered " id="example1">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Rasm
                                                </th>
                                                <th>
                                                    Tekst
                                                </th>
                                                <th>
                                                    Link
                                                </th>
                                                <th style="width: 1px">
                                                    Amallar
                                                </th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $slider_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr id="tr-href" hrefd="<?php echo e($item->link_text); ?>">
                                                    <td>
                                                        <img style="width: 100px; height: auto"
                                                             src="<?php echo e(asset($item->image_uz)); ?>" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="table-text"
                                                             style="font-size: 13px !important; height: 100px !important; overflow: hidden">
                                                            <?php echo $item->text_uz ? $item->text_uz : 'Text example'; ?>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <?php echo e($item->link_uz?$item->link_uz:'Link text'); ?>

                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <a href="<?php echo e(route('admin.slider.edit' , ['id' => $item->id])); ?>"
                                                               type="button" class="btn btn-light"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <button type="button"
                                                                    class="btn btn-light text-danger delete-button"
                                                                    deletingId="slide<?php echo e($item->id); ?>"><i
                                                                    class="fa fa-trash"></i></button>
                                                            <form id="slide<?php echo e($item->id); ?>"
                                                                  action="<?php echo e(route('admin.slider.delete' , ['id' => $item->id])); ?>"
                                                                  method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('DELETE'); ?>
                                                            </form>
                                                        </div>
                                                    </td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function () {
            $('#tr-href').click(function () {
                var href = $(this).attr('hrefd');
                // alert(href)
                if (href) {
                    window.location.href = href;
                }
            });
            $('.delete-button').click(function () {
                var id = $(this).attr('deletingId');
                if (confirm('O`chirasizmi?')) {
                    $('#' + id).submit();
                }
            })
            $('.table-text>p').css({
                fontSize: '11px',
                textAlign: 'start'
            })
            $('.table-text>h1').css({
                fontSize: '11px',
                textAlign: 'start'
            })
        })
        $(function () {
            $('#summernote').summernote()
        });
        $(function () {
            $('#summernote1').summernote()
        });
        $(function () {
            $('#summernote2').summernote()
        });

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/slider/index.blade.php ENDPATH**/ ?>