@extends('admin.layouts.master')
@section('content')
    <style>
        .border-success {
            border: 1px solid green;
        }
    </style>
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
                                        <h3 class="card-title">Savollar</h3>
                                    </div>
                                    <div>
                                        <a class="btn btn-outline-success"
                                           href="{{route('requestment_question.create' , ['requestment_id' => $data->id])}}">
                                            <i class="fa fa-plus"></i> Savol qo'shish </a>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div>
                                    <h6>UZ: {{$data->name_uz}}</h6>
                                </div>
                                <div>
                                    <h6>RU: {{$data->name_ru}}</h6>
                                </div>
                                <div>
                                    <h6>EN: {{$data->name_en}}</h6>
                                </div>
                                <div class="row ">
                                    @foreach($data->questions as $item)
                                        <div class="col-md-12 border  pt-1 pb-1">
                                            <div class="d-flex justify-content-between">
                                                <span class=" border-success p-2 "><b>{{ $loop->index+1 }}</b></span>
                                                <div class="d-flex">
                                                    <a class="btn btn-light" href="{{route('requestment_question.edit' , ['requestment_question' => $item->id])}}"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button class="btn btn-danger form-delete"
                                                            data-id="{{$item->id}}"
                                                    ><i class="fa fa-trash"></i></button>
                                                    <form class="form-card-delete-{{$item->id}}"
                                                          id="{{$item->id}}formdelete"
                                                          action="{{route('requestment_question.destroy' , ['requestment_question' => $item->id])}}"
                                                          method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row pl-1 pr-1">
                                                <p>
                                                    {{$item->body_uz}}
                                                </p>

                                            </div>
                                            <div class="row pl-1 pr-1">
                                                <ul>
                                                    @foreach($item->answers as $item_answer)
                                                        <li><p>{{$item_answer->body_uz}}</p></li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
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
