@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header w-100">
                  <div  style="display: flex; justify-content: space-between ; width: 100%">
                      <div>
                        <h3 class="card-title">Rektorat</h3>
                    </div>
                      <div>
                        <a href="{{route('admin.rektorat.create')}}" class="btn btn-success" >+ yangi</a>
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
                              Full name
                          </th>
                          <th class="last-td"></th>
                          <th class="last-td"></th>
                          <th class="last-td"></th>

                      </tr>
                      </thead>
                      <tbody>
                      <?php $i = 0;?>
                      @foreach($data as $item)
                          <tr>
                              <td>{{++$i}}</td>
                              <td>{{$item->full_name_uz}}</td>
                              <td>
                                  <a class="btn btn-light" href="{{route('admin.rektorat.edit' , ['id' => $item->id])}}"><i class="fa fa-edit"></i></a>

                              </td>
                              <td class="last-td">
                                  <button type="button" class="btn btn-light form-delete" data-id="{{$item->id}}">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form action="{{route('admin.page.delete')}}" class="form-card-delete-{{$item->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <input type="text" hidden readonly value="{{$item->id}}" name="id">
                                  </form>
                              </td>
                              <td class="last-td">
                                  <div style="display: flex">
                                      <a class="btn btn-light" href="{{route('admin.rektorat.move_up' , ['id' => $item->id])}}">
                                          <i  class="fa fa-arrow-up" aria-hidden="true"></i>
                                      </a>
                                      <a class="btn btn-light" href="{{route('admin.rektorat.move_down' , ['id' => $item->id])}}">
                                          <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                      </a>
                                  </div>
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
    </script>
@endsection
