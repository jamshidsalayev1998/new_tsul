@extends('admin.layouts.master')
@section('link')

@endsection
@section('content')
    <div class="content-wrapper">
        <div claas="container">
            <h2 class="text-center">{{ $requestment->name_uz }}</h2>
            @foreach($requestment->questions as $question)
                <div class="mx-auto my-4">
                    <canvas id="{{ 'pie-chart-'.$question->id }}"
                            data-id="{{ $question->id }}"
                            data-answers="{{ $question->answers }}"
                            style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>


        var cData = JSON.parse(`<?php echo $requestment->questions; ?>`);
        console.log(cData);

        for (var i = 0; i < cData.length; i++) {
            console.log("pie-chart-" + cData[i].id);
            // countries.map(country => country.name)
            var answers = cData[i].answers.map(answer => answer.body_ru);
            var answers_count = cData[i].answers.map(answer => answer.count)
            console.log(answers);
            new Chart(document.getElementById("pie-chart-" + cData[i].id), {
                type: 'pie',
                data: {
                    labels: answers,
                    datasets: [{
                        // label: "Population (millions)",
                        backgroundColor: ["#34568B", "#FF6F61", "#6B5B95", "#88B04B", "#F7CAC9", "#955251", "#B565A7", "#F5DF4D"],
                        // data: [2478,5267,734,784,433]
                        data: answers_count
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: cData[i].body_ru,
                        fontSize: 30
                    }
                }
            });
        }
    </script>
@endsection
