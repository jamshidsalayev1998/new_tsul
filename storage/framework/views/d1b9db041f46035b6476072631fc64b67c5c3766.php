
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
                        <h3 class="card-title">Announces</h3>
                    </div>
                      <div>
                        <a href="<?php echo e(route('admin.announce.create')); ?>" class="btn btn-success" >+ yangi</a>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                      <tr>
                          <th class="last-td">
                              #
                          </th>
                          <th>
                              Title
                          </th>

                          <th class="last-td"></th>
                          <th class="last-td"></th>

                      </tr>
                      </thead>
                      <tbody>
                      <?php $i = 0;?>
                      <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td><?php echo e(++$i); ?></td>
                              <td>
                                  <?php echo e($item->title_uz); ?>


                              </td>
                              <td>
                                  <a href="<?php echo e(route('admin.announce.edit' , ['id' => $item->id])); ?>" class="btn btn-light " ><i class="fa fa-edit"></i></a>

                              </td>
                              <td class="last-td">
                                  <button type="button" class="btn btn-light form-delete" data-id="<?php echo e($item->id); ?>">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form action="<?php echo e(route('admin.announce.delete' , ['id' => $item->id])); ?>" class="form-card-delete-<?php echo e($item->id); ?>" method="post">
                                      <?php echo method_field('DELETE'); ?>
                                      <?php echo csrf_field(); ?>
                                      <input type="text" hidden readonly value="<?php echo e($item->id); ?>" name="id">
                                  </form>
                              </td>
                          </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>
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
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/announces/index.blade.php ENDPATH**/ ?>