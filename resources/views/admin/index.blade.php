@extends('layouts.admin')

@section('content')

<h1>Admin</h1>
<canvas id="myChart"></canvas>
<hr>
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.0-alpha/Chart.min.js" integrity="sha256-7l53+mu/oEO4J97EJMByaRPcmFaMmh+GFhHVE0x5rUE=" crossorigin="anonymous"></script>

<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['posts', 'categories', 'comments'],
        datasets: [{
            label: 'CMS data',
            data: [{{$postsCount}}, {{$categoriesCount}}, {{$commentsCount}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


@stop