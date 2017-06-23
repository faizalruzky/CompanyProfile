@extends('layouts.app')

@section('content')
  <div class="container">
  	<h1>Create Accident Report</h1>
  	<hr>
  	<ol class="breadcrumb">
  		<li><a href="{{ url('/home') }}">Home</a></li>
  		<li><a href="{{ url('jj/accident_reports') }}">Accident Reports</a></li>
  		<li>Create</li>
  	</ol>
  	@include('flash::message')
    {!! Form::open(['url' => 'accident_reports','role' => 'form', 'enctype'=>"multipart/form-data"]) !!}
      @include('accident_reports.form', ['submitText' => '<i class="fa fa-plus"></i> Create'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
@stop