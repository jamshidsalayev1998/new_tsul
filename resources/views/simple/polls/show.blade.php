@extends('simple.layouts.master')

@section('title')
    {{ $poll->{'title_' . app()->getLocale()} }}
@endsection

@section('links')
    <link rel="stylesheet" href="{{asset('front_assets/css/general_page_content.css')}}">
    <style>
        .poll-question { margin-bottom: 30px; padding: 20px; border: 1px solid #eee; border-radius: 8px; background: #f9f9f9; }
        .poll-option { margin-bottom: 10px; cursor: pointer; display: block; padding: 10px; border: 1px solid #ddd; border-radius: 5px; transition: all 0.2s; }
        .poll-option:hover { background: #eef; border-color: #508AD0; }
        .poll-option input { margin-right: 10px; }
        .already-voted { display: none; text-align: center; padding: 50px; }
    </style>
@endsection

@section('content')
    <div class="general">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mt-3">
                    <div class="general_content shadow-sm p-4 bg-white rounded">
                        <div id="poll-container">
                            <h2 class="text-primary mb-4">{{ $poll->{'title_' . app()->getLocale()} }}</h2>
                            
                            <form id="poll-form">
                                @csrf
                                @foreach($poll->questions as $question)
                                    <div class="poll-question">
                                        <h4 class="mb-3">{{ $loop->iteration }}. {{ $question->{'text_' . app()->getLocale()} }}</h4>
                                        
                                        @if($question->type == 'single')
                                            @foreach($question->options as $option)
                                                <label class="poll-option">
                                                    <input type="radio" name="responses[{{ $question->id }}]" value="{{ $option->id }}" required>
                                                    {{ $option->{'text_' . app()->getLocale()} }}
                                                </label>
                                            @endforeach
                                        @elseif($question->type == 'multi')
                                            @foreach($question->options as $option)
                                                <label class="poll-option">
                                                    <input type="checkbox" name="responses[{{ $question->id }}][]" value="{{ $option->id }}">
                                                    {{ $option->{'text_' . app()->getLocale()} }}
                                                </label>
                                            @endforeach
                                        @elseif($question->type == 'text')
                                            <textarea name="responses[{{ $question->id }}]" class="form-control" rows="3" placeholder="Javobingizni yozing..." required></textarea>
                                        @endif
                                    </div>
                                @endforeach
                                
                                <button type="submit" class="btn btn-primary btn-lg px-5" id="submit-vote">Yuborish</button>
                            </form>
                        </div>
                        
                        <div id="voted-message" class="already-voted">
                            <i class="fas fa-check-circle text-success fa-5x mb-4"></i>
                            <h3>Rahmat! Siz ushbu so'rovnomada qatnashib bo'ldingiz.</h3>
                            @if($poll->show_results)
                                <a href="{{ route('poll.results', $poll->slug) }}" class="btn btn-outline-primary mt-3">Natijalarni ko'rish</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        const pollSlug = "{{ $poll->slug }}";
        const storageKey = `voted_poll_${pollSlug}`;

        $(document).ready(function() {
            // Check if already voted
            if (localStorage.getItem(storageKey)) {
                $('#poll-container').hide();
                $('#voted-message').show();
            }

            $('#poll-form').on('submit', function(e) {
                e.preventDefault();
                $('#submit-vote').attr('disabled', true).text('Yuborilmoqda...');

                $.ajax({
                    url: "{{ route('poll.vote', $poll->slug) }}",
                    method: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            localStorage.setItem(storageKey, 'true');
                            $('#poll-container').fadeOut(function() {
                                $('#voted-message').fadeIn();
                            });
                        }
                    },
                    error: function() {
                        alert("Xatolik yuz berdi. Iltimos qaytadan urinib ko'ring.");
                        $('#submit-vote').attr('disabled', false).text('Yuborish');
                    }
                });
            });
        });
    </script>
@endsection
