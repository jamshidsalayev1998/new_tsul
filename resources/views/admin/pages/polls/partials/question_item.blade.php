<div class="card card-outline card-info question-item mt-3">
    <div class="card-header">
        <h3 class="card-title">Savol #<span class="question-idx">{{ (is_numeric($qIndex) ? ($qIndex + 1) : 'Mavjud emas') }}</span></h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool remove-question text-danger"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Savol turi</label>
                    <select name="questions[{{$qIndex}}][type]" class="form-control question-type" required>
                        <option value="single" {{ (isset($question) && $question->type == 'single') ? 'selected' : '' }}>Bir nechta variantdan bittasi</option>
                        <option value="multi" {{ (isset($question) && $question->type == 'multi') ? 'selected' : '' }}>Bir nechta variantdan bir nechtasi</option>
                        <option value="text" {{ (isset($question) && $question->type == 'text') ? 'selected' : '' }}>Yozma javob</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Matn (UZ)</label>
                    <input type="text" name="questions[{{$qIndex}}][text_uz]" class="form-control" value="{{ $question->text_uz ?? '' }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Matn (RU)</label>
                    <input type="text" name="questions[{{$qIndex}}][text_ru]" class="form-control" value="{{ $question->text_ru ?? '' }}" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Matn (EN)</label>
                    <input type="text" name="questions[{{$qIndex}}][text_en]" class="form-control" value="{{ $question->text_en ?? '' }}" required>
                </div>
            </div>
        </div>

        <div class="options-box mt-2" style="{{ (isset($question) && $question->type == 'text') ? 'display:none' : '' }}">
            <h5>Variantlar</h5>
            <div class="options-container">
                @if(isset($question))
                    @foreach($question->options as $oIndex => $option)
                        @include('admin.pages.polls.partials.option_item', ['qIndex' => $qIndex, 'oIndex' => $oIndex, 'option' => $option])
                    @endforeach
                @endif
            </div>
            <button type="button" class="btn btn-sm btn-outline-success add-option" data-q-index="{{$qIndex}}">+ Variant qo'shish</button>
        </div>
    </div>
</div>
