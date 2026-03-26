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

            <div class="card">
              <div class="card- header w-100 mt-2">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Separately news</h3>
                    </div>
                      <div>
                        <button type="button"  class="btn btn-success saqlash_button" >saqlash</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <form action="{{route('admin_young_scientist_new.update' , ['admin_young_scientist_new' => $data->id])}}" class="scientist_form" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <input type="text" name="has"  hidden readonly>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                          <label for="">Image</label>
                          <div class="img-box border" style="width: 100%; height: 300px; overflow: hidden">
                              <img src="{{asset('')}}{{$data->image}}" alt="" id="imagePreview1" style="width: 100%; height: auto; ">
                               <input type="file" id="imageUpload1" hidden name="image">
                           </div>
                          <div>
                          <button type="button" class="btn btn-light select-image1" style="right: 0; bottom: 0; position: absolute"><i class="fa fa-edit"></i></button>
                            </div>
                      </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Date</label>
                              <input type="date" class="form-control" name="date" value="{{$data->date}}">
                          </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-1-tab" data-toggle="pill" href="#custom-tabs-four-1" role="tab" aria-controls="custom-tabs-four-1" aria-selected="false">Title uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-2-tab" data-toggle="pill" href="#custom-tabs-four-2" role="tab" aria-controls="custom-tabs-four-2" aria-selected="false">Title ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-3-tab" data-toggle="pill" href="#custom-tabs-four-3" role="tab" aria-controls="custom-tabs-four-3" aria-selected="false">Title en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-1" role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                  <input type="text" class="form-control" name="title_uz" value="{{$data->title_uz}}" >
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">
                                  <input type="text" class="form-control" name="title_ru" value="{{$data->title_ru}}" >
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">
                                  <input type="text" class="form-control" name="title_en" value="{{$data->title_en}}" >
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-short-1-tab" data-toggle="pill" href="#custom-tabs-short-1" role="tab" aria-controls="custom-tabs-short-1" aria-selected="false">Short info uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-short-2-tab" data-toggle="pill" href="#custom-tabs-short-2" role="tab" aria-controls="custom-tabs-short-2" aria-selected="false">Short info ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-short-3-tab" data-toggle="pill" href="#custom-tabs-short-3" role="tab" aria-controls="custom-tabs-short-3" aria-selected="false">Short info en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-short-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-short-1" role="tabpanel" aria-labelledby="custom-tabs-short-1-tab">
                                  <textarea rows="5" class="form-control" name="short_info_uz" >{{$data->short_info_uz}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-short-2" role="tabpanel" aria-labelledby="custom-tabs-short-2-tab">
                                  <textarea rows="5" class="form-control" name="short_info_ru" >{{$data->short_info_ru}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-short-3" role="tabpanel" aria-labelledby="custom-tabs-short-3-tab">
                                  <textarea rows="5" class="form-control" name="short_info_en" >{{$data->short_info_en}}</textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-short4-tab" data-toggle="pill" href="#custom-tabs-four-short4" role="tab" aria-controls="custom-tabs-four-short4" aria-selected="false">Content uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-short5-tab" data-toggle="pill" href="#custom-tabs-four-short5" role="tab" aria-controls="custom-tabs-four-short5" aria-selected="false">Content ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-short6-tab" data-toggle="pill" href="#custom-tabs-four-short6" role="tab" aria-controls="custom-tabs-four-short6" aria-selected="false">Content en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-short4" role="tabpanel" aria-labelledby="custom-tabs-four-short4-tab">
{{--                                  <div id="toolbar-container1"></div>--}}
{{--                                  <div id="editor1" data-text="editor_text1" class="border">{!! $data->content_uz !!}</div>--}}
                                  <textarea name="content_uz"  rows="11"  cols="30" id="editor_text1" class="form-control summernote1">{{$data->content_uz}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-short5" role="tabpanel" aria-labelledby="custom-tabs-four-short5-tab">
{{--                                   <div id="toolbar-container2"></div>--}}
{{--                                  <div id="editor2" data-text="editor_text2" class="border">{!! $data->content_ru !!}</div>--}}
                                  <textarea name="content_ru"  rows="11"  cols="30" id="editor_text2" class="form-control summernote2">{{$data->content_ru}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-short6" role="tabpanel" aria-labelledby="custom-tabs-four-short6-tab">
{{--                                  <div id="toolbar-container3"></div>--}}
{{--                                  <div id="editor3" data-text="editor_text3" class="border">{!! $data->content_en !!}</div>--}}
                                  <textarea name="content_en"  rows="11" id="editor_text3"  cols="30" class="form-control summernote3">{{$data->content_en}}</textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                  </div>
                      </form>
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
@section('js_after')
    <script src="{{asset('js/faculties_create.js')}}"></script>


@endsection
@section('js')
    <script>
 $(document).ready(function(){
            $('.summernote1').summernote();
            $('.summernote2').summernote();
            $('.summernote3').summernote();
        })
    </script>
    <script>
        $('.saqlash_button').click(function(){
            var data_text = $('#editor1').attr('data-text');
            var text = $('#editor1').html();
            $('#'+data_text).html(text);
            var data_text = $('#editor2').attr('data-text');
            var text = $('#editor2').html();
            $('#'+data_text).html(text);
            var data_text = $('#editor3').attr('data-text');
            var text = $('#editor3').html();
            $('#'+data_text).html(text);
            if(confirm('Saqlaysizmi? ')){
                // alert('dsd');
                // console.log($('form'));
                $('.scientist_form').submit();
            }
        });
    </script>

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
