@extends('layouts/public.app_nav')
@section('content-ceo')
@section('pageTitle','Accident Report - ChanShin Indonesia')
@include('public/shared/topbar')
<div class="container">
@include('public/shared/nav')
</div>
<style type="text/css">
  .charts {
    width: 80%;
    height: 35%;
    border: 1px solid grey;
    overflow: hidden;
    margin: auto;
    margin-top: 50px;
    padding: 25px 25px 25px 25px;
    background: white;
    box-shadow: 10px 10px 5px #888888;
}
@media only screen and (max-width: 460px) {
    .charts {
        width: 80%;
        height: 100%;
    }
.columnChartDiv {
    float: center;
    width: 50%;
    height: 100%;
}
}

</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      var timeout;



      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Serious Accident', 'Accident','Incident'],
          @foreach($pastel as $pastels)
          ['January',{{ $pastels->january_sa }} ,{{ $pastels->january_a }},{{ $pastels->january_i }} ],
          ['February',{{ $pastels->february_sa }} ,{{ $pastels->february_a }},{{ $pastels->february_i }} ],
          ['March',{{ $pastels->march_sa }} ,{{ $pastels->march_a }},{{ $pastels->march_i }} ],
          ['April',{{ $pastels->april_sa }} ,{{ $pastels->april_a }},{{ $pastels->april_i }} ],
          ['May',{{ $pastels->may_sa }} ,{{ $pastels->may_a }},{{ $pastels->may_i }} ],
          ['June',{{ $pastels->june_sa }} ,{{ $pastels->june_a }},{{ $pastels->june_i }} ],
          ['July',{{ $pastels->july_sa }} ,{{ $pastels->july_a }},{{ $pastels->july_i }} ],
          ['August',{{ $pastels->august_sa }} ,{{ $pastels->august_a }},{{ $pastels->august_i }} ],
          ['September',{{ $pastels->september_sa }} ,{{ $pastels->september_a }},{{ $pastels->september_i }} ],
          ['October',{{ $pastels->october_sa }} ,{{ $pastels->october_a }},{{ $pastels->october_i }} ],
          ['November',{{ $pastels->november_sa }} ,{{ $pastels->november_a }},{{ $pastels->november_i }} ],
          ['December',{{ $pastels->december_sa }} ,{{ $pastels->december_a }},{{ $pastels->december_i }} ],
          
          @endforeach
        ]);

        var options = {
           @foreach($pastel as $pastels)
          title: '{{ $pastels->title }}'
          @endforeach
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
       //google.visualization.events.addOneTimeListener(chart, 'ready', selectHandler);
        chart.draw(data, google.charts.Bar.convertOptions(options));
        $(window).resize(function() {
clearTimeout(timeout);
timeout = setTimeout(drawChart, 500);
});
      }

    </script>
<div class="charts">
  <div class="columnChartDiv">
    <div id="columnchart_material" style="height:100% width:100%" ></div>
  </div>
  </div>

@endsection