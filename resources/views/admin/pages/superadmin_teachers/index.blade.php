@extends('admin.layouts.master')
@section('content')
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
                                        <h3 class="card-title">O'qituvchilar</h3>
                                    </div>
                                    <div>
                                        <a href="{{route('superadmin.teachers.banner')}}" class="btn btn-outline-primary">Teachers banner</a>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered connect-datatable" id="example1">
                                    <thead>
                                    <tr>
                                        <th class="last-td">
                                            #
                                        </th>
                                        <th>
                                            F.I.O
                                        </th>
                                        <th>Kafedra</th>
                                        <th>Ilmiy darajasi</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0;?>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>
                                                <a href="{{route('superadmin.teachers.show' , ['id' => $item->id])}}">{{$item->fio_uz}}</a>
                                            </td>
                                            <td>{{$item->kafedra->name_uz}}</td>
                                            <td>{{$item->teacher_degree->name_uz}}</td>

                                        </tr>
                                    @endforeach
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
@endsection
@section('js')
    <script>
        $('.form-delete').click(function () {
            var id = $(this).attr('data-id');
            if (confirm('O`chirishni tasdiqlaysizmi')) {
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-' + id).submit();
            }
        })
    </script>
@endsection
