
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
                                        <h3 class="card-title">Menular -> <?php echo e($parent->name_uz); ?> / <?php echo e($parent->name_ru); ?>

                                            / <?php echo e($parent->name_en); ?></h3>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                                data-target="#add_menu_modal">+ yangi
                                        </button>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <style>

                                </style>
                                <table class="table bordered ">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Uz</th>
                                        <th>Ru</th>
                                        <th>En</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 0;
                                    ?>
                                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.menu.show' , ['id' => $menu->id])); ?>">
                                                    <?php echo e($menu->name_uz); ?>

                                                </a>
                                            </td>
                                            <td><?php echo e($menu->name_ru); ?></td>
                                            <td><?php echo e($menu->name_en); ?></td>
                                            <td>
                                                <a class="btn btn-light" href="<?php echo e(route('admin.menu.move.up' , ['id' => $menu->id])); ?>" ><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                </a>
                                                <a class="btn btn-light"  href="<?php echo e(route('admin.menu.move.down' , ['id' => $menu->id])); ?>" ><i class="fa fa-arrow-down" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-light" data-toggle="modal"
                                                        data-target="#edit_menu<?php echo e($menu->id); ?>"><i class="fa fa-edit"></i>
                                                </button>

                                                <?php if(!$menu->has_child()): ?>
                                                    <button type="button" data-delete-form="#form-delete-<?php echo e($menu->id); ?>"
                                                            class="btn btn-danger delete-form-button"><i
                                                            class="fa fa-trash"></i></button>
                                                <?php endif; ?>
                                                <form action="<?php echo e(route('admin.menu.delete' , ['id' => $menu->id])); ?>"
                                                      id="form-delete-<?php echo e($menu->id); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                </form>
                                                <div class="modal fade " tabindex="-1" role="dialog"
                                                     aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                     id="edit_menu<?php echo e($menu->id); ?>">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content p-3">
                                                            <form
                                                                action="<?php echo e(route('admin.menu.update' , ['id' => $menu->id])); ?>"
                                                                method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PUT'); ?>
                                                                <div class="row p-3">
                                                                    <div class="col-md-12">
                                                                        <label for="">Nomi uz</label>
                                                                        <input type="text" class="form-control"
                                                                               name="name_uz"
                                                                               value="<?php echo e($menu->name_uz); ?>">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="">Nomi ru</label>
                                                                        <input type="text" class="form-control"
                                                                               name="name_ru"
                                                                               value="<?php echo e($menu->name_ru); ?>">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="">Nomi en</label>
                                                                        <input type="text" class="form-control"
                                                                               name="name_en"
                                                                               value="<?php echo e($menu->name_en); ?>">
                                                                    </div>

                                                                </div>
                                                                <div class="row"
                                                                     style="display: flex ; justify-content: flex-end">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close
                                                                    </button>
                                                                    <button class="btn btn-success">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true" id="add_menu_modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-3">
                <form action="<?php echo e(route('admin.menu.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="leap" hidden readonly value="<?php echo e($leap); ?>">
                    <input type="text" name="parent_id" hidden readonly value="<?php echo e($parent_id); ?>">
                    <div class="row p-3">
                        <div class="col-md-12">
                            <label for="">Nomi uz</label>
                            <input type="text" class="form-control" name="name_uz">
                        </div>
                        <div class="col-md-12">
                            <label for="">Nomi ru</label>
                            <input type="text" class="form-control" name="name_ru">
                        </div>
                        <div class="col-md-12">
                            <label for="">Nomi en</label>
                            <input type="text" class="form-control" name="name_en">
                        </div>

                    </div>
                    <div class="row" style="display: flex ; justify-content: flex-end">
                        <button type="submit" class="btn btn-success">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $('.delete-form-button').click(function () {
            var id = $(this).attr('data-delete-form');
            if (confirm('Malumotni ochirasizmi?. Uni qayta tiklashni iloji yoq!')) {
                $(id).submit();
            }
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/pages/menu/show.blade.php ENDPATH**/ ?>