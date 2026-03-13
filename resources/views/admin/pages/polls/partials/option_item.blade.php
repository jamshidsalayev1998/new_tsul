<div class="row option-item mb-2 align-items-center">
    <div class="col-md-3">
        <input type="text" name="questions[{{$qIndex}}][options][{{$oIndex}}][text_uz]" class="form-control form-control-sm" placeholder="Variant (UZ)" value="{{ $option->text_uz ?? '' }}" required>
    </div>
    <div class="col-md-3">
        <input type="text" name="questions[{{$qIndex}}][options][{{$oIndex}}][text_ru]" class="form-control form-control-sm" placeholder="Variant (RU)" value="{{ $option->text_ru ?? '' }}" required>
    </div>
    <div class="col-md-3">
        <input type="text" name="questions[{{$qIndex}}][options][{{$oIndex}}][text_en]" class="form-control form-control-sm" placeholder="Variant (EN)" value="{{ $option->text_en ?? '' }}" required>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-xs btn-danger remove-option"><i class="fas fa-minus"></i></button>
    </div>
</div>
