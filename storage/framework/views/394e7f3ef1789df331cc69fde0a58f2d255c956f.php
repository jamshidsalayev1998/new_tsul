
<?php $__env->startSection('link'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .select2-selection__rendered{
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
              <form action="<?php echo e(route('admin_rector.update' , ['admin_rector' => $data->id])); ?>" class="form_news" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
            <div class="card">
              <div class="card-header w-100">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title"> Rektor</h3>
                    </div>
                      <div>
                        <button type="button" class="btn btn-success saqlash_button" >saqlash</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="">Main Image</label>
                              <div class="img-box border" style="width: 100%; height: 500px; overflow: hidden">
                                  <img src="<?php echo e(asset('')); ?><?php echo e($data->main_image); ?>" alt="" id="imagePreview1" style="width: 100%; height: auto; ">
                                   <input type="file" id="imageUpload1" hidden name="main_image">
                               </div>
                              <div>
                              <button type="button" class="btn btn-light select-image1" style="right: 0; bottom: 0; position: absolute"><i class="fa fa-edit"></i></button>
                                </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="">Second Image</label>
                              <div class="img-box border" style="width: 100%; height: 500px; overflow: hidden">
                                  <img src="<?php echo e(asset('')); ?><?php echo e($data->second_image); ?>" alt="" id="imagePreview2" style="width: 100%; height: auto; ">
                                   <input type="file" id="imageUpload2" hidden name="second_image">
                               </div>
                              <div>
                              <button type="button" class="btn btn-light select-image2" style="right: 0; bottom: 0; position: absolute"><i class="fa fa-edit"></i></button>
                                </div>
                          </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-1-tab" data-toggle="pill" href="#custom-tabs-four-1" role="tab" aria-controls="custom-tabs-four-1" aria-selected="false"> uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-2-tab" data-toggle="pill" href="#custom-tabs-four-2" role="tab" aria-controls="custom-tabs-four-2" aria-selected="false"> ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-3-tab" data-toggle="pill" href="#custom-tabs-four-3" role="tab" aria-controls="custom-tabs-four-3" aria-selected="false"> en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-1" role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <label for="">Full name uz</label>
                                                <input type="text" class="form-control" name="full_name_uz" value="<?php echo e($data->full_name_uz); ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Address uz</label>
                                                <input type="text" class="form-control" name="address_uz" value="<?php echo e($data->address_uz); ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Reception days uz</label>
                                                <input type="text" class="form-control" name="reception_days_uz" value="<?php echo e($data->reception_days_uz); ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Main rektor word uz</label>
                                                <div id="toolbar-container1"></div>
                                              <div id="editor1" data-text="editor_text1" class="border" ><?php echo $data->main_rektor_word_uz; ?></div>
                                                  <textarea name="main_rektor_word_uz" hidden rows="11"  cols="30" id="editor_text1" class="form-control"></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Short info uz</label>
                                                <div id="toolbar-container2"></div>
                                              <div id="editor2" data-text="editor_text2" class="border" ><?php echo $data->short_info_uz; ?></div>
                                                  <textarea name="short_info_uz" hidden rows="11"  cols="30" id="editor_text2" class="form-control"></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Biography uz</label>
                                                <div id="toolbar-container3"></div>
                                              <div id="editor3" data-text="editor_text3" class="border" ><?php echo $data->biography_uz; ?></div>
                                                  <textarea name="biography_uz" hidden rows="11"  cols="30" id="editor_text3" class="form-control"></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Duties uz</label>
                                                <div id="toolbar-container4"></div>
                                              <div id="editor4" data-text="editor_text4" class="border" ><?php echo $data->duties_uz; ?></div>
                                                  <textarea name="duties_uz" hidden rows="11"  cols="30" id="editor_text4" class="form-control"></textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <label for="">Full name ru</label>
                                                <input type="text" class="form-control" name="full_name_ru" value="<?php echo e($data->full_name_ru); ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Address ru</label>
                                                <input type="text" class="form-control" name="address_ru" value="<?php echo e($data->address_ru); ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Reception days ru</label>
                                                <input type="text" class="form-control" name="reception_days_ru" value="<?php echo e($data->reception_days_ru); ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Main rektor word ru</label>
                                                <div id="toolbar-container5"></div>
                                                  <div id="editor5" data-text="editor_text5" class="border" ><?php echo $data->main_rektor_word_ru; ?></div>
                                                  <textarea name="main_rektor_word_ru" hidden rows="11"  cols="30" id="editor_text5" class="form-control"><?php echo e($data->main_rektor_word_ru); ?></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Short info ru</label>
                                                <div id="toolbar-container6"></div>
                                                  <div id="editor6" data-text="editor_text6" class="border" ><?php echo $data->short_info_ru; ?></div>
                                                  <textarea name="short_info_ru" hidden rows="11"  cols="30" id="editor_text6" class="form-control"><?php echo e($data->short_info_ru); ?></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Biography ru</label>
                                                <div id="toolbar-container7"></div>
                                                  <div id="editor7" data-text="editor_text7" class="border" ><?php echo $data->biography_ru; ?></div>
                                                  <textarea name="biography_ru" hidden rows="11"  cols="30" id="editor_text7" class="form-control"><?php echo e($data->biography_ru); ?></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Duties ru</label>
                                                <div id="toolbar-container8"></div>
                                                  <div id="editor8" data-text="editor_text8" class="border" ><?php echo $data->duties_ru; ?></div>
                                                  <textarea name="duties_ru" hidden rows="11"  cols="30" id="editor_text8" class="form-control"><?php echo e($data->duties_ru); ?></textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <label for="">Full name en</label>
                                                <input type="text" class="form-control" name="full_name_en" value="<?php echo e($data->full_name_en); ?>">
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Address en</label>
                                                <input type="text" class="form-control" name="address_en" value="<?php echo e($data->address_en); ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Reception days en</label>
                                                <input type="text" class="form-control" name="reception_days_en" value="<?php echo e($data->reception_days_en); ?>">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Main rektor word en</label>
                                                <div id="toolbar-container9"></div>
                                                  <div id="editor9" data-text="editor_text9" class="border" ><?php echo $data->main_rektor_word_en; ?></div>
                                                  <textarea name="main_rektor_word_en" hidden rows="11"  cols="30" id="editor_text9" class="form-control"><?php echo e($data->main_rektor_word_en); ?></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Short info en</label>
                                                <div id="toolbar-container10"></div>
                                                  <div id="editor10" data-text="editor_text10" class="border" ><?php echo $data->short_info_en; ?></div>
                                                  <textarea name="short_info_en" hidden rows="11"  cols="30" id="editor_text10" class="form-control"><?php echo e($data->short_info_en); ?></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">G
                                              <label for="">Biography en</label>
                                                <div id="toolbar-container11"></div>
                                                  <div id="editor11" data-text="editor_text11" class="border" ><?php echo $data->biography_en; ?></div>
                                                  <textarea name="biography_en" hidden rows="11"  cols="30" id="editor_text11" class="form-control"><?php echo e($data->biography_en); ?></textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Duties en</label>
                                                <div id="toolbar-container12"></div>
                                                  <div id="editor12" data-text="editor_text12" class="border" ><?php echo $data->duties_en; ?></div>
                                                  <textarea name="duties_en" hidden rows="11"  cols="30" id="editor_text12" class="form-control"><?php echo e($data->duties_en); ?></textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Phone</label>
                              <input type="text" name="phone" value="<?php echo e($data->phone); ?>" class="form-control">
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">email</label>
                              <input type="text" name="email" value="<?php echo e($data->email); ?>" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Twitter</label>
                              <input type="text" name="twitter" value="<?php echo e($data->twitter); ?>" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Facebook</label>
                              <input type="text" name="facebook" value="<?php echo e($data->facebook); ?>" class="form-control">
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
         function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview1').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function() {
            readURL1(this);
        });
        $('.select-image1').click(function(){
            $("#imageUpload1").click();
        });

        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview2').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload2").change(function() {
            readURL2(this);
        });
        $('.select-image2').click(function(){
            $("#imageUpload2").click();
        });
    </script>



    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/rektor/index.blade.php ENDPATH**/ ?>