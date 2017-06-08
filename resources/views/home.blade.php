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
@section('bot-scripts')
  <!-- Bottom Script -->
  <script src="../js/style.js"></script>
  <script type="text/javascript">
      $(document).ready(function(e){
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
      });
    });
  </script>
@endsection

  @section('content')
    <div class="container">
      <div class="row">
        <!-- Search and Button -->
        <div class="col-md-8">
          <div class="col-md-11">
            @component('_c.search')@endcomponent
          </div>
          <div class="col-md-1">
            <div class="nav text-center">
              <a href="/#slider" data-toggle="tab" style="">
                <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-home fa-fw"></i>
                </button>
              </a>
              <a href="#spa" data-toggle="tab" style="">
                  <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-bookmark-o fa-fw"></i>
                </button>
              </a>
              <a href="/#slider" data-toggle="tab" style="">
                <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-bar-chart-o fa-fw"></i>
                </button>
              </a>
              <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" >
                <i class="fa fa-angle-down fa-fw"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a href="/">Pedoman</a></li>
                <li><a href="/obrik">Obrik</a></li>
                <li><a href="/">Penugasan</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 ">
            <div class="pull-left" style="padding: 5px">
            </div>
          </div>
        </div>
        <div class="col-md-4" class="well">
          @component('_c.login')@endcomponent
        </div>
      </div>

      <div class="row">
      <!-- Jumbotron and Tabs -->
      <div id="app">
        <div class="col-md-8">
          <div class="tab-content">
            <div id="slider" class="tab-pane fade in active">
              @component('_c.slider')@endcomponent
            </div>
            <div id="spa" class="tab-pane fade">
              <div class="panel panel-default">

                <menu class="nav text-center panel-body">
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
          </div>
        </div>
      </div>
        <div class="col-md-4 visible-xs">
          @component('_c.social')@endcomponent
          <div class="col-md-6 col-xs-12 center panel panel-default">
            @component('_c.app')@endcomponent
          </div>
          <div class="col-md-6 col-xs-12 center ">
            @component('_c.slogan')@endcomponent
          </div>

        </div>
        <div class="col-md-4 hidden-xs" data-spy="affix" data-offset-top="150">
          @component('_c.social')@endcomponent
          <div class="col-md-6 col-xs-12 center panel panel-default">
            @component('_c.app')@endcomponent
          </div>
          <div class="col-md-6 col-xs-12 center ">
            @component('_c.slogan')@endcomponent
          </div>

        </div>

      </div>

    </div>
  @endsection

@section('bot_scripts')
 <script src="{{asset('js/myvue.js')}}"></script>
@endsection
