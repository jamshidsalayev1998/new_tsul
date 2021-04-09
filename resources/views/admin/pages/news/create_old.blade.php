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
              <form action="{{route('admin.neww.store')}}" method="post" enctype="multipart/form-data">
                  @csrf
            <div class="card">
              <div class="card- header w-100 mt-2">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">News create</h3>
                    </div>
                      <div>
                        <button type="submit"  class="btn btn-success" >saqlash</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="card card-primary card-outline card-outline-tabs">
                          <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-image1-tab" data-toggle="pill" href="#custom-tabs-four-image1" role="tab" aria-controls="custom-tabs-four-image1" aria-selected="false">Image uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-image2-tab" data-toggle="pill" href="#custom-tabs-four-image2" role="tab" aria-controls="custom-tabs-four-image2" aria-selected="false">Image ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-image3-tab" data-toggle="pill" href="#custom-tabs-four-image3" role="tab" aria-controls="custom-tabs-four-image3" aria-selected="false">Image en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-image1" role="tabpanel" aria-labelledby="custom-tabs-four-image1-tab">
                                  <div class="form-group">
                                      <label for="">Image</label>
                                      <div class="img-box border" style="width: 100%; height: 300px; overflow: hidden">
                                          <img src="" alt="" id="imagePreview1" style="width: 100%; height: auto; ">
                                          <input type="file" id="imageUpload1" hidden name="image_uz">
                                      </div>
                                      <div>
                                          <button type="button" class="btn btn-light select-image1" style="right: 0; bottom: 0; position: absolute"><i class="fa fa-edit"></i></button>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-image2" role="tabpanel" aria-labelledby="custom-tabs-four-image2-tab">
                                  <div class="form-group">
                                      <label for="">Image</label>
                                      <div class="img-box border" style="width: 100%; height: 300px; overflow: hidden">
                                          <img src="" alt="" id="imagePreview2" style="width: 100%; height: auto; ">
                                          <input type="file" id="imageUpload2" hidden name="image_ru">
                                      </div>
                                      <div>
                                          <button type="button" class="btn btn-light select-image2" style="right: 0; bottom: 0; position: absolute"><i class="fa fa-edit"></i></button>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-image3" role="tabpanel" aria-labelledby="custom-tabs-four-image3-tab">
                                  <div class="form-group">
                                      <label for="">Image</label>
                                      <div class="img-box border" style="width: 100%; height: 300px; overflow: hidden">
                                          <img src="" alt="" id="imagePreview3" style="width: 100%; height: auto; ">
                                          <input type="file" id="imageUpload3" hidden name="image_en">
                                      </div>
                                      <div>
                                          <button type="button" class="btn btn-light select-image3" style="right: 0; bottom: 0; position: absolute"><i class="fa fa-edit"></i></button>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>

                      </div>
                      <div class="col-md-6">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Date</label>
                                      <input type="date" class="form-control" name="date">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Type</label>
                                      <select name="type_id" class="form-control"   >
                                          @foreach($types as $type)
                                              <option value="{{$type->id}}">{{$type->name_ru}}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="">Hashtags</label>
                                      <select name="hashtags" class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                          @foreach($hashtags as $hashtag)
                                              <option value="{{$hashtag->id}}">{{$hashtag->name_ru}}</option>
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
                                  <input type="text" class="form-control" name="title_uz">
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">
                                  <input type="text" class="form-control" name="title_ru">
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">
                                  <input type="text" class="form-control" name="title_en">
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
                                <a class="nav-link active" id="custom-tabs-four-short4-tab" data-toggle="pill" href="#custom-tabs-four-short4" role="tab" aria-controls="custom-tabs-four-short4" aria-selected="false">Short info uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-short5-tab" data-toggle="pill" href="#custom-tabs-four-short5" role="tab" aria-controls="custom-tabs-four-short5" aria-selected="false">Short info ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-short6-tab" data-toggle="pill" href="#custom-tabs-four-short6" role="tab" aria-controls="custom-tabs-four-short6" aria-selected="false">Short info en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-short4" role="tabpanel" aria-labelledby="custom-tabs-four-short4-tab">
                                  <textarea name="short_info_uz"  cols="30" class="form-control"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-short5" role="tabpanel" aria-labelledby="custom-tabs-four-short5-tab">
                                  <textarea name="short_info_ru"  cols="30" class="form-control"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-short6" role="tabpanel" aria-labelledby="custom-tabs-four-short6-tab">
                                  <textarea name="short_info_en"  cols="30" class="form-control"></textarea>
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
                                <a class="nav-link active" id="custom-tabs-four-4-tab" data-toggle="pill" href="#custom-tabs-four-4" role="tab" aria-controls="custom-tabs-four-4" aria-selected="false">Content uz</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-5-tab" data-toggle="pill" href="#custom-tabs-four-5" role="tab" aria-controls="custom-tabs-four-5" aria-selected="false">Content ru</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-6-tab" data-toggle="pill" href="#custom-tabs-four-6" role="tab" aria-controls="custom-tabs-four-6" aria-selected="false">Content en</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                              <div class="tab-pane fade show active" id="custom-tabs-four-4" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                  <textarea name="content_uz" id="summernote1" cols="30" rows="10"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-5" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                  <textarea name="content_ru" id="summernote2" cols="30" rows="10"></textarea>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-6" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                  <textarea name="content_en" id="summernote3" cols="30" rows="10"></textarea>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                  <div class="col-md-12">
                      <div id="toolbar-container"></div>
                      <div id="editor" >
                          <textarea name="okok">djshjkd</textarea>
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
     <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/decoupled-document/ckeditor.js"></script>
   <script>
    DecoupledEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
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
