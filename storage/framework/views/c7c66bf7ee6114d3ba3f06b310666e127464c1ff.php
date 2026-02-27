
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
                        <h3 class="card-title">Pages</h3>
                    </div>
                      <div>
                        <a href="<?php echo e(route('admin_section.create')); ?>" class="btn btn-success" >+ yangi</a>
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
                              Name Uz
                          </th>
                          <th>
                              Name Ru
                          </th>
                          <th>
                              Name En
                          </th>
                          <th class="last-td"></th>
                          <th class="last-td"></th>
                          <th class="last-td"></th>


                      </tr>
                      </thead>
                      <tbody>
                      <?php $i = 0;?>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td><?php echo e(++$i); ?></td>
                              <td><?php echo e($item->name_uz); ?></td>
                              <td><?php echo e($item->name_ru); ?></td>
                              <td><?php echo e($item->name_en); ?></td>
                              <td>
                                  <a class="btn btn-light" href="<?php echo e(route('admin_section.edit' , ['admin_section' => $item->id])); ?>"><i class="fa fa-edit"></i></a>
                              </td>
                              <td>
                                  <a class="btn btn-light" href="<?php echo e(route('section.administration.index' , ['id' => $item->id])); ?>"><i class="fa fa-users" aria-hidden="true"></i></a>
                              </td>
                              <td>
                                  <button class="btn btn-danger form-delete" data-id="<?php echo e($item->id); ?>"><i class="fa fa-trash"></i></button>
                                  <form class="form-card-delete-<?php echo e($item->id); ?>" action="<?php echo e(route('admin_section.destroy' , ['admin_section' => $item->id])); ?>" method="post">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('DELETE'); ?>
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/sections/index.blade.php ENDPATH**/ ?>