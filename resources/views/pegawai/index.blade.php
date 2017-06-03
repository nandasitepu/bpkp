@extends('spa')
@section('title')
  Pegawai
@endsection
@section('stylesheets')
  <link rel="stylesheet" href="/css/tugas.css" media="screen" title="no title">
@endsection
@section('content')
  <div id="app">
    <div class="container">
      <div class="col-md-10">
          <div class="text-center">
            <router-link class="btn btn-success btn-xs" to="/pegawai">Pegawai</router-link>
            <router-link class="btn btn-primary btn-xs" to="/penugasan">Penugasan</router-link>
            <router-link class="btn btn-warning btn-xs" to="/pengumuman">Pengumuman</router-link>
          </div>
          <hr>
          <!--  Dynamic Data -->
          <router-view></router-view>
        </div>
      <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-body text-center">
            <div class="btn-group btn-group-sm">
              <a class="btn btn-default btn-sm" href="#">
                <i class="fa fa-lg fa-cog text-primary"></i>&nbsp; Dashboard
              </a>
              <hr>
              <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
              </ul>
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
