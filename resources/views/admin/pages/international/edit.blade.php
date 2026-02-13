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
                                <form action="{{ route('international.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="tab-content" id="international-tabs-content">
                                        <!-- Uzbek -->
                                        <div class="tab-pane fade show active" id="uz-content" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title_uz">Sarlavha (UZ)</label>
                                                <input type="text" name="title_uz" id="title_uz" class="form-control"
                                                    value="{{ $item->title_uz }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="description_uz">Tavsif (UZ)</label>
                                                <textarea name="description_uz" id="description_uz"
                                                    class="form-control">{{ $item->description_uz }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="conditions_uz">Ishtirok shartlari (UZ)</label>
                                                <textarea name="conditions_uz" id="conditions_uz"
                                                    class="form-control">{{ $item->conditions_uz }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_info_uz">Aloqa ma'lumotlari (UZ)</label>
                                                <textarea name="contact_info_uz" id="contact_info_uz"
                                                    class="form-control">{{ $item->contact_info_uz }}</textarea>
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
                                                <label for="description_ru">Описание (RU)</label>
                                                <textarea name="description_ru" id="description_ru"
                                                    class="form-control">{{ $item->description_ru }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="conditions_ru">Условия участия (RU)</label>
                                                <textarea name="conditions_ru" id="conditions_ru"
                                                    class="form-control">{{ $item->conditions_ru }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_info_ru">Контактная информация (RU)</label>
                                                <textarea name="contact_info_ru" id="contact_info_ru"
                                                    class="form-control">{{ $item->contact_info_ru }}</textarea>
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
                                                <label for="description_en">Description (EN)</label>
                                                <textarea name="description_en" id="description_en"
                                                    class="form-control">{{ $item->description_en }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="conditions_en">Conditions of Participation (EN)</label>
                                                <textarea name="conditions_en" id="conditions_en"
                                                    class="form-control">{{ $item->conditions_en }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_info_en">Contact Information (EN)</label>
                                                <textarea name="contact_info_en" id="contact_info_en"
                                                    class="form-control">{{ $item->contact_info_en }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="deadline">Hujjat topshirish muddati</label>
                                        <input type="date" name="deadline" id="deadline" class="form-control"
                                            value="{{ $item->deadline }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="grant_amount">Grant miqdori</label>
                                        <input type="text" name="grant_amount" id="grant_amount" class="form-control"
                                            value="{{ $item->grant_amount }}">
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