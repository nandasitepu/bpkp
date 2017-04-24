@extends('main')
@section('title')
  Dashboard Home
@endsection

@section('stylesheets')
  <link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('scripts')

@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#" data-target-id="social"><i class="fa fa-th fa-fw"></i>&nbsp; Count</a>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="panel panel-default">
          <div class="panel-body">
            Notification
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">

          <button class="btn btn-default btn-block btn-xs" data-toggle="collapse" data-target="#sidemenu">
            <i class="fa fa-th" aria-hidden="true"></i>
          </button>
          <div class="panel panel-default collapse in" id="sidemenu">
            <ul class="nav" >
              <li><a href="/" data-target-id="home"><i class="fa fa-home fa-fw"></i> &nbsp; Home</a></li>
              <li><a href="#" data-target-id="applications"><i class="fa fa-barcode fa-fw"></i> &nbsp; App</a></li>
              <li><a href="#" data-target-id="widgets"><i class="fa fa-list fa-fw"></i> &nbsp; Obrik</a></li>
              <li><a href="#" data-target-id="calender"><i class="fa fa-calendar fa-fw"></i> &nbsp; Pages</a></li>
              <li><a href="#" data-target-id="pages"><i class="fa fa-file-o fa-fw"></i> &nbsp; Posts</a></li>
              <li><a href="#" data-target-id="charts"><i class="fa fa-users fa-fw"></i> &nbsp; Pegawai</a></li>
              <li><a href="#" data-target-id="table"><i class="fa fa-table fa-fw"></i> &nbsp; Tables</a></li>
              <li><a href="#" data-target-id="forms"><i class="fa fa-tasks fa-fw"></i> &nbsp; Forms</a></li>

              <li><a href="#" data-target-id="library"><i class="fa fa-book fa-fw"></i> &nbsp; Perpustakaan</a></li>

              <li><a href="#" data-target-id="settings"><i class="fa fa-cogs fa-fw"></i> &nbsp; Settings</a></li>
            </ul>
          </div>
      </div>
      <div class="col-md-9" >
        <div class="panel panel-default" >
          <div class="panel-body" >
            @component('_c.app-admin')@endcomponent  
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
