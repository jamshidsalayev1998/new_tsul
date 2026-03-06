@extends('admin.layouts.master')

@push('styles')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

            <div class="row mb-4">
                <div class="col-md-12">
                    <h3>Rating Statistics</h3>
                    <p>Average Rating: <strong>{{ number_format($averageRating, 2) }}</strong> / 5</p>
                </div>
            </div>

            <div class="row">
                @foreach($ratings as $rating)
                    <div class="col-md-2">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">{{ $rating->rating }}★</span>
                            <div class="info-box-content">
                                <span class="info-box-text">{{ $rating->count }} ta</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <canvas id="ratingChart" height="100"></canvas>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    const ctx = document.getElementById('ratingChart').getContext('2d');
    const ratingChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($chartData['labels']) !!},
            datasets: [{
                label: 'Feedbacks by Rating',
                data: {!! json_encode($chartData['data']) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    stepSize: 1
                }
            }
        }
    });
</script>
@endpush
