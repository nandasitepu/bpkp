@extends('main')
@section('title')
  Daftar Tugas 2017
@endsection

@section('stylesheets')

@endsection

@section('content')
  <div class="row">
    <div class="col-md-1 hidden-xs">
      <button class="btn btn-default btn-block btn-xs" data-toggle="collapse" data-target="#sidemenu">
        <i class="fa fa-th" aria-hidden="true"></i>
      </button>
      <div class="collapse in" id="sidemenu">
        <ul class="nav text-center">
          <li>
            <router-link to="tugas">
              <div class="btn btn-default btn-xs">
                <i class="fa fa-briefcase fa-fw"></i>
              </div>
            </router-link>
          </li>
          <li>
            <router-link to="pengumuman">
              <div class="btn btn-default btn-xs">
                <i class="fa fa-barcode fa-fw"></i>
              </div>
            </router-link>
          </li>
          <li>
            <router-link to="obrik">
              <div class="btn btn-default btn-xs">
                <i class="fa fa-building-o fa-fw"></i>
              </div>
            </router-link>
          </li>
          <li>
            <router-link to="berita">
              <div class="btn btn-default btn-xs">
                <i class="fa fa-newspaper-o fa-fw"></i>
              </div>
            </router-link>
          </li>
          <li>
            <router-link to="pengumuman">
              <div class="btn btn-default btn-xs">
                <i class="fa fa-calendar fa-fw"></i>
              </div>
            </router-link>
          </li>
          <li>
            <router-link  to="pegawai">
              <div class="btn btn-default btn-xs">
                <i class="fa fa-users fa-fw"></i>
              </div>
            </router-link>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-9">
      <div class="panel panel-default">
            <div class="panel-heading">
              <!--  @component('_c.search_xs')@endcomponent -->
            </div>
            <div class="panel-body">
              <!--  Dynamic Data -->
              <router-view></router-view>
            </div>
          </div>
    </div>
    <div class="col-md-2">

      <div id="gpr-kominfo-widget-container"></div>
    </div>
  </div>
  <br>
@endsection

@section('bot_scripts')
 <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
 <script src="{{asset('js/myvue.js')}}"></script>
@endsection
