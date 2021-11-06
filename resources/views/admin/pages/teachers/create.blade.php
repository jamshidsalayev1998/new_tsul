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
                            <form action="{{route('teachers.store')}}" id="teacher_info" method="post" class="form_news">
                                @csrf
                                @method('POST')
                                <div class="card-body">
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
                                                        <div id="editor1" data-text="editor_text1" class="border"></div>
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
                                                        <div id="editor2" data-text="editor_text2" class="border"></div>
                                                        <textarea name="contact_info_uz" hidden id="editor_text2"
                                                                  cols="30"
                                                                  rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lang-ru" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            ru
                                        </div>
                                        <div class="tab-pane fade" id="lang-en" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            en
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
