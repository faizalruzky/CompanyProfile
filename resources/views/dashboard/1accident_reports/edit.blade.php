@extends('layouts.app')

@section('content')
  <div class="container">
  	<h1>Edit Accident Reports</h1>
  	<hr>
  	<ol class="breadcrumb">
  		<li><a href="{{ url('/home') }}">Home</a></li>
  		<li><a href="{{ url('/jj/accident_reports') }}">Accident Reports</a></li>
  		<li>Edit</li>
  	</ol>
  	@include('flash::message')
    {!! Form::model($accident_report, ['method' => 'PATCH', 'action' => ['AccidentReportsController@update', $accident_report->id]]) !!}
      @include('accident_reports.form', ['submitText' => '<i class="fa fa-check"></i> Update'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
@stop