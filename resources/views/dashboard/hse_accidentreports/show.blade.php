@extends('layouts/dashboard.appdashboard')

@section('content-hseaccident')
<div class="wrapper">
  <div class="sidebar" data-color="blue" data-image="../../../assets/dashboard/img/sidebar-5.jpg">

  <!--

  Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
  Tip 2: you can also add an image using data-image tag

  -->
  @include('dashboard/shared.side_nav')

  </div>
  <div class="main-panel">
    @include('dashboard/shared.top_nav')
    <div class="panel-body">
    <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('web_accidentreports') }}">Web_AccidentReports</a></li>
        <li>Show</li>
    </ol>
    <div class="panel panel-info">
    	<div class="panel-heading">
    		<h4>Web_AccidentReport Details</h4>
    	</div>
    	<div class="panel-body">
            @include('flash::message')
            <div class="row">
                <div class="col-xs-12">
                    <p><b>Title</b>: {{ $web_accidentreport->title }}</p>
            
                </div>
                <div class="col-xs-1">
                    <a class="btn btn-info" href="{{ action('Dashboard\Web_AccidentReportsController@edit', $web_accidentreport->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                </div>
                <div class="col-xs-2">
                    {!! Form::open(['action' => ['Dashboard\Web_AccidentReportsController@destroy', $web_accidentreport->id], 'method' => 'DELETE']) !!}
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
    	</div>
    </div>
</div>
<div class="content">
      <div class="container-fluid">

      </div>
    </div>


    <footer class="footer">
      @include('dashboard/shared.footer_nav')
    </footer>
    <!-- ================================================== -->
</div>
</div>
@stop