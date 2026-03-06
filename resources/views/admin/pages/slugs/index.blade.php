@extends('admin.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('admin_lte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('content')
    <style>
        .select2-selection__rendered {
            margin-top: -13px !important;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.slug.store')}}" method="post">
                            @csrf
                            <input type="text" hidden readonly name="menu_id" value="{{$menu->id}}">
                            <input type="text" hidden readonly name="page_id" value="{{$page->id}}">
                            <div class="card">
                                <div class="card-header w-100">
                                    <div style="display: flex; justify-content: space-between ; width: 100%">
                                        <div>
                                            <h3 class="card-title">Pdage create</h3>
                                        </div>
                                        <div>
                                            @if($clear)
                                                <button class="btn btn-dark page-clear-button " type="button"><i
                                                        class="fas fa-eraser"></i></button>
                                            @endif
                                            <button type="submit" href="{{route('admin.page.store')}}"
                                                class="btn btn-success saqlash_button">saqlash
                                            </button>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <label for="">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{$page->title}}">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="">Slug</label>
                                            <input type="text" class="form-control" name="slug" value="{{$for_slug}}">
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="custom-tabs-four-1-tab"
                                                       data-toggle="pill" href="#custom-tabs-four-1" role="tab"
                                                       aria-controls="custom-tabs-four-1" aria-selected="false">
                                                        uz</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-four-2-tab"
                                                       data-toggle="pill" href="#custom-tabs-four-2" role="tab"
                                                       aria-controls="custom-tabs-four-2" aria-selected="false">
                                                        ru</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-four-3-tab"
                                                       data-toggle="pill" href="#custom-tabs-four-3" role="tab"
                                                       aria-controls="custom-tabs-four-3" aria-selected="false">
                                                        en</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                                <div class="tab-pane fade show active" id="custom-tabs-four-1"
                                                     role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                                    <label for="">Content</label>
                                                    <div id="editor1" data-text="editor_text1"
                                                         class="border">{!! $page->content_uz !!}</div>
                                                    <textarea name="content_uz" hidden rows="11" cols="30"
                                                              id="editor_text1"
                                                              class="form-control summernote1">{{$page->content_uz}}</textarea>

                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-four-2"
                                                     role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">

                                                    <label for="">Content</label>
                                                    <div id="editor2" data-text="editor_text2"
                                                         class="border">{!! $page->content_ru !!}</div>
                                                    <textarea name="content_ru" hidden rows="11" cols="30"
                                                              id="editor_text2"
                                                              class="form-control summernote2">{{$page->content_ru}}</textarea>


                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-four-3"
                                                     role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">

                                                    <label for="">Content</label>
                                                    <div id="editor3" data-text="editor_text3"
                                                         class="border">{!! $page->content_en !!}</div>
                                                    <textarea name="content_en" hidden rows="11" cols="30"
                                                              id="editor_text3"
                                                              class="form-control summernote3">{{$page->content_en}}</textarea>


                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    @if($clear)
        <form action="{{route('admin.slug.clear')}}" class="clear-slug-page" method="post">
            @csrf
            <input type="text" hidden readonly value="{{$menu->id}}" name="menu_id">
            <input type="text" hidden readonly value="{{$page->id}}" name="page_id">
        </form>
    @endif
@endsection
@section('js_after')
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('admin_lte/ckeditor5/ckeditor5_connect.js')}}"></script>
@endsection
@section('js')
    <script src="{{asset('admin_lte/ckeditor5/correcting.js')}}"></script>
    <script src="{{asset('admin_lte/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('.page-clear-button').click(function () {
            if (confirm('Tasdiqlaysizmi? Malumotni qayta tiklashning iloji yoq.')) {
                $('.clear-slug-page').submit();
            }
        })
    </script>
    <script>
        $('#summernote1').summernote();
        $('#summernote2').summernote();
        $('#summernote3').summernote();
        $('.select2').select2()
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