<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <form action="{{route('category.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yangi kategoriya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Nomi uz</label>
                                <input type="text" class="form-control" name="name_uz">
                            </div>
                            <div class="form-group">
                                <label for="">Nomi ru</label>
                                <input type="text" class="form-control" name="name_ru">
                            </div>
                            <div class="form-group">
                                <label for="">Nomi en</label>
                                <input type="text" class="form-control" name="name_en">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
                    <button type="submit" class="btn btn-success">Saqlash</button>
                </div>
            </div>
        </div>
    </form>

</div>

