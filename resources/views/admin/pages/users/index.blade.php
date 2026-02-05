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
                                        <h3 class="card-title">User Management</h3>
                                    </div>
                                    <div>
                                        <a href="{{route('users.create')}}" class="btn btn-success">+ New User</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered connect-datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th class="last-td">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @foreach($user->roles as $role)
                                                        <span class="badge badge-info">{{ $role->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>

                                                    <button class="btn btn-warning btn-sm reset-password"
                                                        data-id="{{$user->id}}" title="Parolni yangilash"><i
                                                            class="fa fa-key"></i></button>

                                                    <button class="btn btn-danger btn-sm form-delete" data-id="{{$user->id}}"><i
                                                            class="fa fa-trash"></i></button>

                                                    <form class="form-reset-password-{{$user->id}}"
                                                        action="{{route('users.reset_password', $user->id)}}" method="post"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>

                                                    <form class="form-card-delete-{{$user->id}}"
                                                        action="{{route('users.destroy', $user->id)}}" method="post"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
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
            if (confirm('Ishonchingiz komilmi? Bu foydalanuvchi o\'chiriladi.')) {
                $('.form-card-delete-' + id).submit();
            }
        })

        $('.reset-password').click(function () {
            var id = $(this).attr('data-id');
            if (confirm('Foydalanuvchi parolini yangilamoqchimisiz? Yangi tasodifiy parol generatsiya qilinadi.')) {
                $('.form-reset-password-' + id).submit();
            }
        })
    </script>
@endsection