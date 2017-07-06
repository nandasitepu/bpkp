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
@endsection

  @section('content')
    <div class="container">
      <div class="row">
        <!-- Search and Button -->
        <div class="col-md-8">
          <div class="col-md-12">
          @component('_c.search')@endcomponent
          </div>
        </div>
        <div class="col-md-4">
          @component('_c.login')@endcomponent

          <div class="col-md-12 text-center" style="padding:10px">
            <div id="menu-icon">
              <a href="/#slider" title="Slider" data-toggle="tab" style="">
                <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-home fa-fw"></i>
                </button>
               </a>
              &nbsp; ||||| &nbsp;

              <a href="#spa" title="Single Page" data-toggle="tab" style="">
                  <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-th-list fa-fw"></i>
                </button>
               </a>
              <a href="/data" data-content="Data" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
                <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-bar-chart-o fa-fw"></i>
                </button>
              </a>
              <a href="#" data-content="Perpustakaan" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
                  <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-book fa-fw"></i>
                </button>
              </a>
              <a href="#" data-content="Aplikasi" data-toggle="popover" data-trigger="hover" data-placement="bottom" >
                <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-building-o fa-fw"></i>
                </button>
              </a>
              <a href="#" data-content="Penugasan" data-toggle="popover" data-trigger="hover"  data-placement="bottom" >
                <button type="button" class="btn btn-default btn-xs " >
                  <i class="fa fa-briefcase fa-fw"></i>
                </button>
              </a>
               &nbsp; ||||| &nbsp;
              <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
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

        <div id="app" class="col-md-8">
            <div class="tab-content">
              <div id="slider" class="tab-pane fade in active">
                @component('_c.slider')@endcomponent
              </div>
              <div id="spa" class="tab-pane fade">
                <div class="panel panel-default">

                  <menu class="nav text-center panel-body">
                    <router-link class="btn btn-default btn-sm" to="/" exact>
                      Berita &nbsp;<i class="fa fa-newspaper-o fa-fw"></i>
                    </router-link>
                    <router-link class="btn btn-default btn-sm" to="/pengumuman">
                      Pengumuman &nbsp;<i class="fa fa-comment-o -o fa-fw"></i>
                    </router-link>
                    <router-link class="btn btn-default btn-sm" to="/pegawai">
                      Pegawai &nbsp;<i class="fa fa-vcard-o fa-fw"></i>
                    </router-link>
                    <router-link class="btn btn-default btn-sm" to="/penugasan">
                      Penugasan &nbsp;<i class="fa fa-briefcase fa-fw"></i>
                    </router-link>
                  </menu>

                </div>


                <hr>
                <router-view></router-view>
              </div>
            </div>
          </div>
        <div class="col-md-4 visible-xs">
          <div class="col-md-6 col-xs-12 center panel panel-default">
            @component('_c.app')@endcomponent
          </div>
          <div class="col-md-6 col-xs-12 center ">
            @component('_c.slogan')@endcomponent
          </div>
        </div>
        <div class="col-md-4 hidden-xs" data-spy="affix" data-offset-top="150">
            <div class="cool">
             {{-- @component('_c.social')@endcomponent --}}
            </div>

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
