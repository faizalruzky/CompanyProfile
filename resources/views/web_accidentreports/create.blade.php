@extends('layouts.app')

@section('content')
  <div class="container">
  	<h1>Create Web_AccidentReport</h1>
  	<hr>
  	<ol class="breadcrumb">
  		<li><a href="{{ url('/home') }}">Home</a></li>
  		<li><a href="{{ url('web_accidentreports') }}">Web_AccidentReports</a></li>
  		<li>Create</li>
  	</ol>
  	@include('flash::message')
    {!! Form::open(['url' => 'web_accidentreports','role' => 'form', 'enctype'=>"multipart/form-data"]) !!}
      @include('web_accidentreports.form', ['submitText' => '<i class="fa fa-plus"></i> Create'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
@stop