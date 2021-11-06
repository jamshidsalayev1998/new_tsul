@extends('admin.layouts.master')
@section('link')


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
              <form action="{{route('center.administration.update' , ['id' => $data->id])}}" class="form_news" method="post" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
            <div class="card">
              <div class="card-header w-100">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Center administration create</h3>
                    </div>
                      <div>
                        <button type="button" class="btn btn-success saqlash_button" >saqlash</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="row">
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
                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <label for="">Full name uz</label>
                                                <input type="text" class="form-control" name="full_name_uz" value="{{$data->full_name_uz}}">
                                          </div>
                                      </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="">Type name uz</label>
                                                <input type="text" class="form-control" name="type_name_uz" value="{{$data->type_name_uz}}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Address uz</label>
                                                <input type="text" class="form-control" name="address_uz" value="{{$data->address_uz}}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Reception days uz</label>
                                                <input type="text" class="form-control" name="reception_days_uz" value="{{$data->reception_days_uz}}">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Mehnat faoliyati uz</label>
                                                <div id="toolbar-container1"></div>
                                                  <div id="editor1" data-text="editor_text1" class="border" >{!! $data->labor_activity_uz !!}</div>
                                                  <textarea name="labor_activity_uz" hidden rows="11"  cols="30" id="editor_text1" class="form-control">{{$data->labor_activity_uz}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Malaka oshirish uz</label>
                                                <div id="toolbar-container2"></div>
                                                  <div id="editor2" data-text="editor_text2" class="border" >{!! $data->professional_development_uz !!}</div>
                                                  <textarea name="professional_development_uz" hidden rows="11"  cols="30" id="editor_text2" class="form-control">{{$data->professional_development_uz}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Darslar uz</label>
                                                <div id="toolbar-container3"></div>
                                                  <div id="editor3" data-text="editor_text3" class="border" >{!! $data->lessons_uz !!}</div>
                                                  <textarea name="lessons_uz" hidden rows="11"  cols="30" id="editor_text3" class="form-control">{{$data->lessons_uz}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Ilmiy faoliyat uz</label>
                                                <div id="toolbar-container4"></div>
                                                  <div id="editor4" data-text="editor_text4" class="border" >{!! $data->scientific_activity_uz !!}</div>
                                                  <textarea name="scientific_activity_uz" hidden rows="11"  cols="30" id="editor_text4" class="form-control">{{$data->scientific_activity_uz}}</textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-2" role="tabpanel" aria-labelledby="custom-tabs-four-2-tab">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <label for="">Full name ru</label>
                                                <input type="text" class="form-control" name="full_name_ru" value="{{$data->full_name_ru}}">
                                          </div>
                                      </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="">Type name ru</label>
                                                <input type="text" class="form-control" name="type_name_ru" value="{{$data->type_name_ru}}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Address ru</label>
                                                <input type="text" class="form-control" name="address_ru" value="{{$data->address_ru}}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Reception days ru</label>
                                                <input type="text" class="form-control" name="reception_days_ru" value="{{$data->reception_days_ru}}">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Mehnat faoliyati ru</label>
                                                <div id="toolbar-container5"></div>
                                                  <div id="editor5" data-text="editor_text5" class="border" >{!! $data->labor_activity_ru !!}</div>
                                                  <textarea name="labor_activity_ru" hidden rows="11"  cols="30" id="editor_text5" class="form-control">{{$data->labor_activity_ru}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Malaka oshirish ru</label>
                                                <div id="toolbar-container6"></div>
                                                  <div id="editor6" data-text="editor_text6" class="border" >{!! $data->professional_development_ru !!}</div>
                                                  <textarea name="professional_development_ru" hidden rows="11"  cols="30" id="editor_text6" class="form-control">{{$data->professional_development_ru}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Darslar ru</label>
                                                <div id="toolbar-container7"></div>
                                                  <div id="editor7" data-text="editor_text7" class="border" >{!! $data->lessons_ru !!}</div>
                                                  <textarea name="lessons_ru" hidden rows="11"  cols="30" id="editor_text7" class="form-control">{{$data->lessons_ru}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Ilmiy faoliyat ru</label>
                                                <div id="toolbar-container8"></div>
                                                  <div id="editor8" data-text="editor_text8" class="border" >{!! $data->scientific_activity_ru !!}</div>
                                                  <textarea name="scientific_activity_ru" hidden rows="11"  cols="30" id="editor_text8" class="form-control">{{$data->scientific_activity_ru}}</textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane fade" id="custom-tabs-four-3" role="tabpanel" aria-labelledby="custom-tabs-four-3-tab">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <label for="">Full name en</label>
                                                <input type="text" class="form-control" name="full_name_en" value="{{$data->full_name_en}}">
                                          </div>
                                      </div>
                                       <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="">Type name en</label>
                                                <input type="text" class="form-control" name="type_name_en" value="{{$data->type_name_en}}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Address en</label>
                                                <input type="text" class="form-control" name="address_en" value="{{$data->address_en}}">
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="">Reception days en</label>
                                                <input type="text" class="form-control" name="reception_days_en" value="{{$data->reception_days_en}}">
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Mehnat faoliyati en</label>
                                                <div id="toolbar-container9"></div>
                                                  <div id="editor9" data-text="editor_text9" class="border" >{!! $data->labor_activity_en !!}</div>
                                                  <textarea name="labor_activity_en" hidden rows="11"  cols="30" id="editor_text9" class="form-control">{{$data->labor_activity_en}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Malaka oshirish en</label>
                                                <div id="toolbar-container10"></div>
                                                  <div id="editor10" data-text="editor_text10" class="border" >{!! $data->professional_development_en !!}</div>
                                                  <textarea name="professional_development_en" hidden rows="11"  cols="30" id="editor_text10" class="form-control">{{$data->professional_development_en}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Darslar en</label>
                                                <div id="toolbar-container11"></div>
                                                  <div id="editor11" data-text="editor_text11" class="border" >{!! $data->lessons_en !!}</div>
                                                  <textarea name="lessons_en" hidden rows="11"  cols="30" id="editor_text11" class="form-control">{{$data->lessons_en}}</textarea>
                                          </div>
                                      </div>
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label for="">Ilmiy faoliyat en</label>
                                                <div id="toolbar-container12"></div>
                                                  <div id="editor12" data-text="editor_text12" class="border" >{!! $data->scientific_activity_en !!}</div>
                                                  <textarea name="scientific_activity_en" hidden rows="11"  cols="30" id="editor_text12" class="form-control">{{$data->scientific_activity_en}}</textarea>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.card -->
                        </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Image</label>
                              <input type="file" name="image" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Phone</label>
                              <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">Faks</label>
                              <input type="text" name="faks" value="{{$data->faks}}" class="form-control">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="">email</label>
                              <input type="text" name="email" value="{{$data->email}}" class="form-control">
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
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('js/faculties_create.js')}}"></script>

    <script>
        //  $(document).ready(function(){
        //     $('.summernote1').summernote();
        //     $('.summernote2').summernote();
        //     $('.summernote3').summernote();
        // })
    </script>
@endsection
