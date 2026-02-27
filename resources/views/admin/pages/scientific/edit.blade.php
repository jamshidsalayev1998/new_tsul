@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="scientific-tabs" role="tablist">
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
                                <form action="{{ route('scientific.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="tab-content" id="scientific-tabs-content">
                                        <!-- Uzbek -->
                                        <div class="tab-pane fade show active" id="uz-content" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title_uz">Sarlavha (UZ)</label>
                                                <input type="text" name="title_uz" id="title_uz" class="form-control"
                                                    value="{{ $item->title_uz }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="location_uz">Manzil (UZ)</label>
                                                <input type="text" name="location_uz" id="location_uz" class="form-control"
                                                    value="{{ $item->location_uz }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description_uz">Tavsif (UZ)</label>
                                                <div id="editor1" data-text="editor_text1" class="border">
                                                    {!! $item->description_uz !!}</div>
                                                <textarea name="description_uz" hidden id="editor_text1"
                                                    class="form-control">{{ $item->description_uz }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="speakers_uz">Ma'ruzachilar (UZ)</label>
                                                <div id="editor2" data-text="editor_text2" class="border">
                                                    {!! $item->speakers_uz !!}</div>
                                                <textarea name="speakers_uz" hidden id="editor_text2"
                                                    class="form-control">{{ $item->speakers_uz }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participation_rules_uz">Ishtirok etish tartibi (UZ)</label>
                                                <div id="editor3" data-text="editor_text3" class="border">
                                                    {!! $item->participation_rules_uz !!}</div>
                                                <textarea name="participation_rules_uz" hidden id="editor_text3"
                                                    class="form-control">{{ $item->participation_rules_uz }}</textarea>
                                            </div>
                                        </div>
                                        <!-- Russian -->
                                        <div class="tab-pane fade" id="ru-content" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title_ru">Заголовок (RU)</label>
                                                <input type="text" name="title_ru" id="title_ru" class="form-control"
                                                    value="{{ $item->title_ru }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="location_ru">Адрес (RU)</label>
                                                <input type="text" name="location_ru" id="location_ru" class="form-control"
                                                    value="{{ $item->location_ru }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description_ru">Описание (RU)</label>
                                                <div id="editor4" data-text="editor_text4" class="border">
                                                    {!! $item->description_ru !!}</div>
                                                <textarea name="description_ru" hidden id="editor_text4"
                                                    class="form-control">{{ $item->description_ru }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="speakers_ru">Спикеры (RU)</label>
                                                <div id="editor5" data-text="editor_text5" class="border">
                                                    {!! $item->speakers_ru !!}</div>
                                                <textarea name="speakers_ru" hidden id="editor_text5"
                                                    class="form-control">{{ $item->speakers_ru }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participation_rules_ru">Правила участия (RU)</label>
                                                <div id="editor6" data-text="editor_text6" class="border">
                                                    {!! $item->participation_rules_ru !!}</div>
                                                <textarea name="participation_rules_ru" hidden id="editor_text6"
                                                    class="form-control">{{ $item->participation_rules_ru }}</textarea>
                                            </div>
                                        </div>
                                        <!-- English -->
                                        <div class="tab-pane fade" id="en-content" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title_en">Title (EN)</label>
                                                <input type="text" name="title_en" id="title_en" class="form-control"
                                                    value="{{ $item->title_en }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="location_en">Address (EN)</label>
                                                <input type="text" name="location_en" id="location_en" class="form-control"
                                                    value="{{ $item->location_en }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description_en">Description (EN)</label>
                                                <div id="editor7" data-text="editor_text7" class="border">
                                                    {!! $item->description_en !!}</div>
                                                <textarea name="description_en" hidden id="editor_text7"
                                                    class="form-control">{{ $item->description_en }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="speakers_en">Speakers (EN)</label>
                                                <div id="editor8" data-text="editor_text8" class="border">
                                                    {!! $item->speakers_en !!}</div>
                                                <textarea name="speakers_en" hidden id="editor_text8"
                                                    class="form-control">{{ $item->speakers_en }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participation_rules_en">Rules of Participation (EN)</label>
                                                <div id="editor9" data-text="editor_text9" class="border">
                                                    {!! $item->participation_rules_en !!}</div>
                                                <textarea name="participation_rules_en" hidden id="editor_text9"
                                                    class="form-control">{{ $item->participation_rules_en }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="event_date">Tadbir sanasi va vaqti</label>
                                        <input type="datetime-local" name="event_date" id="event_date" class="form-control"
                                            value="{{ $item->event_date ? date('Y-m-d\TH:i', strtotime($item->event_date)) : '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="image_file">Rasm</label>
                                        @if($item->image)
                                            <div class="mb-2">
                                                <img src="{{ asset($item->image) }}" width="100">
                                            </div>
                                        @endif
                                        <input type="file" name="image_file" id="image_file" class="form-control-file">
                                    </div>
                                    <button type="submit" class="btn btn-success">Yangilash</button>
                                    <a href="{{ route('scientific.index') }}" class="btn btn-secondary">Bekor qilish</a>
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