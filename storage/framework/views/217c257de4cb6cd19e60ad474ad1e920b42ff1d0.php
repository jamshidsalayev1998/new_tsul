
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
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Media</h3>
                    </div>
                      <div>
                        <button type="button" href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-lg" >+ yangi</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                      <style>
                          .black-box{
                              top: 0 !important;
                              left: 0 !important;
                              z-index: 1 !important;
                          }
                          .black-box button{
                              z-index: 2;
                              background-color: white;
                              border: none;
                              bottom: 0;
                              right: 0;
                              position: absolute;
                              opacity: 1 !important;
                              color: black;
                              padding: 4px;
                              border-radius: 7px;
                              padding-left: 13px;
                              padding-right: 13px;
                              outline: none;
                          }
                          .black-box a{
                              z-index: 2;
                              background-color: white;
                              border: none;
                              bottom: 0;
                              right: 50px;
                              position: absolute;
                              opacity: 1 !important;
                              color: black;
                              padding: 4px;
                              border-radius: 7px;
                              padding-left: 13px;
                              padding-right: 13px;
                              outline: none;
                          }

                          .media-box{
                              position: relative !important;
                          }
                          .media-box:hover .black-box {
                              display: block !important;
                          }

                      </style>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-md-3 media-box" style="overflow: hidden; max-height: 300px;">
                          <div style="width: 100%; height: 100%; position: absolute; background-color: black; opacity: 0.6; display: none" class="black-box">
                              <?php if($item->type == 2): ?>
                              <a href="<?php echo e(asset('')); ?><?php echo e($item->path); ?>" class="btn btn-light"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                              <?php endif; ?>
                              <button onclick="copyToClipboard('#copy_image<?php echo e($item->id); ?>')"><i class="fa fa-clone" aria-hidden="true"></i></button>
                          </div>
                          <?php if($item->type == 1): ?>
                          <img style="height: 200px; width: 100%;" src="<?php echo e(asset('')); ?><?php echo e($item->path); ?>" alt="">
                              <?php elseif($item->type == 2): ?>
                          <img style="height: 200px; width: 100%;" src="<?php echo e(asset('pdf_img.png')); ?>" alt="">
                              <?php else: ?>
                          <?php endif; ?>


                          <div style="display: none" id="copy_image<?php echo e($item->id); ?>">

                            <img  src="<?php echo e(asset('')); ?><?php echo e($item->path); ?>" alt="">
                          </div>
                          <p>
                              <b>Name: </b><?php echo e($item->name); ?>

                          </p>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
     <div class="modal fade" id="modal-lg">
         <form action="<?php echo e(route('admin.media.store')); ?>" method="post" enctype="multipart/form-data">
             <?php echo csrf_field(); ?>
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Large Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="">Image</label>
                          <div class="img-box border" style="width: 100%; height: 300px; overflow: hidden">
                              <img src="" alt="" id="imagePreview1" style="width: 100%; height: auto; ">
                               <input type="file" id="imageUpload1" hidden name="image">
                           </div>
                          <div>
                          <button type="button" class="btn btn-light select-image1" style="right: 0; bottom: 0; position: absolute"><i class="fa fa-edit"></i></button>
                            </div>
                      </div>

                    </div>
                      <div class="form-group p-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
        <!-- /.modal-dialog -->
           </form>
      </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $('.form-delete').click(function(){
            var id = $(this).attr('data-id');
            if(confirm('O`chirishni tasdiqlaysizmi')){
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-'+id).submit();
            }
        })
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
    </script>
    <script>
        function copyToClipboard(element) {
          var $temp = $("<input>");
          $("body").append($temp);
          // $temp.val($(element).html()).select();
          $temp.val($(element+' img').attr('src')).select();
          document.execCommand("copy");
          $temp.remove();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/media/index.blade.php ENDPATH**/ ?>