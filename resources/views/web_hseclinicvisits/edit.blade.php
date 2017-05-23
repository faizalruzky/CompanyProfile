@extends('layouts.app')

@section('content')
  <div class="container">
  	<h1>Edit Web_HSEClinicVisit</h1>
  	<hr>
  	<ol class="breadcrumb">
  		<li><a href="{{ url('/home') }}">Home</a></li>
  		<li><a href="{{ url('web_hseclinicvisits') }}">Web_HSEClinicVisits</a></li>
  		<li>Edit</li>
  	</ol>
  	@include('flash::message')
    {!! Form::model($web_hseclinicvisit, ['method' => 'PATCH', 'action' => ['Web_HSEClinicVisitsController@update', $web_hseclinicvisit->id]]) !!}
      @include('web_hseclinicvisits.form', ['submitText' => '<i class="fa fa-check"></i> Update'])
    {!! Form::close() !!}

    <!-- ================================================== -->
  </div>
@stop