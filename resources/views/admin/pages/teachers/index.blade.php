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
                                        <a href="{{route('teachers.create')}}" class="btn btn-success">+ yangi</a>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered connect-datatable">
                                    <thead>
                                    <tr>
                                        <th class="last-td">
                                            #
                                        </th>
                                        <th>
                                            F.I.O
                                        </th>
                                        <th class="last-td"></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0;?>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>
                                                <a href="{{route('teachers.show' , ['teacher' => $item->id])}}">{{$item->fio_uz}}</a>
                                            </td>
                                            <td>
                                                <button class="btn btn-danger form-delete"
                                                        data-id="{{$item->id}}"
                                                ><i class="fa fa-trash"></i></button>
                                                <form class="form-card-delete-{{$item->id}}"
                                                      id="{{$item->id}}formdelete"
                                                      action="{{route('teachers.destroy' , ['teacher' => $item->id])}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
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
