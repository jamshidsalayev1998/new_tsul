@extends('admin.layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Create Permission</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('permissions.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Permission Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection