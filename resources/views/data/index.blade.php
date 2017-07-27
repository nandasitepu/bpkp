@extends('spa')

@section('title')
  Data
@endsection
@section('stylesheets')
  <link rel="stylesheet" href="/css/tugas.css" media="screen" title="no title">
@endsection

  <script type="text/javascript">
      $('.search-panel .dropdown-menu').find('a').click(function(e) {
      e.preventDefault();
      var param = $(this).attr("href").replace("#","");
      var concept = $(this).text();
      $('.search-panel span#search_concept').text(concept);
      $('.input-group #search_param').val(param);
    });
  </script>


@section('content')
  <div class="container">
      <div class="row" id="app">
        <div class="col-md-2">
            <a href="/#stats" title="Stats" data-toggle="tab">
              <button type="button" class="btn btn-default btn-sm btn-block">
                Stats &nbsp; <i class="fa fa-bar-chart-o fa-fw"></i>
              </button>
             </a>

            <a href="/#data" data-content="Data" data-toggle="tab">
              <button type="button" class="btn btn-default btn-sm btn-block" >
                 Database &nbsp; <i class="fa fa-table fa-fw"></i>
              </button>
            </a>

        </div>
        <div class="col-md-9" >
            <div class="tab-content">
              <div id="stats" class="tab-pane fade in active">
                @component('_c.stats')@endcomponent
              </div>
              <div id="data" class="tab-pane fade">
                @component('_c.data')@endcomponent
              </div>
            </div>
        </div>
        <div class="col-md-1">
          <a href="/#stats" title="Stats" data-toggle="tab">
            <button type="button" class="btn btn-default btn-sm btn-block">
              <i class="fa fa-bar-chart-o fa-fw"></i>
            </button>
           </a>
          <a href="/#data" data-content="Data" data-toggle="tab">
            <button type="button" class="btn btn-default btn-sm btn-block" >
              <i class="fa fa-table fa-fw"></i>
            </button>
           </a>
           <a href="/#stats" title="Stats" data-toggle="tab">
             <button type="button" class="btn btn-default btn-sm btn-block">
               <i class="fa fa-bar-chart-o fa-fw"></i>
             </button>
            </a>
           <a href="/#data" data-content="Data" data-toggle="tab">
             <button type="button" class="btn btn-default btn-sm btn-block" >
               <i class="fa fa-table fa-fw"></i>
             </button>
            </a>

        </div>
      </div>
      <br>
      <br>
      <br>
    </div>
@endsection
