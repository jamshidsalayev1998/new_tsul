@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin/feedbacks_show.css') }}">
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Feedback Batafsil</h3>
                </div>
                <div class="card-body">
                    <p><strong>Ism:</strong> {{ $feedback->name }}</p>
                    <p><strong>Email:</strong> {{ $feedback->email }}</p>
                    <p><strong>Reyting:</strong> {{ $feedback->rating }}</p>
                    <p><strong>Turi:</strong> {{ $feedback->type }}</p>
                    <p><strong>Status:</strong>
                        <span class="badge
                            @switch($feedback->status)
                                @case(0) badge-new @break
                                @case(1) badge-viewed @break
                                @case(2) badge-processing @break
                                @case(3) badge-resolved @break
                                @case(4) badge-archived @break
                            @endswitch
                        ">
                            {{ $statuses[$feedback->status] }}
                        </span>
                    </p>

                    <p><strong>Xabar:</strong></p>
                    <div class="border rounded p-3" style="background: #f9f9f9;">
                        {!! nl2br(e($feedback->message)) !!}
                    </div>

                    <form action="{{ route('admin.feedbacks.updateStatus', $feedback->id) }}" method="POST" class="mt-4">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="status">Statusni o‘zgartirish</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- Status tanlang --</option>
                                @foreach($statuses as $key => $value)
                                    @if($key > 1)
                                        <option value="{{ $key }}" {{ $feedback->status == $key ? 'selected' : '' }}>
                                            {{ $value }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Saqlash</button>
                        <a href="{{ route('admin.feedbacks.index') }}" class="btn btn-secondary">Orqaga</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
