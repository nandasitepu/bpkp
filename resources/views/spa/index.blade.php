@extends('spa')

@section('title')SPA Home @endsection
@section('stylesheets')
  <link rel="stylesheet" href="/css/tugas.css" media="screen" title="no title">
@endsection

@section('content')
<div id="app" class="">
  <div class="container">

    <div class="col-md-10">
      <div class="text-center visible-xs">
        <router-link class="btn btn-default btn-sm btn-block" to="/spa/berita" exact>
          Berita &nbsp;<i class="fa fa-newspaper-o fa-fw"></i>
        </router-link>
        <router-link class="btn btn-default btn-sm btn-block" to="/spa/pengumuman">
          Pengumuman &nbsp;<i class="fa fa-comment-o -o fa-fw"></i>
        </router-link>
        <router-link class="btn btn-default btn-sm btn-block" to="/spa/pegawai">
          Pegawai &nbsp;<i class="fa fa-vcard-o fa-fw"></i>
        </router-link>
        <router-link class="btn btn-default btn-sm btn-block" to="/spa/penugasan">
          Penugasan &nbsp;<i class="fa fa-briefcase fa-fw"></i>
        </router-link>
      </menu>
        <br><br><br><br>
      </div>
      <div class="text-center well hidden-xs">
        <router-link class="btn btn-default btn-sm" to="/spa/berita" exact>
          Berita &nbsp;<i class="fa fa-newspaper-o fa-fw"></i>
        </router-link>
        <router-link class="btn btn-default btn-sm" to="/spa/pengumuman">
          Pengumuman &nbsp;<i class="fa fa-comment-o -o fa-fw"></i>
        </router-link>
        <router-link class="btn btn-default btn-sm" to="/spa/pegawai">
          Pegawai &nbsp;<i class="fa fa-vcard-o fa-fw"></i>
        </router-link>
        <router-link class="btn btn-default btn-sm" to="/spa/penugasan">
          Penugasan &nbsp;<i class="fa fa-briefcase fa-fw"></i>
        </router-link>
      </menu>
      </div>
      <hr>
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
