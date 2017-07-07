@extends('main')
@section('title')
  Daftar Tugas 2017
@endsection

@section('stylesheets')

@endsection

@section('content')
  <div class="container" id="app">
    <div class="row">
      <div class="col-md-3">
        <button class="btn btn-default btn-block btn-xs" data-toggle="collapse" data-target="#sidemenu">
          <i class="fa fa-th" aria-hidden="true"></i>
        </button>
        <div class="well collapse in" id="sidemenu">
          <ul class="nav">
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
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="panel panel-default">
          <div class="panel-heading">
            @component('_c.search_xs')@endcomponent
          </div>
          <div class="panel-body">
            <!-- Menu Tugas -->
            <div class="pull-right">
              <router-link class="btn btn-primary btn-sm btn-outline" to="/tugas">Tugas</router-link>
              <router-link class="btn btn-primary btn-sm" to="/tugas/create">
                <i class="fa fa-plus-circle"></i>
              </router-link>
            </div>
            <hr>
            <!--  Dynamic Data -->
            <router-view></router-view>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('bot_scripts')
 <script src="{{asset('js/myvue.js')}}"></script>
@endsection
