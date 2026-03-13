@extends('simple.layouts.master')

@section('title')
    Natijalar: {{ $poll->{'title_' . app()->getLocale()} }}
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/general_page_content.css')}}">
    <style>
        .result-item { margin-bottom: 25px; }
        .progress { height: 25px; border-radius: 12.5px; }
        .progress-bar { font-weight: bold; line-height: 25px; }
    </style>
@endsection

@section('content')
    <div class="general">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mt-3">
                    <div class="general_content shadow-sm p-4 bg-white rounded">
                        <h2 class="text-primary mb-4">So'rovnoma natijalari: {{ $poll->{'title_' . app()->getLocale()} }}</h2>
                        
                        @foreach($poll->questions as $question)
                            <div class="card mb-4 border-0 shadow-sm">
                                <div class="card-body">
                                    <h4 class="mb-3 text-dark">{{ $loop->iteration }}. {{ $question->{'text_' . app()->getLocale()} }}</h4>
                                    
                                    @if($question->type == 'text')
                                        <p class="text-muted small">Ushbu savolga yozma javoblar qoldirilgan.</p>
                                    @else
                                        @php
                                            $totalResponses = $question->responses->count();
                                        @endphp
                                        
                                        @foreach($question->options as $option)
                                            @php
                                                $count = $question->responses->where('option_id', $option->id)->count();
                                                $percent = $totalResponses > 0 ? round(($count / $totalResponses) * 100, 1) : 0;
                                            @endphp
                                            <div class="result-item">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>{{ $option->{'text_' . app()->getLocale()} }}</span>
                                                    <span><strong>{{ $count }} ta</strong> ({{ $percent }}%)</span>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: {{ $percent }}%" aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100">
                                                        {{ $percent }}%
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <p class="text-right text-muted small mt-2">Jami ovozlar: {{ $totalResponses }}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        
                        <div class="text-center mt-4">
                            <a href="{{ url('/') }}" class="btn btn-primary">Bosh sahifaga qaytish</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
