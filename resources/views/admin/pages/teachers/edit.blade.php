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
                                        <button type="button" form="teacher_info" class="btn btn-success saqlash_button"> saqlash
                                        </button>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-header -->
                            <form action="{{route('teachers.update' , ['teacher' => $data->id])}}" id="teacher_info" method="post" class="form_news" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="">F.I.O</label>
                                            <input type="text" class="form-control" name="fio" value="{{$data->fio}}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="">Ilmiy darajasi</label>
                                            <input type="text" class="form-control" name="degree" value="{{$data->degree}}">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="">Rasm</label>
                                            <input type="file" class="form-control" name="image">
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
                                            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="general-tab" data-toggle="tab"
                                                       href="#general"
                                                       role="tab" aria-controls="profile" aria-selected="false">Umumiy
                                                        ma'lumot UZ</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab"
                                                       href="#contact"
                                                       role="tab" aria-controls="contact" aria-selected="false">Kontakt
                                                        malumoti UZ</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show  active" id="general" role="tabpanel"
                                                     aria-labelledby="profile-tab">
                                                    <div class="form-group">
                                                        <label for="">Umumiy ma'lumotlarni kiriting UZ</label>
                                                        <div id="toolbar-container1"></div>
                                                        <div id="editor1" data-text="editor_text1" class="border">{!! $data->general_info_uz !!}</div>
                                                        <textarea name="general_info_uz" hidden id="editor_text1"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact" role="tabpanel"
                                                     aria-labelledby="contact-tab">
                                                    <div class="form-group">
                                                        <label for="">Kontakt malumotlarini kiriting UZ</label>
                                                        <div id="toolbar-container2"></div>
                                                        <div id="editor2" data-text="editor_text2" class="border">{!! $data->contact_info_uz !!}</div>
                                                        <textarea name="contact_info_uz" hidden id="editor_text2"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lang-ru" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <ul class="nav nav-tabs mt-3" id="myTab2" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="general-tab" data-toggle="tab"
                                                       href="#general2"
                                                       role="tab" aria-controls="profile" aria-selected="false">Umumiy
                                                        ma'lumot RU</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab"
                                                       href="#contact2"
                                                       role="tab" aria-controls="contact" aria-selected="false">Kontakt
                                                        malumoti RU</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTab2Content">
                                                <div class="tab-pane fade show  active" id="general2" role="tabpanel"
                                                     aria-labelledby="profile-tab">
                                                    <div class="form-group">
                                                        <label for="">Umumiy ma'lumotlarni kiriting RU</label>
                                                        <div id="toolbar-container3"></div>
                                                        <div id="editor3" data-text="editor_text3" class="border">{!! $data->general_info_ru !!}</div>
                                                        <textarea name="general_info_ru" hidden id="editor_text3"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact2" role="tabpanel"
                                                     aria-labelledby="contact-tab">
                                                    <div class="form-group">
                                                        <label for="">Kontakt malumotlarini kiriting RU</label>
                                                        <div id="toolbar-container4"></div>
                                                        <div id="editor4" data-text="editor_text4" class="border">{!! $data->contact_info_ru !!}</div>
                                                        <textarea name="contact_info_ru" hidden id="editor_text4"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lang-en" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <ul class="nav nav-tabs mt-3" id="myTab3" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="general-tab" data-toggle="tab"
                                                       href="#general3"
                                                       role="tab" aria-controls="profile" aria-selected="false">Umumiy
                                                        ma'lumot EN</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab"
                                                       href="#contact3"
                                                       role="tab" aria-controls="contact" aria-selected="false">Kontakt
                                                        malumoti EN</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="myTab3Content">
                                                <div class="tab-pane fade show  active" id="general3" role="tabpanel"
                                                     aria-labelledby="profile-tab">
                                                    <div class="form-group">
                                                        <label for="">Umumiy ma'lumotlarni kiriting EN</label>
                                                        <div id="toolbar-container5"></div>
                                                        <div id="editor5" data-text="editor_text5" class="border">{!! $data->general_info_en !!}</div>
                                                        <textarea name="general_info_en" hidden id="editor_text5"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="contact3" role="tabpanel"
                                                     aria-labelledby="contact-tab">
                                                    <div class="form-group">
                                                        <label for="">Kontakt malumotlarini kiriting EN</label>
                                                        <div id="toolbar-container6"></div>
                                                        <div id="editor6" data-text="editor_text6" class="border">{!! $data->contact_info_en !!}</div>
                                                        <textarea name="contact_info_en" hidden id="editor_text6"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
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
