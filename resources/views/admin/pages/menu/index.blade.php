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
                        <h3 class="card-title">Menular</h3>
                    </div>
                      <div>
                        <button type="submit" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">+ yangi</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table class="table table-bordered">
                      <thead>
                      <tr>
                          <th class="last-td">
                              #
                          </th>
                          <th>
                              Name uz
                          </th>
                          <th>
                              Name ru
                          </th>
                          <th>
                              Name en
                          </th>
                          <th class="last-td">
                              Slug
                          </th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php $i = 0;?>
                      @foreach($system_cards as $card)
                          <tr>
                              <td>{{++$i}}</td>
                              <td>{{$card->name_uz}}</td>
                              <td>{{$card->name_ru}}</td>
                              <td>{{$card->name_en}}</td>
                              <td>{{$card->slug}}</td>

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
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content p-3">
            <form action="{{route('system_card.store')}}" method="post">
                @csrf
              <div class="row p-3" >
                  <div class="col-md-12">
                      <label for="">Nomi uz</label>
                      <input type="text" class="form-control" name="name_uz">
                  </div>
                  <div class="col-md-12">
                      <label for="">Nomi ru</label>
                      <input type="text" class="form-control" name="name_ru">
                  </div>
                  <div class="col-md-12">
                      <label for="">Nomi en</label>
                      <input type="text" class="form-control" name="name_en">
                  </div>
                  <div class="col-md-12">
                      <label for="">Link</label>
                      <input type="text" class="form-control" name="link">
                  </div>
                  <div class="col-md-12">
                      <label for="">Icon</label>
                      <input type="text" class="form-control" name="icon">
                  </div>
              </div>
                <div class="row" style="display: flex ; justify-content: flex-end">
                    <button class="btn btn-success">Saqlash</button>
                </div>
                </form>
        </div>
      </div>
    </div>
@endsection
@section('js')
    <script>
        $(function () {
            $('#summernote').summernote()
          });
        $(function () {
            $('#summernote1').summernote()
          });
        $(function () {
            $('#summernote2').summernote()
          });
    </script>
    <script>
        $('.form-delete').click(function(){
            var id = $(this).attr('data-id');
            if(confirm('O`chirishni tasdiqlaysizmi')){
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-'+id).submit();
            }
        })
    </script>
@endsection
