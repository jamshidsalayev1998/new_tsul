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
                                        <h3 class="card-title">Menular -> {{$parent->name_uz}} / {{$parent->name_ru}}
                                            / {{$parent->name_en}}</h3>
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
                                    @foreach($menus as $menu)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>
                                                <a href="{{route('admin.menu_top.show' , ['id' => $menu->id])}}">
                                                    {{$menu->name_uz}}
                                                </a>
                                            </td>
                                            <td>{{$menu->name_ru}}</td>
                                            <td>{{$menu->name_en}}</td>
                                            <td>
                                                <a class="btn btn-light" href="{{route('admin.menu_top.move.up' , ['id' => $menu->id])}}" ><i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                </a>
                                                <a class="btn btn-light"  href="{{route('admin.menu_top.move.down' , ['id' => $menu->id])}}" ><i class="fa fa-arrow-down" aria-hidden="true"></i>
                                                </a>
                                                <button class="btn btn-light" data-toggle="modal"
                                                        data-target="#edit_menu{{$menu->id}}"><i class="fa fa-edit"></i>
                                                </button>
                                                @if(!$menu->has_child())
                                                    <button type="button" data-delete-form="#form-delete-{{$menu->id}}"
                                                            class="btn btn-danger delete-form-button"><i
                                                            class="fa fa-trash"></i></button>
                                                @endif
                                                <form action="{{route('admin.menu_top.delete' , ['id' => $menu->id])}}"
                                                      id="form-delete-{{$menu->id}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <div class="modal fade " tabindex="-1" role="dialog"
                                                     aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                                     id="edit_menu{{$menu->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content p-3">
                                                            <form
                                                                action="{{route('admin.menu_top.update' , ['id' => $menu->id])}}"
                                                                method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="row p-3">
                                                                    <div class="col-md-12">
                                                                        <label for="">Nomi uz</label>
                                                                        <input type="text" class="form-control"
                                                                               name="name_uz"
                                                                               value="{{$menu->name_uz}}">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="">Nomi ru</label>
                                                                        <input type="text" class="form-control"
                                                                               name="name_ru"
                                                                               value="{{$menu->name_ru}}">
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <label for="">Nomi en</label>
                                                                        <input type="text" class="form-control"
                                                                               name="name_en"
                                                                               value="{{$menu->name_en}}">
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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true" id="add_menu_modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content p-3">
                <form action="{{route('admin.menu_top.store')}}" method="post">
                    @csrf
                    <input type="text" name="leap" hidden readonly value="{{$leap}}">
                    <input type="text" name="parent_id" hidden readonly value="{{$parent_id}}">
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
@endsection
@section('js')
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
@endsection
