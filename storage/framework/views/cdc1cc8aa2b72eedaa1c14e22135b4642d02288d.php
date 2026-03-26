
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .select2-selection__rendered {
            margin-top: -13px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <?php if(session('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if(session('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo e(session('error')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-12">
                        <form action="<?php echo e(route('admin.slug.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="text" hidden readonly name="menu_id" value="<?php echo e($menu->id); ?>">
                            <input type="text" hidden readonly name="page_id" value="<?php echo e($page->id); ?>">
                            <div class="card">
                                <div class="card-header w-100">
                                    <div style="display: flex; justify-content: space-between ; width: 100%">
                                        <div>
                                            <h3 class="card-title">Pdage create</h3>
                                        </div>
                                        <div>
                                            <?php if($clear): ?>
                                                <button class="btn btn-dark page-clear-button " type="button"><i
                                                        class="fas fa-eraser"></i></button>
                                            <?php endif; ?>
                                            <button type="submit" href="<?php echo e(route('admin.page.store')); ?>"
                                                class="btn btn-success saqlash_button">saqlash
                                            </button>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="">Title</label>
                                            <input type="text" class="form-control" name="title" value="<?php echo e($page->title); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Slug</label>
                                            <input type="text" class="form-control" name="slug" value="<?php echo e($for_slug); ?>">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="custom-tabs-four-1-tab"
                                                       data-toggle="pill" href="#custom-tabs-four-1" role="tab"
                                                       aria-controls="custom-tabs-four-1" aria-selected="false">
                                                        uz</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-four-2-tab"
                                                       data-toggle="pill" href="#custom-tabs-four-2" role="tab"
                                                       aria-controls="custom-tabs-four-2" aria-selected="false">
                                                        ru</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-four-3-tab"
                                                       data-toggle="pill" href="#custom-tabs-four-3" role="tab"
                                                       aria-controls="custom-tabs-four-3" aria-selected="false">
                                                        en</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                                <div class="tab-pane fade show active" id="custom-tabs-four-1"
                                                     role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                                    <label for="">Content</label>
                                                    <div id="editor1" data-text="editor_text1"
                                                         class="border"><?php echo $page->content_uz; ?></div>
                                                    <textarea name="content_uz" hidden rows="11" cols="30"
                                                              id="editor_text1"
                                                              class="form-control summernote1"><?php echo e($page->content_uz); ?></textarea>

                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-four-2"
                                                     role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">

                                                    <label for="">Content</label>
                                                    <div id="editor2" data-text="editor_text2"
                                                         class="border"><?php echo $page->content_ru; ?></div>
                                                    <textarea name="content_ru" hidden rows="11" cols="30"
                                                              id="editor_text2"
                                                              class="form-control summernote2"><?php echo e($page->content_ru); ?></textarea>


                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-four-3"
                                                     role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">

                                                    <label for="">Content</label>
                                                    <div id="editor3" data-text="editor_text3"
                                                         class="border"><?php echo $page->content_en; ?></div>
                                                    <textarea name="content_en" hidden rows="11" cols="30"
                                                              id="editor_text3"
                                                              class="form-control summernote3"><?php echo e($page->content_en); ?></textarea>


                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <?php if($clear): ?>
        <form action="<?php echo e(route('admin.slug.clear')); ?>" class="clear-slug-page" method="post">
            <?php echo csrf_field(); ?>
            <input type="text" hidden readonly value="<?php echo e($menu->id); ?>" name="menu_id">
            <input type="text" hidden readonly value="<?php echo e($page->id); ?>" name="page_id">
        </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js_after'); ?>
    <script src="<?php echo e(asset('admin_lte/ckeditor5/build/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_lte/ckeditor5/ckeditor5_connect.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('admin_lte/ckeditor5/correcting.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_lte/plugins/select2/js/select2.full.min.js')); ?>"></script>
    <script>
        $('.page-clear-button').click(function () {
            if (confirm('Tasdiqlaysizmi? Malumotni qayta tiklashning iloji yoq.')) {
                $('.clear-slug-page').submit();
            }
        })
    </script>
    <script>
        $('#summernote1').summernote();
        $('#summernote2').summernote();
        $('#summernote3').summernote();
        $('.select2').select2()
    </script>
    <script>
        $('.form-delete').click(function () {
            var id = $(this).attr('data-id');
            if (confirm('O`chirishni tasdiqlaysizmi')) {
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-' + id).submit();
            }
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/slugs/index.blade.php ENDPATH**/ ?>