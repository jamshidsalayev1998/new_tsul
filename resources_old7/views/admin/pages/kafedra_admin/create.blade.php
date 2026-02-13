<div class="modal fade " id="kafedra_create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('kafedra_admin.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">F.I.O</label>
                        <input type="text" class="form-control" name="fio">
                    </div>
                    <div class="form-group">
                        <label for="">Kafedra</label>
                        <select class="form-control" name="kafedra_id">
                            @foreach($kafedra as $kf)
                                <option value="{{$kf->id}}">{{$kf->name_uz}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </div>
        </form>
    </div>
</div>
