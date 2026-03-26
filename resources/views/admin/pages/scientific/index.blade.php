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
                                        <h3 class="card-title">Ilmiy tadbirlar va konferensiyalar</h3>
                                    </div>
                                    <div>
                                        <a href="{{route('scientific.create')}}" class="btn btn-success">+ Yangi tadbir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered connect-datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title (UZ)</th>
                                            <th>Event Date</th>
                                            <th>Location</th>
                                            <th class="last-td">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->title_uz }}</td>
                                                <td>{{ $item->event_date }}</td>
                                                <td>{{ $item->location_uz }}</td>
                                                <td>
                                                    <a href="{{ route('scientific.edit', $item->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                    <button class="btn btn-danger btn-sm form-delete" data-id="{{$item->id}}"><i
                                                            class="fa fa-trash"></i></button>
                                                    <form class="form-card-delete-{{$item->id}}"
                                                        action="{{route('scientific.destroy', $item->id)}}" method="post"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $data->links() }}
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
            if (confirm('Are you sure?')) {
                $('.form-card-delete-' + id).submit();
            }
        })
    </script>
@endsection