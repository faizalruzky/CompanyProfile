@extends('layouts.app')

@section('content')
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('/jj/accident_reports') }}">Accident Reports</a></li>
    </ol>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="visible-lg-inline visible-md-inline">Web_HSEClinicVisits</h3>
        <a href="{{ url('/jj/web_hseclinicvisits/create') }}" class="btn btn-primary pull-right">
          <i class="fa fa-plus"></i> Create Web_HSEClinicVisit
        </a>
      </div>
      <div class="panel-body">
        @include('flash::message')
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>Title</th>
            
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach ($accident_report as $accident_report)
            <tr>
              <td><a href="{{ url("jj/accident_reports", $accident_report->id) }}">{{ $accident_report->title }}</a></td>
              
              <td>
                <a class="btn btn-info" href="{{ action('AccidentReportsController@edit', $accident_report->id) }}"><i class="fa fa-pencil"></i> Edit</a>
              </td>
              <td>
              {!! Form::open(['action' => ['AccidentReportsController@destroy', $accident_report->id], 'method' => 'DELETE']) !!}
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
              {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
          </table>
          {!! $accident_reports->links() !!}
        </div>
      </div>
    </div>
    <!-- ================================================== -->
  </div>
@stop