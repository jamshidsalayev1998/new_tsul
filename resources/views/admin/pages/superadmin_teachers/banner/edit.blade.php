@extends('admin.layouts.master')
@section('link')
    <link rel="stylesheet" href="{{asset('admin_lte/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('content')
    <style>
        /*.select2-selection__rendered{*/
        /*    margin-top: -13px !important;*/
        /*}*/
        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #6f42c1 !important;
            border-color: #643ab0 !important;
            color: #fff;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('superadmin.teachers.banner.update' , ['id' => $data->id])}}" method="post" class="form_news"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card">
                                <div class="card- header w-100 mt-2 p-3">
                                    <div style="display: flex; justify-content: space-between ; width: 100%">
                                        <div>
                                            <h3 class="card-title">New banner</h3>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success saqlash_button"> <i class="fa fa-save"></i> save
                                            </button>
                                            <a href="{{route('superadmin.teachers.banner')}}"
                                               class="btn btn-primary ml-1">Banners</a>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Image</label>
                                                <div class="img-box border"
                                                     style="width: 100%; height: 300px; overflow: hidden">
                                                    <img src="{{asset($data->image)}}" alt="" id="imagePreview1"
                                                         style="width: 100%; height: auto; ">
                                                    <input type="file" id="imageUpload1" hidden
                                                           name="image">
                                                </div>
                                                <div>
                                                    <button type="button"
                                                            class="btn btn-light select-image1"
                                                            style="right: 0; bottom: 0; position: absolute">
                                                        <i class="fa fa-edit"></i></button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="card card-primary card-outline card-outline-tabs">
                                            <div class="card-header p-0 border-bottom-0">
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
                                            <div class="card-body">
                                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                                    <div class="tab-pane fade show active" id="custom-tabs-four-1"
                                                         role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                                        <div class="form-group">
                                                            <label for="">Title uz</label> <span class="text-danger">@error('title_uz') {{$message}} @enderror</span>
                                                            <input type="text" class="form-control" name="title_uz" value="{{$data->title_uz}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">content uz</label>  <span class="text-danger">@error('content_uz') {{$message}} @enderror</span>
{{--                                                            <div id="toolbar-container1"></div>--}}
{{--                                                            <div id="editor1" data-text="editor_text1"--}}
{{--                                                                 class="border">{!! $data->content_uz !!}</div>--}}
                                                            <textarea name="content_uz" class="form-control" id="editor_text1"
                                                                      cols="30"
                                                                      rows="10">{{$data->content_uz}}</textarea>
                                                        </div>
                                                        {{--                                                        image uz--}}

                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel"
                                                         aria-labelledby="custom-tabs-four-2-tab">
                                                        <div class="form-group">
                                                            <label for="">Title ru</label>
                                                            <input type="text" class="form-control" name="title_ru"  value="{{$data->title_ru}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">content ru</label>
{{--                                                            <div id="toolbar-container2"></div>--}}
{{--                                                            <div id="editor2" data-text="editor_text2"--}}
{{--                                                                 class="border">{!! $data->content_ru !!}</div>--}}
                                                            <textarea name="content_ru" class="form-control" id="editor_text2"
                                                                      cols="30"
                                                                      rows="10">{{$data->content_ru}}</textarea>
                                                        </div>
                                                        {{--                                                        image ru--}}

                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel"
                                                         aria-labelledby="custom-tabs-four-3-tab">
                                                        <div class="form-group">
                                                            <label for="">Title en</label>
                                                            <input type="text" class="form-control" name="title_en"  value="{{$data->title_en}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">content en</label>
{{--                                                            <div id="toolbar-container3"></div>--}}
{{--                                                            <div id="editor3" data-text="editor_text3"--}}
{{--                                                                 class="border">{!! $data->content_en !!}</div>--}}
                                                            <textarea name="content_en" class="form-control" id="editor_text3"
                                                                      cols="30"
                                                                      rows="10">{{$data->content_en}}</textarea>
                                                        </div>
                                                        {{--                                                        image eb--}}

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card -->
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
@endsection
@section('js_after')
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('admin_lte/ckeditor5/ckeditor5_connect.js')}}"></script>
@endsection
@section('js')

    <script src="{{asset('admin_lte/ckeditor5/correcting.js')}}"></script>

    <script>
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload1").change(function () {
            readURL1(this);
        });
        $('.select-image1').click(function () {
            $("#imageUpload1").click();
        });


        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload2").change(function () {
            readURL2(this);
        });
        $('.select-image2').click(function () {
            $("#imageUpload2").click();
        });

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload3").change(function () {
            readURL3(this);
        });
        $('.select-image3').click(function () {
            $("#imageUpload3").click();
        });
    </script>
@endsection
