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
              <form action="{{route('admin.page.store')}}" method="post">
                  @csrf
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
                          <input type="text" class="form-control" name="title">
                      </div>
                      <div class="col-md-2">
                          <label for="">Slug</label>
                          <input type="text" class="form-control" name="slug">
                      </div>
                      <div class="col-md-12">
                          <label for="">Menu</label>
                          <select class="form-control select2 p-1" name="menu_id" id="">
                              <option value="">Tanlang yoki shunday qoldiring</option>
                              @foreach($menus as $menu)
                                  <option value="{{$menu->id}}">{{$menu->name_ru}}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="col-md-12">
                          <label for="">Content uz</label>
                          <textarea name="content_uz" id="summernote1" cols="30" rows="10"></textarea>
                      </div>
                      <div class="col-md-12">
                          <label for="">Content ru</label>
                          <textarea name="content_ru" id="summernote2" cols="30" rows="10"></textarea>
                      </div>
                      <div class="col-md-12">
                          <label for="">Content en</label>
                          <textarea name="content_en" id="summernote3" cols="30" rows="10"></textarea>
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
