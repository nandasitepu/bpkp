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
                {{-- Home Button --}}
                <div class="col-md-1"> 
                  <a href="{{route('home')}}"> <span class="btn btn-default btn-xs"><i class="fa fa-home fa-fw"></i></span></a>
                </div>
                
                {{-- Notifikasi --}}
                <div class="col-md-7 text-center">
                  <span>
                    <i class="fa fa-bell-o fa-fw"></i>&nbsp; <small>Notifikasi</small> &nbsp;<span class="label label-primary">Go</span> &nbsp;
                    <i class="fa fa-comment-o fa-fw"></i>&nbsp; <small>Komentar</small> &nbsp;<span class="label label-info">Go</span> &nbsp;
                    <i class="fa fa-envelope-o fa-fw"></i>&nbsp; <small>Kontak</small> &nbsp;<span class="label label-danger">Go</span> &nbsp;
                  </span>
                </div>
            
                {{-- User Button --}}
                <div class="col-md-4 text-right">
                  <div class="btn-group ">
                    <a class="btn btn-primary btn-xs" href="#"><i class="fa fa-user-circle-o fa-fw"></i> 
                       <b class="label label-primary">{{ Auth::user()->name }}</b> &nbsp; 
                    </a>
                    <a class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" href="#">
                      <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="fa fa-edit fa-fw"></i><small> Profil</small></a></li>
                      <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-fw"></i> <small>Logout</small></a></li>
                    </ul>
                  </div>
                </div>
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
    {{-- Vertical Menu --}}
    <div class="col-md-1">
      <div class="panel panel-default" data-spy="affix" data-offset-top="50px">
     
        
        <div class="panel-body">
              {{-- Dashboard --}}
              
                <router-link to="/dashboard">
                  <div class="btn btn-default btn-block btn-sm" >
                    <i class="fa fa-dashboard fa-fw"></i>
                  </div>
                </router-link>
              
              <br>
              {{-- Tugas --}} 
              <div>
                <router-link to="/dashboard/tugas">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-briefcase fa-fw"></i>
                  </div>
                  
                </router-link>
              </div>
              <br>
              {{-- Pengumuman --}}
              <div>
                <router-link to="/dashboard/pengumuman">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-calendar fa-fw"></i>
                  </div>
               
                </router-link>
              </div>
              <br>
              {{-- Obrik --}}
              <div>
                <router-link to="/dashboard/obrik">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-building-o fa-fw"></i>
                  </div>
                
                </router-link>
              </div>
              <br>
              {{-- Berita --}}
              <div>
                <router-link to="/dashboard/berita">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-newspaper-o fa-fw"></i>
                  </div>
                 
                </router-link>
              </div>
              <br>
              {{-- Pustaka --}}
              <div>
                <router-link to="/dashboard/pengumuman">
                  <div class="btn btn-default btn-block btn-sm">
                    <i class="fa fa-book fa-fw"></i>
                  </div>
              
                </router-link>
              </div>
              <br>
              {{-- Pegawai --}}
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
    {{-- Terbaru --}}
    <div class="col-md-3">
      <!-- <div class="service-wrapper">
        <a class="twitter-timeline"  href="https://twitter.com/BPKPgoid/lists/sinopsis-informasi" data-widget-id="579844155678937090">
          Tweet Dari BPKPgoid
        </a>     
      </div> -->
      <div>
          <div class="panel panel-default">
            <div class="panel-body">
                 <b>Surat Tugas</b>
                 
                  <ul class="list-unstyled">
                    <li>Title</li>
                    <li>Title</li>
                    <li>Title</li>
                  </ul>
                 <hr>
                 <b> Nota Dinas</b>
                  <ul class="list-unstyled">
                    <li>Title</li>
                    <li>Title</li>
                    <li>Title</li>
                  </ul>
                  <hr>
                 <b> Pustaka </b>
                  <ul class="list-unstyled">
                    <li>Title</li>
                    <li>Title</li>
                    <li>Title</li>
                  </ul>
                  <hr>
            </div>
          </div>
      
      </div>
    
    
    </div>
  </div>
 
@endsection

@section('bot_scripts')
 <script src="{{asset('js/myvue.js')}}"></script>
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
@endsection
