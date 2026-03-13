@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ isset($poll) ? 'Tahrirlash' : 'Yangi yaratish' }}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action="{{ isset($poll) ? route('polls.update', $poll->id) : route('polls.store') }}" method="POST">
                @csrf
                @if(isset($poll)) @method('PUT') @endif

                <div class="card">
                    <div class="card-header bg-primary white d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Asosiy ma'lumotlar</h3>
                        <div>
                            <button type="button" class="btn btn-sm btn-light copy-lang" data-source="uz" data-target="ru">UZ -> RU</button>
                            <button type="button" class="btn btn-sm btn-light copy-lang" data-source="uz" data-target="en">UZ -> EN</button>
                            <button type="button" class="btn btn-sm btn-light copy-lang" data-source="ru" data-target="en">RU -> EN</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sarlavha (UZ)</label>
                                    <input type="text" name="title_uz" class="form-control" value="{{ old('title_uz', $poll->title_uz ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sarlavha (RU)</label>
                                    <input type="text" name="title_ru" class="form-control" value="{{ old('title_ru', $poll->title_ru ?? '') }}" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Sarlavha (EN)</label>
                                    <input type="text" name="title_en" class="form-control" value="{{ old('title_en', $poll->title_en ?? '') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="show_results" name="show_results" {{ old('show_results', $poll->show_results ?? true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="show_results">Natijalarni foydalanuvchilarga ko'rsatish</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header bg-success white d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Savollar</h3>
                        <button type="button" class="btn btn-sm btn-light" id="add-question">+ Savol qo'shish</button>
                    </div>
                    <div class="card-body" id="questions-container">
                        @if(isset($poll))
                            @foreach($poll->questions as $qIndex => $question)
                                @include('admin.pages.polls.partials.question_item', ['qIndex' => $qIndex, 'question' => $question])
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="mt-3 mb-5">
                    <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                    <a href="{{ route('polls.index') }}" class="btn btn-lg btn-default">Bekor qilish</a>
                </div>
            </form>
        </div>
    </section>
</div>

<template id="question-template">
    @include('admin.pages.polls.partials.question_item', ['qIndex' => 'INDEX_PLACEHOLDER'])
</template>

<template id="option-template">
    @include('admin.pages.polls.partials.option_item', ['qIndex' => 'Q_INDEX_PLACEHOLDER', 'oIndex' => 'O_INDEX_PLACEHOLDER'])
</template>
@endsection

@section('js')
<script>
    let questionCount = {{ isset($poll) ? $poll->questions->count() : 0 }};

    $(document).ready(function() {
        $('#add-question').click(function() {
            let html = $('#question-template').html().replace(/INDEX_PLACEHOLDER/g, questionCount);
            $('#questions-container').append(html);
            questionCount++;
        });

        $(document).on('click', '.remove-question', function() {
            $(this).closest('.question-item').remove();
        });

        $(document).on('click', '.add-option', function() {
            let qIdx = $(this).data('q-index');
            let container = $(this).closest('.question-item').find('.options-container');
            let oCount = container.find('.option-item').length;
            let html = $('#option-template').html()
                .replace(/Q_INDEX_PLACEHOLDER/g, qIdx)
                .replace(/O_INDEX_PLACEHOLDER/g, oCount);
            container.append(html);
        });

        $(document).on('click', '.remove-option', function() {
            $(this).closest('.option-item').remove();
        });

        $(document).on('change', '.question-type', function() {
            let optionsBox = $(this).closest('.question-item').find('.options-box');
            if ($(this).val() === 'text') {
                optionsBox.hide();
            } else {
                optionsBox.show();
            }
        });

        // Global language copy logic
        $('.copy-lang').click(function() {
            let sourceLang = $(this).data('source'); // 'uz' or 'ru'
            let targetLang = $(this).data('target'); // 'ru' or 'en'
            
            // 1. Copy main title
            $(`input[name="title_${sourceLang}"]`).each(function() {
                $(`input[name="title_${targetLang}"]`).val($(this).val());
            });

            // 2. Copy question texts
            $(`input[name^="questions"][name$="[text_${sourceLang}]"]`).each(function() {
                let name = $(this).attr('name');
                let targetName = name.replace(`[text_${sourceLang}]`, `[text_${targetLang}]`);
                $(`input[name="${targetName}"]`).val($(this).val());
            });

            // 3. Copy option texts
            $(`input[name*="[options]"][name$="[text_${sourceLang}]"]`).each(function() {
                let name = $(this).attr('name');
                let targetName = name.replace(`[text_${sourceLang}]`, `[text_${targetLang}]`);
                $(`input[name="${targetName}"]`).val($(this).val());
            });

            alert(`Ma'lumotlar ${sourceLang.toUpperCase()} dan ${targetLang.toUpperCase()} tiliga nusxalandi!`);
        });
    });
</script>
@endsection
