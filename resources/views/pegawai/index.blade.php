@extends('main')
@section('title')
  Pegawai BPKP
@endsection

@section('stylesheets')

@endsection

@section('content')
<div class="row"> 
    {{-- Login  --}} 
    <div class="col-md-4">
  
     
            <div style="padding:10px; border:1px solid #ccc">@component('_c.login')@endcomponent</div>
            <br>
            @component('_c.user_menu')@endcomponent
            <br>
            <div>
              <div class="panel panel-default">
                <div class="panel-body">
                    <b>Izin</b>
                    
                      <ul class="list-unstyled">
                        <li>Title</li>
                        <li>Title</li>
                        <li>Title</li>
                      </ul>
                    <hr>
                    <b>Kehadiran</b>
                      <ul class="list-unstyled">
                        <li>Title</li>
                        <li>Title</li>
                        <li>Title</li>
                      </ul>
                      <hr>
                    <b>Kompetensi</b>
                      <ul class="list-unstyled">
                        <li>Title</li>
                        <li>Title</li>
                        <li>Title</li>
                      </ul>
                </div>
              </div>
            </div>
         
    
    </div>
    
    {{-- Menu Penugasan --}}
    <div class="col-md-8" id="menu-tugas" style="border: 1px solid #ccc; padding:30px">
      <div>
          <img src="/img/banner/pegawai-banner.jpg" class="img-thumbnail" style="width: 100%;height:160px" alt="Second slide">
      </div>
      <div class="text-center">
        <h4><span class="label label-default">Menu Kepegawaian</span></h4>
      </div>
      <hr>
      <div class="row text-center">
          <div class="col-md-4">
            <h5><b><u>Daftar Pegawai:</u></b> </h5>
            <button class="btn btn-warning fa fa-users fa-3x"></button>
          </div>
          <div class="col-md-4">
            <h5><b><u>Kompetensi:</u></b> </h5>
            <a href="{{route('st.index')}}">
              <button class="btn btn-primary">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-space-shuttle fa-stack-2x"></i>
                
                </span>
              </button>
            </a>
          </div>
          <div class="col-md-4">
            <h5><b><u>File:</u></b> </h5>
            <button class="btn btn-success">
              <span class="fa-stack fa-lg">
                <i class="fa fa-dot-circle-o fa-stack-2x"></i>
                <strong class="fa-stack-1x fa-stack-text file-text"><small></small></strong>
              </span>
            </button>
          </div>
      </div>
      <hr>
      <div class="row text-center">
          <div class="col-md-4">
            <h5><b><u>DUPAK:</u></b> </h5>
            <button class="btn btn-danger">
              <span class="fa-stack fa-lg">
                <i class="fa fa-server fa-stack-2x"></i>
                <strong class="fa-stack-1x fa-stack-text file-text"><small>D</small></strong>
              </span>
            </button>
          </div>
          <div class="col-md-4">
            <h5><b><u>Data Kehadiran:</u></b> </h5>
            <button class="btn btn-default">
              <span class="fa-stack">
                <i class="fa fa-adn fa-stack-2x"></i>
                
              </span>
            </button>
          </div>
          <div class="col-md-4">
            <h5><b><u>Cuti/Izin:</u></b> </h5>
            <button class="btn btn-info">
              <span class="fa-stack fa-lg">
                <i class="fa fa-file-text-o fa-stack-2x"></i>
                <strong class="fa-stack fa-stack-text file-text"><small>I</small></strong>
              </span>
            </button>
          </div>
      </div>
    </div>
  </div>
  
 
 @endsection

@section('bot_scripts')
   
 @endsection
