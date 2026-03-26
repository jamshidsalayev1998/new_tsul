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
                                        <h3 class="card-title">Yangiliklar</h3>
                                    </div>
                                    <div class="d-flex">
                                        <a href="{{route('admin.neww.create')}}" class="btn btn-success">+ Yangi</a>
                                        <a href="{{route('category.index')}}" class="btn btn-primary ml-1">Kategoriyalar</a>
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
                                    @foreach($news as $item)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>
                                                <a href="/news/{{$item->id}}" target="_blank">
                                                    {{$item->title_uz}}
                                                </a>
                                            </td>
                                            <td >
                                                <div  style="white-space: nowrap">{{$item->date}}</div>
                                            </td>
                                            <td>
                                                {{$item->type->name_uz}}
                                            </td>
                                            <td class="last-td">
                                                <div class="d-flex">
                                                    <button class="show_new_button btn btn-light"
                                                            data-id="{{$item->id}}"><i
                                                            class="fa @if($item->status) fa-eye @else fa-eye-slash @endif"
                                                            id="i{{$item->id}}"></i></button>

                                                    <a href="{{route('admin.neww.edit' , ['id' => $item->id])}}"
                                                       class="btn btn-light "><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-light form-delete text-danger"
                                                            data-id="{{$item->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <form action="{{route('admin.neww.delete' , ['id' => $item->id])}}"
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
@endsection
