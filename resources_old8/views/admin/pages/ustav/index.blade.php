@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header w-100">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Ustav</h3>
                    </div>
                      <div>
                        <button type="button" href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-lg" >+ yangi</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table class="table ">
                      <thead>
                      <tr>
                          <th class="last-td">#</th>
                          <th>name uz</th>
                          <th>name ru</th>
                          <th>name en</th>
                          <th class="last-td"></th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $i = 1; ?>
                      @foreach($data as $item)
                          <tr>
                              <td>{{$i++}}</td>
                              <td><a href="/{{$item->file_uz}}">{{$item->name_uz}} <i class="fa fa-download"></i></a></td>
                              <td><a href="/{{$item->file_ru}}">{{$item->name_ru}} <i class="fa fa-download"></i></a></td>
                              <td><a href="/{{$item->file_en}}">{{$item->name_en}} <i class="fa fa-download"></i></a></td>
                              <td>
                                  <button class="btn btn-danger form-delete" data-id="{{$item->id}}" type="button"><i class="fa fa-trash"></i></button>
                                  <form class="form-card-delete-{{$item->id}}" action="{{route('admin_ustav.destroy' , ['admin_ustav' => $item->id])}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
     <div class="modal fade" id="modal-lg">
         <form action="{{route('admin_ustav.store')}}" method="post" enctype="multipart/form-data">
             @csrf
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">File updload</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                          <label for="">File uz</label>
                          <input type="file" class="form-control" name="file_uz">
                      </div>
                        <div class="form-group">
                          <label for="">File ru</label>
                          <input type="file" class="form-control" name="file_ru">
                      </div>
                        <div class="form-group">
                          <label for="">File en</label>
                          <input type="file" class="form-control" name="file_en">
                      </div>
                        <div class="form-group">
                          <label for="">name uz</label>
                          <input type="text" class="form-control" name="name_uz">
                      </div>
                         <div class="form-group">
                          <label for="">name ru</label>
                          <input type="text" class="form-control" name="name_ru">
                      </div>
                         <div class="form-group">
                          <label for="">name en</label>
                          <input type="text" class="form-control" name="name_en">
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
        <!-- /.modal-dialog -->
           </form>
      </div>
@endsection
@section('js')
    <script>
        $('.form-delete').click(function(){
            var id = $(this).attr('data-id');
            if(confirm('O`chirishni tasdiqlaysizmi')){
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-'+id).submit();
            }
        })
         function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview1').attr('src' , e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function() {
            readURL1(this);
        });
        $('.select-image1').click(function(){
            $("#imageUpload1").click();
        });
    </script>
    <script>
        function copyToClipboard(element) {
          var $temp = $("<input>");
          $("body").append($temp);
          // $temp.val($(element).html()).select();
          $temp.val($(element+' img').attr('src')).select();
          document.execCommand("copy");
          $temp.remove();
        }
    </script>
@endsection
