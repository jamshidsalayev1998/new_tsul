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
                                <div style="display: flex; justify-content: space-between ; width: 100%">
                                    <div>
                                        <h3 class="card-title">So'rovnomalar</h3>
                                    </div>
                                    <div>
                                        <a href="{{route('requestment.create')}}" class="btn btn-success">+ yangi</a>
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
                                            Nomi
                                        </th>
                                        <th class="last-td">

                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 0;?>
                                    @foreach($data as $item)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td>
                                                <a href="{{ route('requestment.show' , ['requestment' => $item->id]) }}"> {{$item->name_uz}}</a>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    @if($item->isActive)
                                                    <a class="d-inline-block btn btn-success"
                                                       href="{{route('simple.requestment.status' , $item->id)}}">active</a>
                                                    @else
                                                    <a class="d-inline-block btn btn-warning"
                                                       href="{{route('simple.requestment.status' , $item->id)}}">inactive</a>
                                                    @endif
                                                        <a class="d-inline-block btn btn-info"
                                                           href="{{route('simple.requestment.result' , $item->id)}}"><i class="fas fa-chart-pie"></i></a>
                                                    <a class="d-inline-block btn btn-light"
                                                       href="{{route('requestment.edit' , ['requestment' => $item->id])}}"><i
                                                            class="fa fa-edit"></i></a>
                                                    <button class="btn btn-danger form-delete"
                                                            data-id="{{$item->id}}"
                                                    ><i class="fa fa-trash"></i></button>
                                                </div>
                                                <form class="form-card-delete-{{$item->id}}"
                                                      id="{{$item->id}}formdelete"
                                                      action="{{route('requestment.destroy' , ['requestment' => $item->id])}}"
                                                      method="post">
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
@endsection
@section('js')
    <script>
        $('.form-delete').click(function () {
            var id = $(this).attr('data-id');
            if (confirm('O`chirishni tasdiqlaysizmi')) {
                // alert('.form-card-delete-'+id);
                $('.form-card-delete-' + id).submit();
            }
        })
    </script>
@endsection
