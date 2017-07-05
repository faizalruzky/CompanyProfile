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
  	<h1>Edit Web_AccidentReport</h1>
  	<hr>
  	<ol class="breadcrumb">
  		<li><a href="{{ url('/home') }}">Home</a></li>
  		<li><a href="{{ url('web_accidentreports') }}">Web_AccidentReports</a></li>
  		<li>Edit</li>
  	</ol>
  	@include('flash::message')
    {!! Form::model($web_accidentreport, ['method' => 'PATCH', 'action' => ['Dashboard\Web_AccidentReportsController@update', $web_accidentreport->id]]) !!}
      @include('dashboard/hse_accidentreports.form', ['submitText' => '<i class="fa fa-check"></i> Update'])
    {!! Form::close() !!}
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