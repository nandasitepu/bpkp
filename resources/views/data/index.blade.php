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
      <div class="row">
        <div class="col-md-2 well-sm">
          <button class="btn btn-default btn-block btn-xs" data-toggle="collapse" data-target="#sidemenu">
            <i class="fa fa-2x fa-cubes fa-fw" aria-hidden="true"></i>
          </button>
          <div class="panel panel-default collapse in" id="sidemenu">
            <ul class="nav">
              <li>
                <a href="#data" data-toggle="tab">
                    <button type="button" class="btn btn-default btn-xs btn-block" >
                    <i class="fa fa-database fa-fw"></i> &nbsp; Data
                  </button>
                </a>
              </li>
              <li>
                <a href="#pegawai" data-toggle="tab">
                  <button type="button" class="btn btn-primary btn-xs btn-block">
                    <i class="fa fa-users fa-fw"></i> &nbsp; Pegawai
                  </button>
                </a>
              </li>
              <li>
                  <a href="#tugas" data-toggle="tab">
                  <button type="button" name="button" class="btn btn-warning btn-xs btn-block">
                    <i class="fa fa-briefcase fa-fw"></i>
                    &nbsp; Tugas
                  </button>
                </a>
              </li>
              <li>
                <a href="#obrik" data-toggle="tab">
                  <button type="button" name="button" class="btn btn-info btn-xs btn-block">
                    <i class="fa fa-building-o fa-fw"></i> &nbsp; Obrik
                  </button>
                </a>
              </li>
              <li>
                <a href="#temuan" data-toggle="tab">
                  <button type="button" name="button" class="btn btn-success btn-xs btn-block">
                  <i class="fa fa-money fa-fw"></i> &nbsp; Temuan
                  </button>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-10">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="tab-content">
                <div id="data" class="tab-pane fade in active">
                  @component('_c.data')@endcomponent
                </div>
                <div id="pegawai" class="tab-pane fade">
                  @component('_c.pegawai')@endcomponent
                </div>
                <div id="tugas" class="tab-pane fade">
                  @component('_c.tugas')@endcomponent
                </div>
                <div id="obrik" class="tab-pane fade">
                  @component('_c.obrik')@endcomponent
                </div>
                <div id="temuan" class="tab-pane fade">
                  Temuan
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
@endsection
