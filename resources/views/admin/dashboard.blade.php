@extends('main')
@section('title')
  Admin Dashboard
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
        <div class="panel-body text-center">
          <router-link to="/admin/dashboard"  class="btn btn-primary btn-sm cool">
            <i class="fa fa-dashboard fa-fw"></i>&nbsp; Admin Dashboard
          </router-link>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="hidden-xs">
            <i class="fa fa-bell-o fa-fw"></i> &nbsp;Pesan &nbsp;<span class="label label-primary">Go</span> &nbsp;
            <i class="fa fa-comment-o fa-fw"></i> &nbsp;Komentar &nbsp;<span class="label label-success">Go</span> &nbsp;
            <i class="fa fa-envelope-o fa-fw"></i> &nbsp;Email &nbsp;<span class="label label-info">Go</span> &nbsp;
            <span class="pull-right">Selamat Datang Admin // <span class="label label-default"> {{Auth::user()->name}} </span></span>
          </div>
          <div class="visible-xs">
            <div class="col-xs-12">
              <span>Selamat Datang Admin //&nbsp;<span class="label label-default">{{Auth::user()->name}} </span></span>
              <br>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-bell-o fa-fw"></i> &nbsp;Pesan &nbsp;<span class="label label-primary">Go</span>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-comment-o fa-fw"></i> &nbsp;Komentar &nbsp;<span class="label label-success">Go</span>
            </div>
            <div class="col-xs-12">
              <i class="fa fa-envelope-o fa-fw"></i> &nbsp;Email &nbsp;<span class="label label-info">Go</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
        <button class="btn btn-default btn-block btn-xs" data-toggle="collapse" data-target="#sidemenu">
          <i class="fa fa-th" aria-hidden="true"></i>
        </button>
      <div id="sidemenu"> 
          <br>
           
          <div class="col-md-12 col-xs-6">
            <router-link to="#" class="btn btn-default btn-xs btn-block cool" role="button">
              <i class="fa fa-fw fa-home"></i>
            </router-link>
            <br>
            <router-link to="/admin/dashboard/obrik" class="btn btn-default btn-xs btn-block cool" role="button">
              Obrik &nbsp; <i class="fa fa-fw fa-search-plus"></i>
            </router-link>
            <br>
            <router-link to="/admin/dashboard/tugas" class="btn btn-default btn-xs btn-block cool" role="button">
              Tugas <i class="fa fa-fw fa-briefcase "></i>
            </router-link>
            <br>
           
          </div>
          <div class="col-md-12 col-xs-6">
           <router-link to="/admin/dashboard/berita" class="btn btn-default btn-xs btn-block cool" role="button">
              Berita <i class="fa fa-fw fa-newspaper-o"></i>
            </router-link>
            <br>
            <router-link to="/admin/dashboard/pengumuman" class="btn btn-default btn-xs btn-block cool" role="button">
              Pengumuman <i class="fa fa-fw fa-calendar-o"></i>
            </router-link>
            <br>
            <router-link to="/admin/dashboard/perpustakaan" class="btn btn-default btn-xs btn-block cool" role="button">
              Perpustakaan <i class="fa fa-fw fa-university"></i>
            </router-link>
            <br>
           
          </div>

       
        
      </div>  
    </div>
    <div class="col-md-1">
        <div class="btn-group-vertical" role="group">
        
        <div class="col-md-12 col-xs-6">
          <router-link to="" class="btn btn-default btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-building-o"></i>
          </router-link>
          <br>
          <router-link to="" class="btn btn-info btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-users "></i>
          </router-link>
          <br>
          <router-link to="" class="btn btn-danger btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-crosshairs"></i>
          </router-link>
          <br>
        </div>
        <div class="col-md-12 col-xs-6">
          <router-link to="" class="btn btn-success btn-xs btn-block cool" role="button">
              <i class="fa fa-fw fa-money"></i>
          </router-link>
          <br>
          <router-link to="" class="btn btn-primary btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-database"></i>
          </router-link>
          <br>
          <router-link to=""  class="btn btn-warning btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-home"></i>
          </router-link>
          <br>
        </div>

      </div>
    </div>
    <div class="col-md-8" >

      <div class="panel panel-default" >
        <div class="panel-body" >
          <router-view></router-view>
        </div>
      </div>
    </div>
    <div class="col-md-1">
        <div class="btn-group-vertical" role="group">
        
        <div class="col-md-12 col-xs-6">
          <router-link to="/admin/dashboard/obrik"      class="btn btn-default btn-xs btn-block cool" role="button" exact>
            <i class="fa fa-fw fa-building-o"></i>
          </router-link>
          <br>
          <router-link to="/admin/dashboard/tugas"      class="btn btn-info btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-users "></i>
          </router-link>
          <br>
          <router-link to="/admin/dashboard/berita"       class="btn btn-danger btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-crosshairs"></i>
          </router-link>
          <br>
        </div>
        <div class="col-md-12 col-xs-6">
          <router-link to="/spa/simda"class="btn btn-success btn-xs btn-block cool" role="button">
              <i class="fa fa-fw fa-money"></i>
          </router-link>
          <br>
          <router-link to="/spa/sia"       class="btn btn-primary btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-database"></i>
          </router-link>
          <br>
          <router-link to="/spa/siskeudes"  class="btn btn-warning btn-xs btn-block cool" role="button">
            <i class="fa fa-fw fa-home"></i>
          </router-link>
          <br>
        </div>

      </div>
    </div>
  </div>
@endsection
@section('bot_scripts')
  <script src="{{asset('js/myvue.js')}}"></script>
@endsection
