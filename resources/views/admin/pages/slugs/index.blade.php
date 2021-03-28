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
              <form action="{{route('admin.slug.store')}}" method="post">
                  @csrf
                  <input type="text" hidden readonly name="menu_id" value="{{$menu->id}}">
                  <input type="text" hidden readonly name="page_id" value="{{$page->id}}">
            <div class="card">
              <div class="card-header w-100">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Page create</h3>
                    </div>
                      <div>
                        <button type="submit" href="{{route('admin.page.store')}}" class="btn btn-success" >saqlash</button>
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
                          <input type="text" readonly class="form-control" name="slug" value="{{$for_slug}}">
                      </div>
                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Content uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Content ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Content en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                  <textarea name="content_uz" id="summernote1" cols="30" rows="10">{{$page->content_uz}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                  <textarea name="content_ru" id="summernote2" cols="30" rows="10">{{$page->content_ru}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                  <textarea name="content_en" id="summernote3" cols="30" rows="10">{{$page->content_en}}</textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
{{--                      <div class="col-md-12">--}}
{{--                          <label for="">Content uz</label>--}}
{{--                          <textarea name="content_uz" id="summernote1" cols="30" rows="10">{{$page->content_uz}}</textarea>--}}
{{--                      </div>--}}
{{--                      <div class="col-md-12">--}}
{{--                          <label for="">Content ru</label>--}}
{{--                          <textarea name="content_ru" id="summernote2" cols="30" rows="10">{{$page->content_ru}}</textarea>--}}
{{--                      </div>--}}
{{--                      <div class="col-md-12">--}}
{{--                          <label for="">Content en</label>--}}
{{--                          <textarea name="content_en" id="summernote3" cols="30" rows="10">{{$page->content_en}}</textarea>--}}
{{--                      </div>--}}
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
    <script src="{{asset('admin_lte/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('#summernote1').summernote();
        $('#summernote2').summernote();
        $('#summernote3').summernote();
         $('.select2').select2()
    </script>
    <script>
        $('.form-delete').click(function(){
            var id = $(this).attr('data-id');
            if(confirm('O`chirishni tasdiqlaysizmi')){
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-'+id).submit();
            }
        })
    </script>
@endsection
