@extends('main')
@section('title')
  Dashboard Pegawai
@endsection

@section('stylesheets')
  <link rel="stylesheet" href="/css/dashboard.css">
@endsection

@section('content')
  <div class="row">
   
    <div class="col-md-8">
      <div class="row">
        
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="hidden-xs">
                <div class="pull-right">
                  <i class="fa fa-bell-o fa-fw"></i>&nbsp; Notifikasi &nbsp;<span class="label label-primary">Go</span> &nbsp;
                  <i class="fa fa-comment-o fa-fw"></i>&nbsp; Komentar &nbsp;<span class="label label-info">Go</span> &nbsp;
                  <i class="fa fa-envelope-o fa-fw"></i>&nbsp; Kontak &nbsp;<span class="label label-danger">Go</span> &nbsp;
                </div>
                <span class="btn btn-default btn-xs"><i class="fa fa-home fa-fw"></i></span>&nbsp; &nbsp;  
                <span class="label label-default">Selamat Datang</span>&nbsp;
                <b class="label label-primary">{{ Auth::user()->name }}</b> &nbsp;  

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
                  <i class="fa fa-envelope-o fa-fw"></i>Email &nbsp;<span class="label label-info">32</span>
                </div>
              </div>
            </div>
          </div>
       
      </div>
      <div class="row">
        
          <div class="panel panel-default">
            <div class="panel-body">
              <router-view></router-view>
            </div>
          </div>
        
      </div>
    </div>
     <div class="col-md-1">
   
      <div class="panel panel-default" data-spy="affix" data-offset-top="50px">
            <button class="btn btn-default btn-block btn-xs" data-toggle="collapse" data-target="#sidemenu">
          <i class="fa fa-th"></i>
        </button>
        <div class="panel-body">
          <div class="collapse in" id="sidemenu">
            <div>
              <div>
                <router-link to="/dashboard">
                  <div class="btn btn-default btn-block btn-sm" >
                    <i class="fa fa-dashboard fa-fw"></i>
                  </div>
                
                </router-link>
              </div>
              <br>
              <div>
                <router-link to="/dashboard/tugas">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-briefcase fa-fw"></i>
                  </div>
                  
                </router-link>
              </div>
              <br>
              <div>
                <router-link to="/dashboard/pengumuman">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-calendar fa-fw"></i>
                  </div>
               
                </router-link>
              </div>
              <br>
              <div>
                <router-link to="/dashboard/obrik">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-building-o fa-fw"></i>
                  </div>
                
                </router-link>
              </div>
              <br>
              <div>
                <router-link to="/dashboard/berita">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-newspaper-o fa-fw"></i>
                  </div>
                 
                </router-link>
              </div>
              <br>
              <div>
                <router-link to="/dashboard/pengumuman">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-calendar fa-fw"></i>
                  </div>
              
                </router-link>
              </div>
              <br>
              <div>
                <router-link  to="/dashboard/pegawai">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-users fa-fw"></i>
                  </div>
                  
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="service-wrapper">
        <a class="twitter-timeline"  href="https://twitter.com/BPKPgoid/lists/sinopsis-informasi" data-widget-id="579844155678937090">
          Tweet Dari BPKPgoid
        </a>     
        </div>
    </div>
  </div>
 
@endsection

@section('bot_scripts')
 <script src="{{asset('js/myvue.js')}}"></script>
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
@endsection
