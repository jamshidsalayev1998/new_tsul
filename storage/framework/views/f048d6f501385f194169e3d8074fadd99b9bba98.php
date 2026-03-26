
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
                <div class="row">
                    <div class="col-12">
                        <form action="<?php echo e(route('admin.page.update' , ['id' => $data->id])); ?>" method="post"
                              class="form_news">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card">
                                <div class="card-header w-100">
                                    <div style="display: flex; justify-content: space-between ; width: 100%">
                                        <div>
                                            <h3 class="card-title">Page create</h3>
                                        </div>
                                        <div>
                                            <button type="button"
                                                    class="btn btn-success saqlash_button">saqlash
                                            </button>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col-md-10">
                                            <label for="">Title</label>
                                            <input type="text" required class="form-control" name="title"
                                                   value="<?php echo e($data->title); ?>">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Slug</label>
                                            <input type="text" class="form-control" name="slug" value="<?php echo e($data->slug); ?>">
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
                                                         class="border"><?php echo $data->content_uz; ?></div>
                                                    <textarea name="content_uz" hidden rows="11" cols="30"
                                                              id="editor_text1"
                                                              class="form-control summernote1"><?php echo e($data->content_uz); ?></textarea>

                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-four-2"
                                                     role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">

                                                    <label for="">Content</label>
                                                    <div id="editor2" data-text="editor_text2"
                                                         class="border"><?php echo $data->content_ru; ?></div>
                                                    <textarea name="content_ru" hidden rows="11" cols="30"
                                                              id="editor_text2"
                                                              class="form-control summernote2"><?php echo e($data->content_ru); ?></textarea>


                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-four-3"
                                                     role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">

                                                    <label for="">Content</label>
                                                    <div id="editor3" data-text="editor_text3"
                                                         class="border"><?php echo $data->content_en; ?></div>
                                                    <textarea name="content_en" hidden rows="11" cols="30"
                                                              id="editor_text3"
                                                              class="form-control summernote3"><?php echo e($data->content_en); ?></textarea>


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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js_after'); ?>
    <script src="<?php echo e(asset('admin_lte/ckeditor5/build/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_lte/ckeditor5/ckeditor5_connect.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('admin_lte/ckeditor5/correcting.js')); ?>"></script>
    
    

    <script>
        // $(document).ready(function(){
        //            $('.summernote1').summernote();
        //            $('.summernote2').summernote();
        //            $('.summernote3').summernote();
        //        })
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/pages/edit.blade.php ENDPATH**/ ?>