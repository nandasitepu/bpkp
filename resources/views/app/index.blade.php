@extends('main')
@section('title')
    APPS
@endsection
@section('stylesheets')
    <style>
        .pad{
            margin: 5px;
            padding: 5px;
        }
    </style>
@endsection
@section('content')
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
          <h4 class="text-right"><span class="label label-success">Aplikasi </span>&nbsp; // &nbsp;<i class="fa fa-fw fa-desktop"></i> </h4>
          <hr>
          <div class="panel panel-default text-center">
              <div class="panel-body">
                  <div class="row text-center">
                      <div class="col-md-3">
                        <a href="/app/spip">
                            <img src="/img/app/spip.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      <div class="col-md-3" >
                        <a href="/app/apip">
                            <img src="/img/app/apip.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                     
                      <div class="col-md-3">
                        <a href="/app/fcp">
                            <img src="/img/app/fcp.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      <div class="col-md-3">
                         <a href="/app/pkpd">
                             <img src="/img/app/pkpd.png" alt="" class="pad img-thumbnail">
                         </a>            
                      </div>
                      
                  </div>
                  
              </div>
          </div>
          <hr>:
          <div class="panel panel-default text-center">
              <div class="panel-body">
                  <div class="row text-center">
                      
                      <div class="col-md-3">
                        <a href="/app/simda">
                         <img src="/img/app/simda.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      <div class="col-md-3">
                       <a href="/app/sia">
                        <img src="/img/app/sia.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="/app/siskeudes">
                            <img src="/img/app/siskeudes.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                      
                      <div class="col-md-3">
                        <a href="/app/sidupak">
                            <img src="/img/app/sidupak.png" alt="" class="pad img-thumbnail">
                        </a>
                      </div>
                  </div>
                  
              </div>
          </div>
      </div>
    </div>
@endsection