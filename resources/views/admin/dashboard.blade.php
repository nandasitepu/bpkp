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
    <div id="app">
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
              <div class="hidden-xs">
                <i class="fa fa-bell-o fa-fw"></i>Message &nbsp;<span class="label label-primary"> 12</span>
                <i class="fa fa-comment-o fa-fw"></i>Comments &nbsp;<span class="label label-success">22</span>
                <i class="fa fa-envelope-o fa-fw"></i>Email &nbsp;<span class="label label-info">32</span>
                <span class="pull-right">Selamat Datang, <span class="label label-info"> {{Auth::user()->name}} </span></span>
              </div>
              <div class="visible-xs">
                <div class="col-xs-12">
                  <span>Selamat Datang, <span class="label label-info"> {{Auth::user()->name}} </span></span>
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
            <div class="panel panel-default collapse in" id="sidemenu">
              <ul class="nav" >
                <li><a href="/" data-target-id="home"><i class="fa fa-home fa-fw"></i> &nbsp; Home</a></li>
                <li><a href="{{route('dashboard')}}" data-target-id="applications"><i class="fa fa-barcode fa-fw"></i> &nbsp; App</a></li>
                <li><a href="/obrik" data-target-id="widgets"><i class="fa fa-list fa-fw"></i> &nbsp; Obrik</a></li>
                <li><a href="/posts" data-target-id="pages"><i class="fa fa-file-o fa-fw"></i> &nbsp; Posts</a></li>
                <li><a href="/pages" data-target-id="calender"><i class="fa fa-calendar fa-fw"></i> &nbsp; Pages</a></li>
                <li>
                  <router-link  to="/dashboard/pegawai">
                    <i class="fa fa-users fa-fw"></i> &nbsp; Pegawai
                  </router-link>
                </li>
                <li><a href="#" data-target-id="table"><i class="fa fa-table fa-fw"></i> &nbsp; Tables</a></li>
                <li><a href="#" data-target-id="forms"><i class="fa fa-tasks fa-fw"></i> &nbsp; Forms</a></li>
                <li>
                  <router-link to="/dashboard/pengumuman"><i class="fa fa-check-square-o fa-fw"></i> &nbsp; Pengumuman</router-link>
                </li>
                <li><a href="#" data-target-id="library"><i class="fa fa-book fa-fw"></i> &nbsp; Perpustakaan</a></li>

                <li><a href="#" data-target-id="settings"><i class="fa fa-cogs fa-fw"></i> &nbsp; Settings</a></li>
              </ul>
            </div>
        </div>

        <div class="col-md-9" >

          <div class="panel panel-default" >
            <div class="panel-body" >
              <hr>
              <router-view></router-view>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  @endsection
