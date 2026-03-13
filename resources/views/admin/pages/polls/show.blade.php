@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Statistika: {{ $poll->title_uz }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('polls.export', $poll->id) }}" class="btn btn-success"><i class="fas fa-file-export"></i> Eksport (CSV)</a>
                    <a href="{{ route('polls.index') }}" class="btn btn-default">Orqaga</a>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @foreach($poll->questions as $question)
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title">{{ $loop->iteration }}. {{ $question->text_uz }} ({{ $question->type }})</h3>
                    </div>
                    <div class="card-body">
                        @if($question->type == 'text')
                            <p><strong>Barcha javoblar ({{ $question->responses->count() }}):</strong></p>
                            <ul>
                                @foreach($question->responses as $response)
                                    <li>{{ $response->text_answer }} <small class="text-muted">({{ $response->created_at->format('d.m.Y H:i') }})</small></li>
                                @endforeach
                            </ul>
                        @else
                            @php
                                $totalResponses = $question->responses->count();
                            @endphp
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>Variant</th>
                                                <th>Soni</th>
                                                <th>Foiz</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($question->options as $option)
                                                @php
                                                    $count = $question->responses->where('option_id', $option->id)->count();
                                                    $percent = $totalResponses > 0 ? round(($count / $totalResponses) * 100, 1) : 0;
                                                @endphp
                                                <tr>
                                                    <td>{{ $option->text_uz }}</td>
                                                    <td>{{ $count }}</td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar bg-primary" style="width: {{ $percent }}%"></div>
                                                        </div>
                                                        <small>{{ $percent }}%</small>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
