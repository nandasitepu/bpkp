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
  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-body">
          <a href="#" data-target-id="social"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="hidden-xs">
            <div class="pull-right">
              <i class="fa fa-bell-o fa-fw"></i>&nbsp; Pengumuman &nbsp;<span class="label label-primary"> 12</span> &nbsp;
              <i class="fa fa-comment-o fa-fw"></i>&nbsp; Komentar &nbsp;<span class="label label-success">22</span> &nbsp;
              <i class="fa fa-envelope-o fa-fw"></i>&nbsp; Kontak &nbsp;<span class="label label-info">32</span> &nbsp;
            </div>
            <i><span class="label label-info">Selamat Datang</span></i>

          </div>
          <div class="visible-xs">
            <div class="col-xs-12">
              <i class="text-center"><span class="label label-info">Selamat Datang</span></i>
              <br>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-bell-o fa-fw"></i>Message &nbsp;<span class="label label-primary"> 12</span>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-comment-o fa-fw"></i>Comments &nbsp;<span class="label label-success">22</span>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-envelope-o fa-fw"></i>Email &nbsp;<span class="label label-info">32</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <button class="btn btn-default btn-block btn-xs" data-toggle="collapse" data-target="#sidemenu">
        <i class="fa fa-th" aria-hidden="true"></i>
      </button>
      <div id="sidemenu" class="text-center">
        <div class="btn-group-vertical" role="group">
          <br>
          <div class="col-md-12 col-xs-6">
            <a href="#"       class="btn btn-primary btn-xs btn-block cool" role="button">
              SIMDA <i class="fa fa-fw fa-money"></i>
            </a>
            <br>
            <a href="#"       class="btn btn-primary btn-xs btn-block cool" role="button">
              SIA <i class="fa fa-fw fa-database"></i>
             </a>
            <br>
            <a href="#" class="btn btn-warning btn-xs btn-block cool" role="button">
              SISKEUDES <i class="fa fa-fw fa-home"></i>
             </a>
            <br>
          </div>
          <div class="col-md-12 col-xs-6">
            <a href="#"      class="btn btn-default btn-xs btn-block cool" role="button">
              SPIP <i class="fa fa-fw fa-building-o"></i>
             </a>
            <br>
            <a href="#"      class="btn btn-info btn-xs btn-block cool" role="button">
              APIP <i class="fa fa-fw fa-users "></i>
             </a>
            <br>
            <a href="#"       class="btn btn-danger btn-xs btn-block cool" role="button">
              Fraud CP <i class="fa fa-fw fa-crosshairs"></i>
             </a>
            <br>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9" >
      <div class="panel panel-default" >
        <div class="panel-body" >
          <i class="fa fa-caret-square-o-left fa-fw fa-lg"></i>&nbsp;<strong>Silahkan Pilih Menu </strong>
          <hr>

        </div>
      </div>
    </div>
    <br>
  </div>
@endsection
@section('bot_scripts')
 <script src="{{asset('js/myvue.js')}}"></script>
@endsection
