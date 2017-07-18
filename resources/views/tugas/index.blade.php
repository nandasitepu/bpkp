@extends('main')
@section('title')
  Daftar Tugas 2017
@endsection

@section('stylesheets')

@endsection

@section('content')
  <div class="container" id="app">
    <div class="row">
      <div class="col-md-1 hidden-xs">
        <button class="btn btn-default btn-block btn-xs" data-toggle="collapse" data-target="#sidemenu">
          <i class="fa fa-th" aria-hidden="true"></i>
        </button>
        <div class="collapse in" id="sidemenu">
          <ul class="nav text-center">
            <li>
              <router-link to="/tugas">
                <div class="btn btn-success">
                  <i class="fa fa-briefcase fa-fw"></i>
                </div>
              </router-link>

            </li>
            <li>
              <router-link to="/posts">
                <div class="btn btn-primary">
                  <i class="fa fa-barcode fa-fw"></i>
                </div>
              </router-link>
            </li>
            <li>
              <router-link to="/obrik">
                <div class="btn btn-info">
                  <i class="fa fa-building-o fa-fw"></i>
                </div>
              </router-link>
            </li>
            <li>
              <router-link to="/posts">
                <i class="fa fa- fa-fw"></i>
              </router-link>
            </li>
            <li>
              <router-link to="/pengumuman">
                <i class="fa fa-calendar fa-fw"></i>
              </router-link>
            </li>
            <li>
              <router-link  to="/pegawai">
                <i class="fa fa-users fa-fw"></i>
              </router-link>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-11">
        <div class="panel panel-default">
          <div class="panel-heading">
            @component('_c.search_xs')@endcomponent
          </div>
          <div class="panel-body">


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
