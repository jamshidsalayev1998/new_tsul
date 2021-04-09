@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <form action="{{route('admin.slider.store')}}" method="post">
                  @method('POST')
                      @csrf
            <!-- /.card -->

            <div class="card">
              <div class="card-header w-100">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Imtihonlarssss</h3>
                    </div>
                      <div>
                        <button type="submit" class="btn btn-success">Saqlash</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="col-md-12">
                          <div id="carouselExampleControls" data-interval="false" class="carousel slide" data-ride="carousel" style="width: 100%; max-height: 600px; overflow: hidden">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <button type="button" class="btn btn-danger" style="position: absolute"><i class="fa fa-trash"></i></button>
                                  <img class="d-block w-100" src="{{asset('front_assets/assets/img/img1.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('front_assets/assets/img/img2.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="{{asset('front_assets/assets/img/img3.jpg')}}" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                        </div>
                      </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Text uz</label>
                      <textarea id="summernote" name="text_uz" style="width: 100%">{{$slider_texts->text_uz}}</textarea>
                  </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Text ru</label>
                      <textarea id="summernote1" name="text_ru" style="width: 100%">{{$slider_texts->text_ru}}</textarea>
                  </div>
                  <div class="col-md-12 mt-3">
                      <label for="">Text en</label>
                      <textarea id="summernote2" name="text_en" style="width: 100%">{{$slider_texts->text_en}}</textarea>
                  </div>
                  <div class="col-md-3 mt-3">
                      <label for="">Email</label>
                      <input type="text" class="form-control" name="email" value="{{$slider_texts->email}}">
                  </div>
                  <div class="col-md-3 mt-3">
                      <label for="">Phone</label>
                      <input type="text" class="form-control" name="phone" value="{{$slider_texts->phone}}">
                  </div>
                  <div class="col-md-3 mt-3">
                      <label for="">Link</label>
                      <input type="text" class="form-control" name="link" value="{{$slider_texts->link}}">
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
    </script>
@endsection
