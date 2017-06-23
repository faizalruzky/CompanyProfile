@extends('layouts.app')

@section('content')
  <div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li><a href="{{ url('/jj/accident_reports') }}">Accident Report</a></li>
        <li>Show</li>
    </ol>
    <div class="panel panel-info">
    	<div class="panel-heading">
    		<h4>Accident Report Details</h4>
    	</div>
    	<div class="panel-body">
            @include('flash::message')
            <div class="row">
                <div class="col-xs-12">
                    <p><b>Title</b>: {{ $accident_report->title }}</p>
            <p><b>Description</b>: {{ $accident_report->description }}</p>
            
                </div>
                <div class="col-xs-1">
                    <a class="btn btn-info" href="{{ action('AccidentReportsController@edit', $accident_report->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                </div>
                <div class="col-xs-2">
                    {!! Form::open(['action' => ['AccidentReportsController@destroy', $accident_report->id], 'method' => 'DELETE']) !!}
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
    	</div>
    </div>
    <!-- ================================================== -->

@stop