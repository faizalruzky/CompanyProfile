@extends('layouts.app')

@section('content')
  <div class="container">
  	<h1>Edit Web_AccidentReport</h1>
  	<hr>
  	<ol class="breadcrumb">
  		<li><a href="{{ url('/home') }}">Home</a></li>
  		<li><a href="{{ url('web_accidentreports') }}">Web_AccidentReports</a></li>
  		<li>Edit</li>
  	</ol>
  	@include('flash::message')
    {!! Form::model($web_accidentreport, ['method' => 'PATCH', 'action' => ['Web_AccidentReportsController@update', $web_accidentreport->id]]) !!}
      @include('web_accidentreports.form', ['submitText' => '<i class="fa fa-check"></i> Update'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
@stop