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
                                        <h3 class="card-title">Teachers banner</h3>
                                    </div>
                                    <div>
                                        <a href="{{route('superadmin.teachers.banner.create')}}"
                                           class="btn btn-outline-success">+ New</a>
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
                                            Title uz/ru/en
                                        </th>
                                        <th class="last-td">Image</th>
                                        <th class="last-td"></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0;?>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$item->title_uz}} / {{$item->title_ru}} / {{$item->title_en}}</td>
                                            <td>@if($item->image) <img style="width: 100px; height: auto" src="{{asset($item->image)}}"
                                                     alt=""> @endif</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a class=" btn btn-light" href="{{route('superadmin.teachers.banner.change_status' , ['id' => $item->id])}}"><i
                                                            class="fa @if($item->status) fa-eye @else fa-eye-slash @endif"
                                                            id="i{{$item->id}}"></i></a>

                                                    <a href="{{route('superadmin.teachers.banner.edit' , ['id' => $item->id])}}"
                                                       class="btn btn-light "><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-light form-delete text-danger"
                                                            data-id="{{$item->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <form action="{{route('superadmin.teachers.banner.destroy' , ['id' => $item->id])}}"
                                                          class="form-card-delete-{{$item->id}}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="text" hidden readonly value="{{$item->id}}"
                                                               name="id">
                                                    </form>
                                                </div>
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
