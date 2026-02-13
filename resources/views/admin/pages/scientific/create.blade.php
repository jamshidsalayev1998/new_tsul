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
                                <form action="{{ route('scientific.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content" id="scientific-tabs-content">
                                        <!-- Uzbek -->
                                        <div class="tab-pane fade show active" id="uz-content" role="tabpanel">
                                            <div class="form-group">
                                                <label for="title_uz">Sarlavha (UZ)</label>
                                                <input type="text" name="title_uz" id="title_uz" class="form-control"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label for="location_uz">Manzil (UZ)</label>
                                                <input type="text" name="location_uz" id="location_uz" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="description_uz">Tavsif (UZ)</label>
                                                <textarea name="description_uz" id="description_uz"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="speakers_uz">Ma'ruzachilar (UZ)</label>
                                                <textarea name="speakers_uz" id="speakers_uz"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participation_rules_uz">Ishtirok etish tartibi (UZ)</label>
                                                <textarea name="participation_rules_uz" id="participation_rules_uz"
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
                                                <label for="location_ru">Адрес (RU)</label>
                                                <input type="text" name="location_ru" id="location_ru" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="description_ru">Описание (RU)</label>
                                                <textarea name="description_ru" id="description_ru"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="speakers_ru">Спикеры (RU)</label>
                                                <textarea name="speakers_ru" id="speakers_ru"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participation_rules_ru">Правила участия (RU)</label>
                                                <textarea name="participation_rules_ru" id="participation_rules_ru"
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
                                                <label for="location_en">Address (EN)</label>
                                                <input type="text" name="location_en" id="location_en" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="description_en">Description (EN)</label>
                                                <textarea name="description_en" id="description_en"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="speakers_en">Speakers (EN)</label>
                                                <textarea name="speakers_en" id="speakers_en"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="participation_rules_en">Rules of Participation (EN)</label>
                                                <textarea name="participation_rules_en" id="participation_rules_en"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="event_date">Tadbir sanasi va vaqti</label>
                                        <input type="datetime-local" name="event_date" id="event_date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="image_file">Rasm</label>
                                        <input type="file" name="image_file" id="image_file" class="form-control-file">
                                    </div>
                                    <button type="submit" class="btn btn-success">Saqlash</button>
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