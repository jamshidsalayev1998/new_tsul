@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Role: {{ $role->name }}</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('roles.update', $role->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name">Role Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $role->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Permissions</label>
                                        <div class="row">
                                            @foreach($permissions as $permission)
                                                <div class="col-md-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" name="permissions[]"
                                                            id="permission_{{ $permission->id }}"
                                                            value="{{ $permission->name }}" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                                        <label for="permission_{{ $permission->id }}"
                                                            class="custom-control-label">{{ $permission->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection