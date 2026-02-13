@extends('admin.layouts.master')
@section('content')
    <?php ini_set('max_execution_time' , 300); ?>
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
                        <h3 class="card-title">Pages</h3>
                    </div>
                      <div>
                        <a href="{{route('admin_young_scientist_new.create')}}" class="btn btn-success" >+ yangi</a>
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
                              Title
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
                              <td>
                                  {{$item->title_uz}}

                              </td>
                              <td>
                                  <button class="show_new_button btn btn-light" data-id="{{$item->id}}" ><i class="fa @if($item->status) fa-eye @else fa-eye-slash @endif" id="i{{$item->id}}"></i></button>
                              </td>
                              <td>
                                  <a href="{{route('admin_young_scientist_new.edit' , ['admin_young_scientist_new' => $item->id])}}" class="btn btn-light " ><i  class="fa fa-edit"></i></a>

                              </td>
                              <td class="last-td">
                                  <button type="button" class="btn btn-light form-delete" data-id="{{$item->id}}">
                                      <i class="fa fa-trash"></i>
                                  </button>
                                  <form action="{{route('admin_young_scientist_new.destroy' , ['admin_young_scientist_new' => $item->id])}}" class="form-card-delete-{{$item->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <input type="text" hidden readonly value="{{$item->id}}" name="id">
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
        $('.show_new_button').click(function(){
            var id = $(this).attr('data-id');
            // alert(id);
            var url = '/admin/admin_young_scientist_new-change-status/'+id;
            $.ajax({
                url: url,
                method: 'GET',
                success:function (result) {
                    // alert(result);
                    if(result == '1'){
                        $('#i'+id).removeAttr('class');
                        $('#i'+id).attr('class' , 'fa fa-eye')
                    }
                    else{
                        $('#i'+id).removeAttr('class');
                        $('#i'+id).attr('class' , 'fa fa-eye-slash')
                    }
                }
            })

        })
    </script>
@endsection
