@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="international-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="uz-tab" data-toggle="pill" href="#uz-content"
                                            role="tab">Uzbek</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="ru-tab" data-toggle="pill" href="#ru-content"
                                            role="tab">Russian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="en-tab" data-toggle="pill" href="#en-content"
                                            role="tab">English</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('international.store') }}" method="POST"
                                    enctype="multipart/form-data" class="form_news">
                                    @csrf
                                    <div class="tab-content" id="international-tabs-content">
                                        <!-- Uzbek -->
                                        <div class="tab-pane fade show active" id="uz-content" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title_uz">Sarlavha (UZ)</label>
                                                <input type="text" name="title_uz" id="title_uz" class="form-control"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="description_uz">Tavsif (UZ)</label>
                                                <div id="editor1" data-text="editor_text1" class="border"></div>
                                                <textarea name="description_uz" hidden id="editor_text1"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="conditions_uz">Ishtirok shartlari (UZ)</label>
                                                <div id="editor2" data-text="editor_text2" class="border"></div>
                                                <textarea name="conditions_uz" hidden id="editor_text2"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_info_uz">Aloqa ma'lumotlari (UZ)</label>
                                                <div id="editor3" data-text="editor_text3" class="border"></div>
                                                <textarea name="contact_info_uz" hidden id="editor_text3"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <!-- Russian -->
                                        <div class="tab-pane fade" id="ru-content" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title_ru">Заголовок (RU)</label>
                                                <input type="text" name="title_ru" id="title_ru" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="description_ru">Описание (RU)</label>
                                                <div id="editor4" data-text="editor_text4" class="border"></div>
                                                <textarea name="description_ru" hidden id="editor_text4"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="conditions_ru">Условия участия (RU)</label>
                                                <div id="editor5" data-text="editor_text5" class="border"></div>
                                                <textarea name="conditions_ru" hidden id="editor_text5"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_info_ru">Контактная информация (RU)</label>
                                                <div id="editor6" data-text="editor_text6" class="border"></div>
                                                <textarea name="contact_info_ru" hidden id="editor_text6"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <!-- English -->
                                        <div class="tab-pane fade" id="en-content" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title_en">Title (EN)</label>
                                                <input type="text" name="title_en" id="title_en" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="description_en">Description (EN)</label>
                                                <div id="editor7" data-text="editor_text7" class="border"></div>
                                                <textarea name="description_en" hidden id="editor_text7"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="conditions_en">Conditions of Participation (EN)</label>
                                                <div id="editor8" data-text="editor_text8" class="border"></div>
                                                <textarea name="conditions_en" hidden id="editor_text8"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_info_en">Contact Information (EN)</label>
                                                <div id="editor9" data-text="editor_text9" class="border"></div>
                                                <textarea name="contact_info_en" hidden id="editor_text9"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="deadline">Hujjat topshirish muddati</label>
                                        <input type="date" name="deadline" id="deadline" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="grant_amount">Grant miqdori</label>
                                        <input type="text" name="grant_amount" id="grant_amount" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="image_file">Rasm</label>
                                        <input type="file" name="image_file" id="image_file" class="form-control-file">
                                    </div>
                                    <button type="button" class="btn btn-success saqlash_button">Saqlash</button>
                                    <a href="{{ route('international.index') }}" class="btn btn-secondary">Bekor qilish</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js_after')
    <script src="{{asset('admin_lte/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{asset('admin_lte/ckeditor5/ckeditor5_connect.js')}}"></script>
@endsection

@section('js')
    <script src="{{asset('admin_lte/ckeditor5/correcting.js')}}"></script>
@endsection