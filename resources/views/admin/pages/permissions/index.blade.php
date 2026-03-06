@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header w-100">
                                <div style="display: flex; justify-content: space-between ; width: 100%">
                                    <div>
                                        <h3 class="card-title">Permissions</h3>
                                    </div>
                                    <div>
                                        <a href="{{route('permissions.create')}}" class="btn btn-success">+ New
                                            Permission</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered connect-datatable">
                                    <thead>
                                        <tr>
                                            <th class="last-td">#</th>
                                            <th>Name</th>
                                            <th class="last-td">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($permissions as $permission)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $permission->name }}</td>
                                                <td>
                                                    <a href="{{ route('permissions.edit', $permission->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                    <button class="btn btn-danger btn-sm form-delete"
                                                        data-id="{{$permission->id}}"><i class="fa fa-trash"></i></button>
                                                    <form class="form-card-delete-{{$permission->id}}"
                                                        action="{{route('permissions.destroy', $permission->id)}}"
                                                        method="post" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script>
        $('.form-delete').click(function () {
            var id = $(this).attr('data-id');
            if (confirm('Are you sure you want to delete this permission?')) {
                $('.form-card-delete-' + id).submit();
            }
        })
    </script>
@endsection