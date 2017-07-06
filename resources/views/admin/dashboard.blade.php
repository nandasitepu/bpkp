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
                <li>
                  <router-link to="/dashboard">
                    <i class="fa fa-home fa-fw"></i> &nbsp; Home
                  </router-link>
                </li>
                <li>
                  <router-link to="/dashboard/app">
                    <i class="fa fa-barcode fa-fw"></i> &nbsp; App
                  </router-link>
                </li>
                <li>
                  <router-link to="/dashboard/obrik">
                    <i class="fa fa-list fa-fw"></i> &nbsp; Obrik
                  </router-link>
                </li>
                <li>
                  <router-link to="/dashboard/posts">
                    <i class="fa fa-file-o fa-fw"></i> &nbsp; Posts
                  </router-link>
                </li>
                <li>
                  <router-link to="/dashboard/pages">
                    <i class="fa fa-calendar fa-fw"></i> &nbsp; Pages
                  </router-link>
                </li>
                <li>
                  <router-link  to="/dashboard/pegawai">
                    <i class="fa fa-users fa-fw"></i> &nbsp; Pegawai
                  </router-link>
                </li>
                <li>
                  <router-link to="/dashboard/tables">
                    <i class="fa fa-table fa-fw"></i> &nbsp; Tables
                  </router-link>
                </li>
                <li>
                  <router-link to="/dashboard/forms">
                    <i class="fa fa-tasks fa-fw"></i> &nbsp; Forms
                  </router-link>
                </li>
                <li>
                  <router-link to="/dashboard/pengumuman">
                    <i class="fa fa-check-square-o fa-fw"></i> &nbsp; Pengumuman
                  </router-link>
                </li>
                <li>
                  <router-link to="/dashboard/perpustakaan">
                    <i class="fa fa-book fa-fw"></i> &nbsp; Perpustakaan
                  </router-link>
                </li>

                <li>
                  <router-link to="/dashboard/pengaturan">
                    <i class="fa fa-cogs fa-fw"></i> &nbsp; Pengaturan
                  </router-link>
                </li>
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
  @section('bot_scripts')
   <script src="{{asset('js/myvue.js')}}"></script>
  @endsection
