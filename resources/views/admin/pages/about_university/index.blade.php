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
              <form action="{{route('admin.about_university.update')}}" method="post" enctype="multipart/form-data">
                  @csrf
            <div class="card">
              <div class="card-header w-100">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">About university</h3>
                    </div>
                      <div>
                        <button type="submit"  class="btn btn-success" >saqlash</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="">Name uz</label>
                              <input type="text" class="form-control" name="name_uz" value="{{$about->name_uz}}">
                          </div>
                          <div class="form-group">
                              <label for="">Name ru</label>
                              <input type="text" class="form-control" name="name_ru" value="{{$about->name_ru}}">
                          </div>
                          <div class="form-group">
                              <label for="">Name en</label>
                              <input type="text" class="form-control" name="name_en" value="{{$about->name_en}}">
                          </div>

                      </div>
                      <div class="col-md-6">
                              <label for="">Image</label>
                          <div style="width: 100%; min-height: 430px; overflow: hidden;" class="border p-3">
                              <img id="imagePreview" src="{{asset('')}}{{$about->image}}" alt="" style="max-height: 430px;">
                          </div>
                          <div style="display: flex; justify-content: flex-end">
                              <button type="button"   class="btn btn-light select-image">
                                  <i class="fa fa-edit"></i>
                              </button>
                              <input type="file" id="imageUpload" hidden name="image" class="image_input">
                          </div>
                      </div>
                      <div class="col-md-6">

                          <div class="form-group">
                              <label for="">Phone</label>
                              <input type="text" class="form-control" name="phone" value="{{$about->phone}}">
                          </div>
                          <div class="form-group">
                              <label for="">Email</label>
                              <input type="text" class="form-control" name="email" value="{{$about->email}}">
                          </div>
                          <div class="form-group">
                              <label for="">Address uz</label>
                              <input type="text" class="form-control" name="address_uz" value="{{$about->address_uz}}">
                          </div>
                          <div class="form-group">
                              <label for="">Address ru</label>
                              <input type="text" class="form-control" name="address_ru" value="{{$about->address_ru}}">
                          </div>
                          <div class="form-group">
                              <label for="">Address en</label>
                              <input type="text" class="form-control" name="address_en" value="{{$about->address_en}}">
                          </div>
                          <div class="form-group">
                              <label for="">Faks</label>
                              <input type="text" class="form-control" name="faks" value="{{$about->faks}}">
                          </div>
                      </div>
                      <div class="col-md-2">
                          Twitter
                          <input type="text" class="form-control" name="twitter" value="{{$about->twitter}}">
                      </div>
                      <div class="col-md-2">
                          telegram
                          <input type="text" class="form-control" name="telegram" value="{{$about->telegram}}">
                      </div>
                      <div class="col-md-2">
                          youtube
                          <input type="text" class="form-control" name="youtube" value="{{$about->youtube}}">
                      </div>
                      <div class="col-md-3">
                          Instagram
                          <input type="text" class="form-control" name="instagram" value="{{$about->instagram}}">
                      </div>
                      <div class="col-md-3">
                          Facebook
                          <input type="text" class="form-control" name="facebook" value="{{$about->facebook}}">
                      </div>

                      <div class="col-md-12 mt-3">
                        <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="false">Short info uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Short info ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Short info en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                  <textarea name="short_description_uz" id="summernote1" cols="30" rows="10">{{$about->short_description_uz}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                  <textarea name="short_description_ru" id="summernote2" cols="30" rows="10">{{$about->short_description_ru}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                  <textarea name="short_description_en" id="summernote3" cols="30" rows="10">{{$about->short_description_en}}</textarea>
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
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-1" role="tab" aria-controls="custom-tabs-four-1" aria-selected="false">Full info uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-2" role="tab" aria-controls="custom-tabs-four-2" aria-selected="false">Full info ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-3" role="tab" aria-controls="custom-tabs-four-3" aria-selected="false">Full info en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-1" role="tabpanel" aria-labelledby="custom-tabs-four-1-tab">
                                  <textarea name="full_information_uz" id="summernote4" cols="30" rows="10">{{$about->full_information_uz}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">
                                  <textarea name="full_information_ru" id="summernote5" cols="30" rows="10">{{$about->full_information_ru}}</textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">
                                  <textarea name="full_information_en" id="summernote6" cols="30" rows="10">{{$about->full_information_en}}</textarea>
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
@section('js')
    <script src="{{asset('admin_lte/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $('#summernote1').summernote();
        $('#summernote2').summernote();
        $('#summernote3').summernote();
        $('#summernote4').summernote();
        $('#summernote5').summernote();
        $('#summernote6').summernote();
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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
        $('.select-image').click(function(){
            $("#imageUpload").click();
        });
    </script>
@endsection
