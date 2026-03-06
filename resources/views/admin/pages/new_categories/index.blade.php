@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header w-100">
                                <div style="display: flex; justify-content: space-between ; width: 100%">
                                    <div>
                                        <h3 class="card-title">Kategoriyalar</h3>
                                    </div>
                                    <div class="d-flex">
                                        <button class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">+ Yangi</button>
                                        <a href="{{route('admin.neww.index')}}" class="btn btn-primary ml-1">Yangiliklar</a>
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
                                            Name uz
                                        </th>
                                        <th>Name ru</th>
                                        <th>Name en</th>
                                        <th class="last-td"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0;?>
                                    @foreach($data as $item)
                                        <tr>
                                            <td class="last-td">
                                                {{++$i}}
                                            </td>
                                            <td>
                                                {{$item->name_uz}}
                                            </td>
                                            <td>
                                                {{$item->name_ru}}
                                            </td>
                                            <td>
                                                {{$item->name_en}}
                                            </td>
                                            <td>
                                                <div class="d-flex">

                                                    <buttonm
                                                       class="btn btn-light " data-toggle="modal" data-target=".new-category-edit-modal{{$item->id}}"><i class="fa fa-edit"></i></buttonm>
                                                    @include('admin.pages.new_categories.edit')
                                                    <button type="button" class="btn btn-light form-delete text-danger"
                                                            data-id="{{$item->id}}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <form action="{{route('category.destroy' , ['category' => $item->id])}}"
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
    @include('admin.pages.new_categories.create')
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
