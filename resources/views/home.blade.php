@extends('main')
@section('title', 'Perwakilan Provinsi Sulawesi Barat')
@section('scripts')
  <script src="/assets/wow/dist/wow.min.js"></script>
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <!-- Search and Button -->
      <div class="col-md-8">

        @component('_c.search')
          @slot('hot')
            <div class="text-center">
              <b><small>Hot Search:</small></b>
              <ul class="list-inline">
                <li><span class="label label-primary"> APIP </span></li>
                <li><span class="label label-primary"> SPIP </span></li>
                <li><span class="label label-success"> Dana Desa </span></li>
                <li><span class="label label-success"> Auditor </span></li>
                <li><span class="label label-warning"> Pengadaan Barang Jasa </span></li>
                <li><span class="label label-warning"> Penerimaan PNS </span></li>
              </ul>
            </div>
          @endslot
        @endcomponent
      </div>
      <div class="col-md-4">

        @if (Auth::guest())
          <div class="btn-group btn-group-justified hidden-xs">
            <a href="/#register" class="btn btn-default btn-sm">Daftar</a>
            <a href="/login" class="btn btn-info btn-sm">Login</a>
          </div>
          <div class="btn-group btn-group-justified visible-xs">
            <a href="/#register" class="btn btn-default btn-sm">Daftar</a>
            <a href="/login" class="btn btn-info btn-sm">Login</a>
            <br>
          </div>
        @else
          <div class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <button type="button" class="btn btn-primary btn-block btn-sm " name="button">
                  Login @ | &nbsp; {{ Auth::user()->name }} &nbsp; <span class="caret"></span>
                </button>
              </a>

              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ url('/logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      <button type="button" class="btn btn-default btn-block btn-sm " name="button">
                      Logout
                      </button>
                  </a>
                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
              </ul>
          </div>

          <div class="btn-group btn-group-justified hidden-xs">
            <a href="/dashboard" class="btn btn-default btn-sm">Dashboard</a>
            <a href="/pages/create" class="btn btn-info btn-sm">Logout</a>
          </div>
          <div class="btn-group btn-group-justified visible-xs">
            <a href="/posts/create" class="btn btn-default btn-sm">Dashboard</a>
            <a href="/pages/create" class="btn btn-info btn-sm">Logout</a>
          </div>
          <br />
        @endif
        <br>
        Social Button
      </div>
    </div>
    <div class="row">
      <br />
      <!-- Jumbotron and Tabs -->
      <div class="col-md-8">
        <div id="myCarousel" class="carousel carousel-fade" data-ride="carousel" style="border: 1px solid #000; box-shadow: 1px 1px 1px 2px #eee">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="first-slide" src="/img/web/gedung-bpkp.jpg" style="width: 100%;height:400px" alt="First slide">
              <div class="container">
                <div class="carousel-caption">

                  <p>\\ Selamat Datang di Website BPKP//</p>
                  <h3>Perwakilan BPKP Sulawesi Barat</h3>
                  <p><a class="btn btn-sm btn-primary" href="#" role="button">Masuk &raquo;</a></p>

                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="/img/web/gedung-prov-sulbar.jpg" style="width: 100%;height:400px" alt="Second slide">
              <div class="container">
                <div class="carousel-caption" >

                  <div style="background-color:#aaa; padding: 5px">
                    <h4>Bersama Pemerintah Daerah Sulawesi Barat</h4>
                    <p>\\ Mewujudkan Masyarakat Yang Malaqbi //</p>
                  </div>
                  <br>
                  <p><a class="btn btn-info btn-sm" href="#" role="button">Selengkapnya</a></p>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="/img/web/idul-fitri.jpg" style="width: 100%;height:400px" alt="Third slide">
              <div class="container">
                <div class="carousel-caption">
                  <h1></h1>
                  <p></p>
                  <p><a class="btn  btn-warning" href="#" role="button">Browse gallery</a></p>
                </div>

              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- /.carousel -->
      </div>
      <div class="col-md-2 col-xs-12 center panel panel-default">
          <div class="col-md-12 col-xs-6">
            <div class="btn-group-vertical" role="group" aria-label="...">
              <br>
              <a href="/spip" class="btn btn-default" style="box-shadow: 1px 1px 1px 2px #000" role="button">SPIP</a><br />
              <a href="#" class="btn btn-info" style="box-shadow: 1px 1px 1px 2px #000" role="button">APIP</a><br />
              <a href="#" class="btn btn-warning" style="box-shadow: 1px 1px 1px 2px #000" role="button">SisKeuDes</a><br />
            </div>
          </div>
          <div class="col-md-12 col-xs-6">
            <div class="btn-group-vertical" role="group" aria-label="...">
              <br>
              <a href="#" class="btn btn-success" style="box-shadow: 1px 1px 1px 2px #000" role="button">SIMDA</a><br />
              <a href="#" class="btn btn-primary" style="box-shadow: 1px 1px 1px 2px #000" role="button">SIA BLUD</a><br />
              <a href="#" class="btn btn-danger" style="box-shadow: 1px 1px 1px 2px #000" role="button">FCP</a><br />
            </div>
          </div>
      </div>
      <div class="col-md-2 col-xs-12 center ">
          <div class="panel panel-default">
            <div class="panel-body">
              <img class="img-rounded" src="/img/instansi/berani.png" alt="Generic placeholder image" width="125" height="150">
              <img class="img-rounded" src="/img/instansi/kerjanyata.jpg" alt="Generic placeholder image" width="125" height="150">
            </div>
          </div>



                </div>
    </div>
	</div>
  </div>
@endsection
