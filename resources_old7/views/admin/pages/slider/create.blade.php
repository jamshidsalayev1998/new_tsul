@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <!-- /.card -->

                            <div class="card">
                                <div class="card-header w-100">
                                    <div style="display: flex; justify-content: space-between ; width: 100%">
                                        <div>
                                            <h3 class="card-title">Slider qo'shish</h3>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-success">Saqlash</button>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                               role="tab" aria-controls="home" aria-selected="true">Uz</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                               role="tab" aria-controls="profile" aria-selected="false">Ru</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                               role="tab" aria-controls="contact" aria-selected="false">En</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <div class="row p-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Image UZ</label>
                                                        <div style="position:relative;">
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
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Link UZ</label>
                                                        <input type="text" class="form-control" name="link_uz">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Text UZ</label>
                                                        <textarea id="summernote1" name="text_uz"
                                                                  style="width: 100%"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <div class="row p-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Image RU</label>
                                                        <div style="position:relative;">
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
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Link RU</label>
                                                        <input type="text" class="form-control" name="link_ru">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Text RU</label>
                                                        <textarea id="summernote2" name="text_ru"
                                                                  style="width: 100%"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                             <div class="row p-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Image EN</label>
                                                        <div style="position:relative;">
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
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Link EN</label>
                                                        <input type="text" class="form-control" name="link_en">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Text EN</label>
                                                        <textarea id="summernote3" name="text_en"
                                                                  style="width: 100%"></textarea>
                                                    </div>
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
@endsection
@section('js')
    <script>
        $(function () {
            $('#summernote').summernote()
        });
        $(function () {
            $('#summernote1').summernote()
        });
        $(function () {
            $('#summernote2').summernote()
        });
         $(function () {
            $('#summernote3').summernote()
        });
    </script>
    <script>

        $("#imageUpload1").change(function () {
            readURL1(this);
        });
        $('.select-image1').click(function () {
            $("#imageUpload1").click();
        });

        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

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
