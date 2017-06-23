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
          ['Month', 'Serious Accident', 'Accident','Incident'],
          @foreach($pastel as $pastels)
          ['January',{{ $pastels->ajanuary }} ,{{ $pastels->bjanuary }},{{ $pastels->cjanuary }} ],
          ['February',{{ $pastels->afebruary }} ,{{ $pastels->bfebruary }},{{ $pastels->cfebruary }} ],
          ['March',{{ $pastels->amarch }} ,{{ $pastels->bmarch }},{{ $pastels->cmarch }} ],
          ['April',{{ $pastels->aapril }} ,{{ $pastels->bapril }},{{ $pastels->capril }} ],
          ['May',{{ $pastels->amay }} ,{{ $pastels->bmay }},{{ $pastels->cmay }} ],
          ['June',{{ $pastels->ajune }} ,{{ $pastels->bjune }},{{ $pastels->cjune }} ],
          ['July',{{ $pastels->ajuly }} ,{{ $pastels->bjuly }},{{ $pastels->cjuly }} ],
          ['August',{{ $pastels->aaugust }} ,{{ $pastels->baugust }},{{ $pastels->caugust }} ],
          ['September',{{ $pastels->aseptember }} ,{{ $pastels->bseptember }},{{ $pastels->cseptember }} ],
          ['October',{{ $pastels->aoctober }} ,{{ $pastels->boctober }},{{ $pastels->coctober }} ],
          ['November',{{ $pastels->anovember }} ,{{ $pastels->bnovember }},{{ $pastels->cnovember }} ],
          ['December',{{ $pastels->adecember }} ,{{ $pastels->bdecember }},{{ $pastels->cdecember }} ],
          @endforeach
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

      }
    </script>
 
    <div id="columnchart_material" style="width: 100%; height: 500px"></div>




  
@endsection