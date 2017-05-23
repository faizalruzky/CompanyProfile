@extends('layouts.app')

@section('content')
  <div class="container">
  	<h1>Create Web_HSEClinicVisit</h1>
  	<hr>
  	<ol class="breadcrumb">
  		<li><a href="{{ url('/home') }}">Home</a></li>
  		<li><a href="{{ url('web_hseclinicvisits') }}">Web_HSEClinicVisits</a></li>
  		<li>Create</li>
  	</ol>
  	@include('flash::message')
    {!! Form::open(['url' => 'web_hseclinicvisits','role' => 'form', 'enctype'=>"multipart/form-data"]) !!}
      @include('web_hseclinicvisits.form', ['submitText' => '<i class="fa fa-plus"></i> Create'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
@stop