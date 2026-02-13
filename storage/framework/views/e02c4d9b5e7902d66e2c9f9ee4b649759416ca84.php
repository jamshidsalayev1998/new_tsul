
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
                                        <h3 class="card-title">Yangiliklar</h3>
                                    </div>
                                    <div class="d-flex">
                                        <a href="<?php echo e(route('admin.neww.create')); ?>" class="btn btn-success">+ Yangi</a>
                                        <a href="<?php echo e(route('category.index')); ?>" class="btn btn-primary ml-1">Kategoriyalar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered " id="example1">
                                    <thead>
                                    <tr>
                                        <th class="last-td">
                                            #
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th class="last-td">Date</th>
                                        <th class="last-td">Type</th>
                                        <th class="last-td"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0;?>
                                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            <td>
                                                <a href="/news/<?php echo e($item->id); ?>" target="_blank">
                                                    <?php echo e($item->title_uz); ?>

                                                </a>
                                            </td>
                                            <td >
                                                <div  style="white-space: nowrap"><?php echo e($item->date); ?></div>
                                            </td>
                                            <td>
                                                <?php echo e($item->type->name_uz); ?>

                                            </td>
                                            <td class="last-td">
                                                <div class="d-flex">
                                                    <button class="show_new_button btn btn-light"
                                                            data-id="<?php echo e($item->id); ?>"><i
                                                            class="fa <?php if($item->status): ?> fa-eye <?php else: ?> fa-eye-slash <?php endif; ?>"
                                                            id="i<?php echo e($item->id); ?>"></i></button>

                                                    <a href="<?php echo e(route('admin.neww.edit' , ['id' => $item->id])); ?>"
                                                       class="btn btn-light "><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-light form-delete text-danger"
                                                            data-id="<?php echo e($item->id); ?>">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <form action="<?php echo e(route('admin.neww.delete' , ['id' => $item->id])); ?>"
                                                          class="form-card-delete-<?php echo e($item->id); ?>" method="post">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <input type="text" hidden readonly value="<?php echo e($item->id); ?>"
                                                               name="id">
                                                    </form>
                                                </div>

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
        $('.form-delete').click(function () {
            var id = $(this).attr('data-id');
            if (confirm('O`chirishni tasdiqlaysizmi')) {
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-' + id).submit();
            }
        })
        $('.show_new_button').click(function () {
            var id = $(this).attr('data-id');
            // alert(id);
            var url = '/admin/admin-neww-change-status/' + id;
            $.ajax({
                url: url,
                method: 'GET',
                success: function (result) {
                    // alert(result);
                    if (result == '1') {
                        $('#i' + id).removeAttr('class');
                        $('#i' + id).attr('class', 'fa fa-eye')
                    } else {
                        $('#i' + id).removeAttr('class');
                        $('#i' + id).attr('class', 'fa fa-eye-slash')
                    }
                }
            })

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/news/index.blade.php ENDPATH**/ ?>