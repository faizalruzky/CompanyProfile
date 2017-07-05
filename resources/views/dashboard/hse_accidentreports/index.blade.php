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
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('web_accidentreports') }}">Web_AccidentReports</a></li>
    </ol>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="visible-lg-inline visible-md-inline">Web_AccidentReports</h3>
        <a href="{{ url('jj/accidentreports/create') }}" class="btn btn-primary pull-right">
          <i class="fa fa-plus"></i> Create Web_AccidentReport
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
          @foreach ($web_accidentreports as $web_accidentreport)
            <tr>
              <td><a href="{{ url("jj/accidentreports", $web_accidentreport->id) }}">{{ $web_accidentreport->title }}</a></td>
              
              <td>
                <a class="btn btn-info" href="{{ action('Dashboard\Web_AccidentReportsController@edit', $web_accidentreport->id) }}"><i class="fa fa-pencil"></i> Edit</a>
              </td>
              <td>
              {!! Form::open(['action' => ['Dashboard\Web_AccidentReportsController@destroy', $web_accidentreport->id], 'method' => 'DELETE']) !!}
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
              {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
          </table>
          {!! $web_accidentreports->links() !!}
        </div>
      </div>
    </div>
    <!-- ================================================== -->
  </div>
  <div class="content">
      <div class="container-fluid">

      </div>
    </div>


    <footer class="footer">
      @include('dashboard/shared.footer_nav')
    </footer>

  </div>
</div>
@stop