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
                        <form action="{{route('admin.neww.store')}}" method="post" class="form_news"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card- header w-100 mt-2 p-3">
                                    <div style="display: flex; justify-content: space-between ; width: 100%">
                                        <div>
                                            <h3 class="card-title">Yangilik qo'shish</h3>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success saqlash_button">saqlash
                                            </button>
                                            <a href="{{route('admin.neww.index')}}" class="btn btn-primary ml-1">Yangiliklar</a>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date @error('date') <span class="text-danger">| {{$message}}</span> @enderror </label>
                                                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Type @error('type_id') <span class="text-danger">| {{$message}}</span> @enderror</label>
                                                        <select name="type_id" class="form-control @error('type_id') is-invalid @enderror">
                                                            @foreach($types as $type)
                                                                <option
                                                                    value="{{$type->id}}" {{ old('type_id') == $type->id ? 'selected' : '' }}>{{$type->name_uz}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
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
                                                            <label for="">Title uz @error('title_uz') <span class="text-danger">| {{$message}}</span> @enderror</label>
                                                            <input type="text" class="form-control @error('title_uz') is-invalid @enderror" name="title_uz" value="{{ old('title_uz') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Short info uz @error('short_info_uz') <span class="text-danger">| {{$message}}</span> @enderror</label>
                                                            <textarea name="short_info_uz" cols="30"
                                                                      class="form-control @error('short_info_uz') is-invalid @enderror">{{ old('short_info_uz') }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">content uz <span class="text-danger">@error('content_uz') | {{$message}} @enderror</span></label>
                                                            <div id="toolbar-container1"></div>
                                                            <div id="editor1" data-text="editor_text1"
                                                                 class="border @error('content_uz') border-danger @enderror">{!! old('content_uz', '') !!}</div>
                                                            <textarea name="content_uz" hidden id="editor_text1"
                                                                      cols="30"
                                                                      rows="10"></textarea>
                                                        </div>
                                                        {{--                                                        image uz--}}
                                                        <div class="form-group">
                                                            <label for="">Image <span class="text-danger">@error('image_uz') | {{$message}} @enderror</span></label>
                                                            <div class="img-box border"
                                                                 style="width: 100%; height: 300px; overflow: hidden">
                                                                <img src="" alt="" id="imagePreview1"
                                                                     style="width: 100%; height: auto; ">
                                                                <input type="file" id="imageUpload1" hidden
                                                                       name="image_uz">
                                                            </div>
                                                            <div>
                                                                <button type="button"
                                                                        class="btn btn-light select-image1"
                                                                        style="right: 0; bottom: 0; position: absolute">
                                                                    <i class="fa fa-edit"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel"
                                                         aria-labelledby="custom-tabs-four-2-tab">
                                                        <div class="form-group">
                                                            <label for="">Title ru @error('title_ru') <span class="text-danger">| {{$message}}</span> @enderror</label>
                                                            <input type="text" class="form-control @error('title_ru') is-invalid @enderror" name="title_ru" value="{{ old('title_ru') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Short info ru @error('short_info_ru') <span class="text-danger">| {{$message}}</span> @enderror</label>
                                                            <textarea name="short_info_ru" cols="30"
                                                                      class="form-control @error('short_info_ru') is-invalid @enderror">{{ old('short_info_ru') }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">content ru <span class="text-danger">@error('content_ru') | {{$message}} @enderror</span></label>
                                                            <div id="toolbar-container2"></div>
                                                            <div id="editor2" data-text="editor_text2"
                                                                 class="border @error('content_ru') border-danger @enderror">{!! old('content_ru', '') !!}</div>
                                                            <textarea name="content_ru" hidden id="editor_text2"
                                                                      cols="30"
                                                                      rows="10"></textarea>
                                                        </div>
                                                        {{--                                                        image ru--}}
                                                        <div class="form-group">
                                                            <label for="">Image <span class="text-danger">@error('image_ru') | {{$message}} @enderror</span></label>
                                                            <div class="img-box border"
                                                                 style="width: 100%; height: 300px; overflow: hidden">
                                                                <img src="" alt="" id="imagePreview2"
                                                                     style="width: 100%; height: auto; ">
                                                                <input type="file" id="imageUpload2" hidden
                                                                       name="image_ru">
                                                            </div>
                                                            <div>
                                                                <button type="button"
                                                                        class="btn btn-light select-image2"
                                                                        style="right: 0; bottom: 0; position: absolute">
                                                                    <i class="fa fa-edit"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel"
                                                         aria-labelledby="custom-tabs-four-3-tab">
                                                        <div class="form-group">
                                                            <label for="">Title en @error('title_en') <span class="text-danger">| {{$message}}</span> @enderror</label>
                                                            <input type="text" class="form-control @error('title_en') is-invalid @enderror" name="title_en" value="{{ old('title_en') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Short info en @error('short_info_en') <span class="text-danger">| {{$message}}</span> @enderror</label>
                                                            <textarea name="short_info_en" cols="30"
                                                                      class="form-control @error('short_info_en') is-invalid @enderror">{{ old('short_info_en') }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">content en <span class="text-danger">@error('content_en') | {{$message}} @enderror</span></label>
                                                            <div id="toolbar-container3"></div>
                                                            <div id="editor3" data-text="editor_text3"
                                                                 class="border @error('content_en') border-danger @enderror">{!! old('content_en', '') !!}</div>
                                                            <textarea name="content_en" hidden id="editor_text3"
                                                                      cols="30"
                                                                      rows="10"></textarea>
                                                        </div>
                                                        {{--                                                        image eb--}}
                                                        <div class="form-group">
                                                            <label for="">Image <span class="text-danger">@error('image_en') | {{$message}} @enderror</span></label>
                                                            <div class="img-box border"
                                                                 style="width: 100%; height: 300px; overflow: hidden">
                                                                <img src="" alt="" id="imagePreview3"
                                                                     style="width: 100%; height: auto; ">
                                                                <input type="file" id="imageUpload3" hidden
                                                                       name="image_en">
                                                            </div>
                                                            <div>
                                                                <button type="button"
                                                                        class="btn btn-light select-image3"
                                                                        style="right: 0; bottom: 0; position: absolute">
                                                                    <i class="fa fa-edit"></i></button>
                                                            </div>
                                                        </div>
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
                reader.onload = function(e) {
                    $('#imagePreview1').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function() {
            readURL1(this);
        });
        $('.select-image1').click(function(){
            $("#imageUpload1").click();
        });


        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview2').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload2").change(function() {
            readURL2(this);
        });
        $('.select-image2').click(function(){
            $("#imageUpload2").click();
        });

        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview3').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload3").change(function() {
            readURL3(this);
        });
        $('.select-image3').click(function(){
            $("#imageUpload3").click();
        });
    </script>
@endsection
