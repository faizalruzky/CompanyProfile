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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Product', 'mes'],
          @foreach($pastel as $pastels)
          ['{{ $pastels->name }}',{{ $pastels->total }}],
          @endforeach
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
 
    <div id="piechart" style="width: 100%; height: 500px;"></div>




  
@endsection