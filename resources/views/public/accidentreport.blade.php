@extends('layouts/public.app_nav')
@section('content-ceo')
<!-- Codrops top bar -->
<div class="codrops-top">
    <span class="right">
        <a href="{{url('/')}}">HOME</a>
        <a href="#">CONTACT US</a>
    </span>
    <div class="clr"></div>
</div><!--/ Codrops top bar -->
<div class="container">
@include('public/shared/nav')
  </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['products', 'Sales', 'Expenses','Profit'],
          @foreach($pastel as $pastels)
          ['{{ $pastels->name }}',{{ $pastels->total }} ,{{ $pastels->total }},{{ $pastels->total }} ],
          @endforeach
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

      }
    </script>
 
    <div id="columnchart_material" style="width: 900px; height: 500px"></div>




  
@endsection