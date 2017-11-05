@extends('main')
@section('title', 'Perwakilan Provinsi Sulawesi Barat')
@section('stylesheets')
  <link rel="stylesheet" href="/css/tugas.css">
  <style>
    body {
        position: relative;
    }
    .affix {
        top: 20px;
        right: 30px;
    }
   </style>
@endsection


@section('content')
  <div class="row">
    <!-- Search and Button -->
    <div class="col-md-8">
      <div class="col-md-12">
         @component('_c.search')@endcomponent
         <br>
        <!-- Typed Text -->
         @include('_c.typed')
      </div>
    </div>

    <div class="col-md-4">
        <!-- Login Component -->
       
      <div style="padding:10px; border:1px solid #ccc">@component('_c.login')@endcomponent</div>
  
      <div class="col-md-12 text-center well" style="padding:10px">
        <div id="menu-icon">
          <a href="/#slider" title="Slider" data-toggle="tab" style="">
            <button type="button" class="btn btn-default btn-sm " >
              <i class="fa fa-home fa-fw"></i>
            </button>
           </a>
          &nbsp; || &nbsp;

          <a href="#spa" title="SPA" data-content="SPA" data-toggle="tab" data-trigger="hover" data-placement="bottom">
              <button type="button" class="btn btn-default btn-sm " >
              <i class="fa fa-th-list fa-fw"></i>
            </button>
           </a>
          <a href="{{url('pegawai')}}" data-content="Pegawai" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
            <button type="button" class="btn btn-default btn-sm " >
              <i class="fa fa-user-circle-o fa-fw fa-lg"></i>
            </button>
          </a>
          <a href="{{route('tugas.index')}}" data-content="Tugas" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
            <button type="button" class="btn btn-default btn-sm " >
              <i class="fa fa-briefcase fa-fw"></i>
            </button>
          </a>
          <a href="{{url('perpustakaan')}}" data-content="Pustaka" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
              <button type="button" class="btn btn-default btn-sm " >
              <i class="fa fa-book fa-fw"></i>
            </button>
          </a>
      
           &nbsp; || &nbsp;
          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-angle-down fa-fw"></i>
           </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#"><i class="fa fa-music fa-fw"></i>&nbsp;More</a></li>
          </ul>
        </div>
      </div>
    
    </div>
  </div>
  <div class="row">
   <!-- Jumbotron and Tabs -->
    <div class="col-md-8">
        <div class="tab-content">
          <div id="slider" class="tab-pane fade in active">
            @component('_c.slider')@endcomponent
          </div>
          <div id="spa" class="tab-pane fade">
            @component('_c.posting')@endcomponent
          </div>
        </div>
    </div>
    <div class="col-md-4 visible-xs">
      <div class="col-md-6 col-xs-12 center">
        @component('_c.app')@endcomponent
      </div>
      <div class="col-md-6 col-xs-12 center ">
        @component('_c.slogan')@endcomponent
      </div>
    </div>
    <div class="col-md-4 text-center hidden-xs" data-spy="affix" data-offset-top="150">

      {{--@component('_c.social') @endcomponent--}}
      <div class="row">
        <div class="col-md-12 col-xs-12 center">
          <div class="panel panel-default">
            <div class="panel-body">
              <a href="http://www.bpkp.go.id/ppid.bpkp"> <img class="col-md-6" src="/img/instansi/ppid.jpg" alt="kerjanyata" height="40px"></a>
              <a href="http://wbs.bpkp.go.id/"><img class="col-md-6" src="/img/instansi/logo-wbs.png" alt="kerjanyata" height="40px"></a>
            </div>
          </div>
        </div>
         <div class="visible-xs">
          <div class="panel panel-primary">
            <div class="panel-body">
              <a href="http://www.bpkp.go.id/ppid.bpkp"> <img class="col-md-6" src="/img/instansi/ppid.jpg" alt="kerjanyata" height="40px"></a>
              <a href="http://wbs.bpkp.go.id/"><img class="col-md-6" src="/img/instansi/logo-wbs.png" alt="kerjanyata" height="40px"></a>
            </div>
          </div>
        </div>
    
        <div class="col-md-6 col-xs-12 center" width="100%">
          @component('_c.app')@endcomponent
        </div>
        <div class="col-md-6 col-xs-12 center " width="100%">
          @component('_c.slogan')@endcomponent
        </div>
      </div>

    

    </div>
  </div>
@endsection

@section('bot-scripts')
  <!-- Bottom Script -->
  <script src="/js/style.js"></script>
  <script type="text/javascript">
    $(document).ready(function(e){
      // Search Vue
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
        });
      // PopOver
        $('[data-toggle="popover"]').popover();

    });
  </script>
  <script src="{{asset('js/myvue.js')}}"></script>
@endsection
