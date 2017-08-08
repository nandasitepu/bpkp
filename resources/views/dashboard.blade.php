@extends('main')
@section('title')
  Dashboard
@endsection

@section('stylesheets')
<link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-body">
          <a href="/" data-target-id="social"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="hidden-xs">
            <div class="pull-right">
              <i class="fa fa-bell-o fa-fw"></i>&nbsp; Pengumuman &nbsp;<span class="label label-primary">Go</span> &nbsp;
              <i class="fa fa-comment-o fa-fw"></i>&nbsp; Komentar &nbsp;<span class="label label-success">Go</span> &nbsp;
              <i class="fa fa-envelope-o fa-fw"></i>&nbsp; Kontak &nbsp;<span class="label label-info">Go</span> &nbsp;
            </div>
            <i><span class="label label-info">Selamat Datang</span></i>

          </div>
          <div class="visible-xs">
            <div class="col-xs-12">
              <i class="text-center"><span class="label label-info">Selamat Datang</span></i>
              <br>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-bell-o fa-fw"></i>Message &nbsp;<span class="label label-primary">Go</span>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-comment-o fa-fw"></i>Comments &nbsp;<span class="label label-success">Go</span>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-envelope-o fa-fw"></i>Email &nbsp;<span class="label label-info">Go</span>
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
          <router-link to="/spa"      class="btn btn-default btn-xs btn-block cool" role="button" exact>
            A p p S &nbsp;<i class="fa fa-fw fa-newspaper-o"></i>
          </router-link>
          <hr>
          <div class="col-md-12 col-xs-6">
            <router-link to="/spa/spip"      class="btn btn-default btn-xs btn-block cool" role="button" exact>
              SPIP <i class="fa fa-fw fa-building-o"></i>
            </router-link>
            <br>
            <router-link to="/spa/apip"      class="btn btn-info btn-xs btn-block cool" role="button">
              APIP <i class="fa fa-fw fa-users "></i>
            </router-link>
            <br>
            <router-link to="/spa/fcp"       class="btn btn-danger btn-xs btn-block cool" role="button">
              Fraud CP <i class="fa fa-fw fa-crosshairs"></i>
            </router-link>
            <br>
          </div>
          <div class="col-md-12 col-xs-6">
            <router-link to="/spa/simda"class="btn btn-success btn-xs btn-block cool" role="button">
              SIMDA <i class="fa fa-fw fa-money"></i>
            </router-link>
            <br>
            <router-link to="/spa/sia"       class="btn btn-primary btn-xs btn-block cool" role="button">
              SIA <i class="fa fa-fw fa-database"></i>
            </router-link>
            <br>
            <router-link to="/spa/siskeudes"  class="btn btn-warning btn-xs btn-block cool" role="button">
              SISKEUDES <i class="fa fa-fw fa-home"></i>
            </router-link>
            <br>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-9" >
      <div class="panel panel-default" >
        <div class="panel-body" >
          <router-view></router-view>
        </div>
      </div>
    </div>
    <br>
  </div>
  <br>

@endsection
@section('bot_scripts')
 <script src="{{asset('js/myvue.js')}}"></script>
@endsection
