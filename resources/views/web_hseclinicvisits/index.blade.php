@extends('layouts.app')

@section('content')
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('web_hseclinicvisits') }}">Web_HSEClinicVisits</a></li>
    </ol>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="visible-lg-inline visible-md-inline">Web_HSEClinicVisits</h3>
        <a href="{{ url('web_hseclinicvisits/create') }}" class="btn btn-primary pull-right">
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
          @foreach ($web_hseclinicvisits as $web_hseclinicvisit)
            <tr>
              <td><a href="{{ url("web_hseclinicvisits", $web_hseclinicvisit->id) }}">{{ $web_hseclinicvisit->title }}</a></td>
              
              <td>
                <a class="btn btn-info" href="{{ action('Web_HSEClinicVisitsController@edit', $web_hseclinicvisit->id) }}"><i class="fa fa-pencil"></i> Edit</a>
              </td>
              <td>
              {!! Form::open(['action' => ['Web_HSEClinicVisitsController@destroy', $web_hseclinicvisit->id], 'method' => 'DELETE']) !!}
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
              {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
          </table>
          {!! $web_hseclinicvisits->links() !!}
        </div>
      </div>
    </div>
    <!-- ================================================== -->
  </div>
@stop