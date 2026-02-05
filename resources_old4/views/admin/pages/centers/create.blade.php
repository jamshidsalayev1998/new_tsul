@extends('admin.layouts.master')
@section('link')
      <link rel="stylesheet" href="{{asset('admin_lte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('content')
    <style>
        .select2-selection__rendered{
            margin-top: -13px !important;
        }
    </style>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <form action="{{route('admin_center.store')}}" class="form_news" method="post">
                  @csrf
            <div class="card">
              <div class="card-header w-100" style="position:sticky; top: 50px; background-color: white; z-index: 1000">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Center create</h3>
                    </div>
                      <div>
                        <button type="button" class="btn btn-success saqlash_button" >saqlash</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
{{--                      <div class="col-md-4">--}}
{{--                          <div class="form-group">--}}
{{--                              <label for="">Type</label>--}}
{{--                              <select name="type_id" id="" class="form-control">--}}
{{--                                  <option value="1">Bakalavr</option>--}}
{{--                                  <option value="2">Magistr</option>--}}
{{--                              </select>--}}
{{--                          </div>--}}
{{--                      </div>--}}
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-1-tab" data-toggle="pill" href="#custom-tabs-four-1" role="tab" aria-controls="custom-tabs-four-1" aria-selected="false"> uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-2-tab" data-toggle="pill" href="#custom-tabs-four-2" role="tab" aria-controls="custom-tabs-four-2" aria-selected="false"> ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-3-tab" data-toggle="pill" href="#custom-tabs-four-3" role="tab" aria-controls="custom-tabs-four-3" aria-selected="false"> en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-1" role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control" name="name_uz">
                                  <label for="">Short info</label>
                                   <textarea name="short_info_uz"  rows="3"  cols="30" class="form-control"></textarea>
                                  <label for="">content</label>
                                  <div id="editor1" data-text="editor_text1" class="border" ></div>
                                  <textarea name="content_uz" hidden rows="11"  cols="30" id="editor_text1" class="form-control"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control" name="name_ru">
                                  <label for="">Short info</label>
                                  <textarea name="short_info_ru"  rows="3"  cols="30" class="form-control"></textarea>
                                  <label for="">content</label>
                                  <div id="editor2" data-text="editor_text2" class="border" ></div>
                                  <textarea name="content_ru" hidden rows="11"  cols="30" id="editor_text2" class="form-control"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">
                                  <label for="">Name</label>
                                  <input type="text" class="form-control" name="name_en">
                                  <label for="">Short info</label>
                                  <textarea name="short_info_en"  rows="3"  cols="30" class="form-control"></textarea>
                                  <label for="">content</label>
                                  <div id="editor3" data-text="editor_text3" class="border" ></div>
                                  <textarea name="content_en" hidden rows="11"  cols="30" id="editor_text3" class="form-control"></textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
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
@section('js_after')
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('admin_lte/ckeditor5/ckeditor5_connect.js')}}"></script>
@endsection
@section('js')

    <script src="{{asset('admin_lte/ckeditor5/correcting.js')}}"></script>
{{--    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>--}}
    {{--    <script src="{{asset('js/faculties_create.js')}}"></script>--}}

    <script>
        // $(document).ready(function(){
        //            $('.summernote1').summernote();
        //            $('.summernote2').summernote();
        //            $('.summernote3').summernote();
        //        })
    </script>
@endsection
