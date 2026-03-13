@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">So'rovnomalar</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('polls.create') }}" class="btn btn-primary">+ Yangi yaratish</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sarlavha (UZ)</th>
                                <th>Status</th>
                                <th>Yaratilgan sana</th>
                                <th style="width: 250px">Amallar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($polls as $poll)
                            <tr>
                                <td>{{ $poll->id }}</td>
                                <td>{{ $poll->title_uz }}</td>
                                <td>{!! $poll->status_label !!}</td>
                                <td>{{ $poll->created_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('polls.show', $poll->id) }}" class="btn btn-info" title="Statistika">
                                            <i class="fas fa-chart-bar"></i>
                                        </a>
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" title="Holatni o'zgartirish">
                                            <i class="fas fa-sync"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <form action="{{ route('polls.update', $poll->id) }}" method="POST">
                                                @csrf @method('PUT')
                                                <input type="hidden" name="status_only" value="1">
                                                <button type="submit" name="status" value="0" class="dropdown-item">Yangi</button>
                                                <button type="submit" name="status" value="1" class="dropdown-item">Aktiv</button>
                                                <button type="submit" name="status" value="2" class="dropdown-item">Arxiv</button>
                                            </form>
                                        </div>
                                        @if($poll->status == 0)
                                        <a href="{{ route('polls.edit', $poll->id) }}" class="btn btn-warning" title="Tahrirlash">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @endif
                                        <form action="{{ route('polls.destroy', $poll->id) }}" method="POST" onsubmit="return confirm('O\'chirmoqchimisiz?')" class="d-inline">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="O'chirish">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <button class="btn btn-default" onclick="copyToClipboard('{{ route('poll.show', $poll->slug) }}')" title="Linkni nusxalash">
                                            <i class="fas fa-link"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $polls->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
<script>
function copyToClipboard(text) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val(text).select();
    document.execCommand("copy");
    $temp.remove();
    alert("So'rovnoma linki nusxalandi!");
}
</script>
@endsection
