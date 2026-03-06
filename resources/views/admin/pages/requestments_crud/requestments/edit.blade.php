@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <div class="card">
                            <div class="card-header w-100">
                                <div style="display: flex; justify-content: space-between ; width: 100%">
                                    <div>
                                        <h3 class="card-title">O'qituvchi yaratish</h3>
                                    </div>
                                    <div>
                                        <button type="button" form="teacher_info"
                                                class="btn btn-success saqlash_button"> saqlash
                                        </button>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <form action="{{route('requestment.update' , ['requestment' => $data->id])}}" id="teacher_info" method="post" class="form_news"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if ($errors->any())
                                                <div class="alert alert-danger" role="alert">
                                                    @foreach ($errors->all() as $error)
                                                        <div>{{$error}}</div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>


                                    </div>
                                    <ul class="nav nav-tabs" id="lang_tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="lang-uz-tab" data-toggle="tab"
                                               href="#lang-uz"
                                               role="tab" aria-controls="profile" aria-selected="false">UZ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="lang-ru-tab" data-toggle="tab" href="#lang-ru"
                                               role="tab" aria-controls="contact" aria-selected="false">RU</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="lang-en-tab" data-toggle="tab" href="#lang-en"
                                               role="tab" aria-controls="contact" aria-selected="false">EN</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="lang_tabContent">
                                        <div class="tab-pane fade show  active" id="lang-uz" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <div class="col-md-12 form-group">
                                                <label for=""> <span class="text-danger">*</span> Nomi (UZ)</label>
                                                <input type="text" class="form-control" name="name_uz"
                                                       value="{{$data->name_uz}}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for=""><span class="text-danger">*</span>Qisqacha ma'lumotlarni kiriting UZ</label>
                                                <div id="toolbar-container1"></div>
                                                <div id="editor1" data-text="editor_text1"
                                                     class="border">{!! $data->description_uz !!}</div>
                                                <textarea name="description_uz" hidden id="editor_text1"
                                                          cols="30"
                                                          rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lang-ru" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="col-md-12 form-group">
                                                <label for="">Nomi (RU)</label>
                                                <input type="text" class="form-control" name="name_ru"
                                                       value="{{$data->name_ru}}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                 <label for="">Qisqacha ma'lumotlarni kiriting RU</label>
                                                        <div id="toolbar-container3"></div>
                                                        <div id="editor3" data-text="editor_text3" class="border">{!! $data->description_ru !!}</div>
                                                        <textarea name="description_ru" hidden id="editor_text3"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="lang-en" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="col-md-12 form-group">
                                                <label for="">Nomi (EN)</label>
                                                <input type="text" class="form-control" name="name_en"
                                                       value="{{$data->name_en}}">
                                            </div>
                                             <div class="col-md-12 form-group">
                                                <label for="">Qisqacha ma'lumotlarni kiriting EN</label>
                                                        <div id="toolbar-container5"></div>
                                                        <div id="editor5" data-text="editor_text5" class="border">{!! $data->description_en !!}</div>
                                                        <textarea name="description_en" hidden id="editor_text5"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </form>

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
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('admin_lte/ckeditor5/ckeditor5_connect.js')}}"></script>
@endsection
@section('js')

    <script src="{{asset('admin_lte/ckeditor5/correcting.js')}}"></script>
@endsection
