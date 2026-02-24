@extends('admin.layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/feedbacks.css') }}">
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header w-100">
                                <div style="display: flex; justify-content: space-between; width: 100%">
                                    <div>
                                        <h3 class="card-title">Feedbacks</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                {{-- Feedback Statistics --}}
                                <div class="row mb-4">
                                    <div class="col-md-2">
                                        <div class="info-box bg-primary">
                                            <span class="info-box-icon"><i class="fas fa-plus"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Yangi</span>
                                                <span class="info-box-number">{{ $stats['new'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="info-box bg-success">
                                            <span class="info-box-icon"><i class="fas fa-eye"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Ko‘rilgan</span>
                                                <span class="info-box-number">{{ $stats['viewed'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="info-box bg-warning">
                                            <span class="info-box-icon"><i class="fas fa-spinner"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Jarayonda</span>
                                                <span class="info-box-number">{{ $stats['processing'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="info-box bg-info">
                                            <span class="info-box-icon"><i class="fas fa-check"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Hal qilingan</span>
                                                <span class="info-box-number">{{ $stats['resolved'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="info-box bg-secondary">
                                            <span class="info-box-icon"><i class="fas fa-archive"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Arxivlangan</span>
                                                <span class="info-box-number">{{ $stats['archived'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="info-box bg-dark">
                                            <span class="info-box-icon"><i class="fas fa-database"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Umumiy</span>
                                                <span class="info-box-number">{{ $stats['total'] }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Feedback Statistics --}}

                                {{-- Filter Form --}}
                                <form method="GET" action="{{ url()->current() }}" class="mb-4">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <input type="text" name="name" value="{{ request('name') }}"
                                                class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="email" value="{{ request('email') }}"
                                                class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-md-2">
                                            <select name="type" class="form-control">
                                                <option value="">Type</option>
                                                <option value="feedback"
                                                    {{ request('type') == 'feedback' ? 'selected' : '' }}>Feedback</option>
                                                <option value="complaint"
                                                    {{ request('type') == 'complaint' ? 'selected' : '' }}>Complaint
                                                </option>
                                                <option value="suggestion"
                                                    {{ request('type') == 'suggestion' ? 'selected' : '' }}>Suggestion
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="rating" class="form-control">
                                                <option value="">Rating</option>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <option value="{{ $i }}"
                                                        {{ request('rating') == $i ? 'selected' : '' }}>
                                                        {{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="status" class="form-control">
                                                <option value="">Status</option>
                                                <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>
                                                    Yangi</option>
                                                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>
                                                    Ko‘rilgan</option>
                                                <option value="2" {{ request('status') == '2' ? 'selected' : '' }}>
                                                    Jarayonda</option>
                                                <option value="3" {{ request('status') == '3' ? 'selected' : '' }}>Hal
                                                    qilingan</option>
                                                <option value="4" {{ request('status') == '4' ? 'selected' : '' }}>
                                                    Arxivga olingan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="text" name="message" value="{{ request('message') }}"
                                                class="form-control" placeholder="Message">
                                        </div>
                                        <div class="col-md-2 mt-2">
                                            <button type="submit" class="btn btn-primary w-100">Search</button>
                                        </div>
                                        <div class="col-md-2 mt-2">
                                            <a href="{{ url()->current() }}" class="btn btn-secondary w-100">Reset</a>
                                        </div>
                                    </div>
                                </form>

                                {{-- Table --}}
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Type</th>
                                            <th>Rating</th>
                                            <th>Status</th>
                                            <th>Message</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($feedbacks as $feedback)
                                            <tr>
                                                <td>{{ $feedback->id }}</td>
                                                <td>{{ $feedback->name }}</td>
                                                <td>{{ $feedback->email }}</td>
                                                <td>{{ ucfirst($feedback->type) }}</td>
                                                <td>{{ $feedback->rating }}</td>
                                                <td>
                                                    @php
                                                        $statuses = [
                                                            0 => ['text' => 'Yangi', 'class' => 'badge-new'],
                                                            1 => ['text' => 'Ko‘rilgan', 'class' => 'badge-viewed'],
                                                            2 => ['text' => 'Jarayonda', 'class' => 'badge-processing'],
                                                            3 => [
                                                                'text' => 'Hal qilingan',
                                                                'class' => 'badge-resolved',
                                                            ],
                                                            4 => [
                                                                'text' => 'Arxivga olingan',
                                                                'class' => 'badge-archived',
                                                            ],
                                                        ];
                                                    @endphp

                                                    @if (isset($statuses[$feedback->status]))
                                                        <span class="badge {{ $statuses[$feedback->status]['class'] }}">
                                                            {{ $statuses[$feedback->status]['text'] }}
                                                        </span>
                                                    @else
                                                        <span class="badge badge-secondary">-</span>
                                                    @endif
                                                </td>
                                                {{-- <td>{{ Str::limit($feedback->message, 50) }}</td> --}}
                                                <td>{{ $feedback->message }}</td>
                                                <td>{{ $feedback->created_at->format('d.m.Y H:i') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.feedbacks.show', $feedback->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        Show
                                                    </a>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center">No feedbacks found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                {{-- Pagination --}}
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $feedbacks->withQueryString()->links() }}
                                </div>

                            </div> <!-- /.card-body -->
                        </div> <!-- /.card -->
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </section> <!-- /.content -->
    </div> <!-- /.content-wrapper -->
@endsection

@section('js')
    {{-- Agar kerak bo'lsa, custom JS qo'shish uchun --}}
@endsection
