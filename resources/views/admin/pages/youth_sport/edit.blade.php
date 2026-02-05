@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
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
                                <form action="{{ route('youth-sport.update', $item->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
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
                                                <textarea name="description_uz" id="description_uz"
                                                    class="form-control">{{ $item->description_uz }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="organizers_uz">Mas'ul tashkilotchilar (UZ)</label>
                                                <textarea name="organizers_uz" id="organizers_uz"
                                                    class="form-control">{{ $item->organizers_uz }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participants_info_uz">Ishtirokchilar haqida ma'lumot
                                                    (UZ)</label>
                                                <textarea name="participants_info_uz" id="participants_info_uz"
                                                    class="form-control">{{ $item->participants_info_uz }}</textarea>
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
                                                <textarea name="description_ru" id="description_ru"
                                                    class="form-control">{{ $item->description_ru }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="organizers_ru">Ответственные организаторы (RU)</label>
                                                <textarea name="organizers_ru" id="organizers_ru"
                                                    class="form-control">{{ $item->organizers_ru }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participants_info_ru">Информация об участниках (RU)</label>
                                                <textarea name="participants_info_ru" id="participants_info_ru"
                                                    class="form-control">{{ $item->participants_info_ru }}</textarea>
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
                                                <textarea name="description_en" id="description_en"
                                                    class="form-control">{{ $item->description_en }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="organizers_en">Responsible Organizers (EN)</label>
                                                <textarea name="organizers_en" id="organizers_en"
                                                    class="form-control">{{ $item->organizers_en }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participants_info_en">Information about Participants
                                                    (EN)</label>
                                                <textarea name="participants_info_en" id="participants_info_en"
                                                    class="form-control">{{ $item->participants_info_en }}</textarea>
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
                                    <a href="{{ route('youth-sport.index') }}" class="btn btn-secondary">Bekor qilish</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection