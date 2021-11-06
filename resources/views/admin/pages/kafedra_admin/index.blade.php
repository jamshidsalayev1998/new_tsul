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
                        <h3 class="card-title">Kafedra adminlari</h3>
                    </div>
                      <div>
                        <button class="btn btn-success"  data-toggle="modal" data-target="#kafedra_create">+ yangi</button>
                    </div>

                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table class="table table-bordered connect-datatable">
                      <thead>
                      <tr>
                          <th class="last-td">
                              #
                          </th>
                          <th>
                              F.I.O
                          </th>
                          <th>Kafedra</th>
                          <th class="last-td">Login</th>
                          <th class="last-td">Parol</th>

                      </tr>
                      </thead>
                      <tbody>
                      <?php $i = 0;?>
                      @foreach($data as $item)
                          <tr>
                              <td>{{++$i}}</td>
                              <td>{{$item->fio}}</td>
                              <td>{{$item->kafedra->name_uz}}</td>
                              <td>
                                 {{$item->user->username}}
                              </td>
                              <td>
                                  {{$item->pass}}
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
    @include('admin.pages.kafedra_admin.create')
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
