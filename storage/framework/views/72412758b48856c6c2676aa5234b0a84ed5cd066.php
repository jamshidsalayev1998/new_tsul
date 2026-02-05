
<?php $__env->startSection('link'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>
        /*.select2-selection__rendered{*/
        /*    margin-top: -13px !important;*/
        /*}*/
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #6f42c1 !important;
            border-color: #643ab0 !important;
            color: #fff;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="<?php echo e(route('admin.neww.update' , ['id' => $data->id])); ?>" method="post"
                              class="form_news" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card">
                                <div class="card- header w-100 mt-2 p-3">
                                    <div style="display: flex; justify-content: space-between ; width: 100%">
                                        <div>
                                            <h3 class="card-title">News create</h3>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success saqlash_button">saqlash
                                            </button>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date <span class="text-danger"><?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                        <input type="date" class="form-control" name="date"
                                                               value="<?php echo e($data->date); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Type <span class="text-danger"><?php $__errorArgs = ['type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                        <select name="type_id" class="form-control">
                                                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option <?php if($type->id == $data->type_id): ?> selected
                                                                        <?php endif; ?> value="<?php echo e($type->id); ?>"><?php echo e($type->name_ru); ?></option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="card card-primary card-outline card-outline-tabs">
                                            <div class="card-header p-0 border-bottom-0">
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
                                            <div class="card-body">
                                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                                    <div class="tab-pane fade show active" id="custom-tabs-four-1"
                                                         role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                                        <div class="form-group">
                                                            <label for="">Title uz <span class="text-danger"><?php $__errorArgs = ['title_uz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <input type="text" class="form-control" name="title_uz"
                                                                   value="<?php echo e($data->title_uz); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Short info uz <span class="text-danger"><?php $__errorArgs = ['short_info_uz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <textarea name="short_info_uz" cols="30"
                                                                      class="form-control"><?php echo e($data->short_info_uz); ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Content uz <span class="text-danger"><?php $__errorArgs = ['content_uz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <div id="toolbar-container1"></div>
                                                            <div id="editor1" data-text="editor_text1"
                                                                 class="border"><?php echo $data->content_uz; ?></div>
                                                            <textarea name="content_uz" hidden id="editor_text1"
                                                                      cols="30"
                                                                      rows="10"></textarea>
                                                        </div>
                                                         <div class="form-group">
                                                                <label for="">Image uz <span class="text-danger"><?php $__errorArgs = ['image_uz'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                                <div class="img-box border"
                                                                     style="width: 100%; height: 300px; overflow: hidden">
                                                                    <img src="<?php echo e(asset('')); ?><?php echo e($data->image_uz); ?>" alt=""
                                                                         id="imagePreview1"
                                                                         style="width: 100%; height: auto; ">
                                                                    <input type="file" id="imageUpload1" hidden
                                                                           name="image_uz">
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                            class="btn btn-light select-image1"
                                                                            style="right: 0; bottom: 0; position: absolute">
                                                                        <i class="fa fa-edit"></i></button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel"
                                                         aria-labelledby="custom-tabs-four-2-tab">
                                                        <div class="form-group">
                                                            <label for="">Title ru <span class="text-danger"><?php $__errorArgs = ['title_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <input type="text" class="form-control" name="title_ru"
                                                                   value="<?php echo e($data->title_ru); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Short info ru <span class="text-danger"><?php $__errorArgs = ['short_info_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <textarea name="short_info_ru" cols="30"
                                                                      class="form-control"><?php echo e($data->short_info_ru); ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Content ru <span class="text-danger"><?php $__errorArgs = ['content_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <div id="toolbar-container2"></div>
                                                            <div id="editor2" data-text="editor_text2"
                                                                 class="border"><?php echo $data->content_ru; ?></div>
                                                            <textarea name="content_ru" hidden id="editor_text2"
                                                                      cols="30"
                                                                      rows="10"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="">Image ru <span class="text-danger"><?php $__errorArgs = ['image_ru'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                                <div class="img-box border"
                                                                     style="width: 100%; height: 300px; overflow: hidden">
                                                                    <img src="<?php echo e(asset('')); ?><?php echo e($data->image_ru); ?>" alt=""
                                                                         id="imagePreview2"
                                                                         style="width: 100%; height: auto; ">
                                                                    <input type="file" id="imageUpload2" hidden
                                                                           name="image_ru">
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                            class="btn btn-light select-image2"
                                                                            style="right: 0; bottom: 0; position: absolute">
                                                                        <i class="fa fa-edit"></i></button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel"
                                                         aria-labelledby="custom-tabs-four-3-tab">
                                                        <div class="form-group">
                                                            <label for="">Title en <span class="text-danger"><?php $__errorArgs = ['title_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <input type="text" class="form-control" name="title_en"
                                                                   value="<?php echo e($data->title_en); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Short info en <span class="text-danger"><?php $__errorArgs = ['short_info_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <textarea name="short_info_en" cols="30"
                                                                      class="form-control"><?php echo e($data->short_info_en); ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Content en <span class="text-danger"><?php $__errorArgs = ['content_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                            <div id="toolbar-container3"></div>
                                                            <div id="editor3" data-text="editor_text3"
                                                                 class="border"><?php echo $data->content_en; ?></div>
                                                            <textarea name="content_en" hidden id="editor_text3"
                                                                      cols="30"
                                                                      rows="10"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                                <label for="">Image en <span class="text-danger"><?php $__errorArgs = ['image_en'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> | <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span></label>
                                                                <div class="img-box border"
                                                                     style="width: 100%; height: 300px; overflow: hidden">
                                                                    <img src="<?php echo e(asset('')); ?><?php echo e($data->image_en); ?>" alt=""
                                                                         id="imagePreview3"
                                                                         style="width: 100%; height: auto; ">
                                                                    <input type="file" id="imageUpload3" hidden
                                                                           name="image_en">
                                                                </div>
                                                                <div>
                                                                    <button type="button"
                                                                            class="btn btn-light select-image3"
                                                                            style="right: 0; bottom: 0; position: absolute">
                                                                        <i class="fa fa-edit"></i></button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
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

    <script src="<?php echo e(asset('admin_lte/plugins/select2/js/select2.full.min.js')); ?>"></script>
    
    
    
    
    
    
    <script>
        $('.form-delete').click(function () {
            var id = $(this).attr('data-id');
            if (confirm('O`chirishni tasdiqlaysizmi')) {
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-' + id).submit();
            }
        })
    </script>
    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload1").change(function () {
            readURL1(this);
        });
        $('.select-image1').click(function () {
            $("#imageUpload1").click();
        });


        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload2").change(function () {
            readURL2(this);
        });
        $('.select-image2').click(function () {
            $("#imageUpload2").click();
        });

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload3").change(function () {
            readURL3(this);
        });
        $('.select-image3').click(function () {
            $("#imageUpload3").click();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/news/edit.blade.php ENDPATH**/ ?>