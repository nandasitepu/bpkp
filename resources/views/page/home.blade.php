@extends('main')
@section('title', 'Perwakilan Provinsi Sulawesi Barat')
@section('scripts')
  <script src="/assets/wow/dist/wow.min.js"></script>
@endsection
@section('contents')
  <div class="container">
    <div class="row">
      <!-- Search and Button -->
      <div class="col-md-8">
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
        <br>
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
        @else
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
        <hr>
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
              <img class="first-slide" src="/img/web/gedung-bpkp.jpg" style="width: 100%;height:350px" alt="First slide">
              <div class="container">
                <div class="carousel-caption">

                  <p>\\ Selamat Datang di Website BPKP//</p>
                  <div class="input-group">
                    <input type="text" class="form-control" aria-label="Search" placeholder="Cari apaan sih? ">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true">&nbsp; <label class="searchbox">Cari</label></i>
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Tags</a></li>
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Data</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Go to Search Page</a></li>
                      </ul>
                    </div><!-- /btn-group -->
                  </div><!-- /input-group --> <!-- Search BOX -->
                  <h3>Perwakilan BPKP Sulawesi Barat</h3>
                  <p><a class="btn btn-md btn-primary" href="#" role="button">Masuk &raquo;</a></p>

                </div>
              </div>
            </div>
            <div class="item">
              <img class="second-slide" src="/img/web/gedung-prov-sulbar.jpg" style="width: 100%;height:350px" alt="Second slide">
              <div class="container">
                <div class="carousel-caption" >
                  <p><a class="btn btn-info" href="#" role="button">Detail</a></p>
                  <div style="background-color:#aaa; padding: 5px">
                    <h4>Bersama Pemerintah Daerah Sulawesi Barat</h4>
                    <p>\\ Mewujudkan Masyarakat Yang Malaqbi //</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img class="third-slide" src="/img/web/idul-fitri.jpg" style="width: 100%;height:350px" alt="Third slide">
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
        <h5><strong>Apps  </strong><span class="label label-danger">Hot!</span></h5>
          <div class="col-md-12 col-xs-6">
            <div class="btn-group-vertical" role="group" aria-label="...">
              <a href="#" class="btn btn-default" style="box-shadow: 1px 1px 1px 2px #000" role="button">SPIP</a><br />
              <a href="#" class="btn btn-info" style="box-shadow: 1px 1px 1px 2px #000" role="button">APIP</a><br />
              <a href="#" class="btn btn-warning" style="box-shadow: 1px 1px 1px 2px #000" role="button">SisKeuDes</a><br />
            </div>
          </div>
          <div class="col-md-12 col-xs-6">
            <div class="btn-group-vertical" role="group" aria-label="...">
              <a href="#" class="btn btn-success" style="box-shadow: 1px 1px 1px 2px #000" role="button">SIMDA</a><br />
              <a href="#" class="btn btn-primary" style="box-shadow: 1px 1px 1px 2px #000" role="button">SIA BLUD</a><br />
              <a href="#" class="btn btn-danger" style="box-shadow: 1px 1px 1px 2px #000" role="button">FCP</a><br />
            </div>
          </div>
      </div>
      <div class="col-md-2 col-xs-12 center">
          <p>
            <b><u>Mendukung: </u></b>
          </p>
          <img class="img-rounded" src="/img/instansi/berani.png" alt="Generic placeholder image" width="150" height="150">
            <img class="img-rounded" src="/img/instansi/kerjanyata.jpg" alt="Generic placeholder image" width="150" height="150">
      </div>
    </div>
    <div class="row"> <!-- The Services -->
      <div class="col-md-8">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
              <hr />
              <div class="col-md-3 center">
                <img class="img-rounded svc" src="img/web/data.png" alt="Generic placeholder image" >
                <p></p>
                <a class="btn btn-md btn-default" href="#" role="button">Data &raquo;</a>
                <p></p>
              </div>
              <div class="col-md-3 center">

                <img class="img-rounded svc" src="img/web/assurance2.jpg" alt="Generic placeholder image">
                <p></p>
                <a class="btn btn-md btn-default" href="#" role="button">Assurance &raquo;</a>
                <p></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-md-3 center">

                <img class="img-rounded svc" src="img/web/consulting3.jpg" alt="Generic placeholder image">
                <p></p>
                <p><a class="btn btn-md btn-default" href="#" role="button">Consulting &raquo;</a></p>
                  <p></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-md-3 center">

                <img class="img-rounded svc" src="img/web/q&a.png" alt="Generic placeholder image">
                <p></p>
                <p><a class="btn btn-md btn-default" href="#" role="button">Q&A &raquo;</a></p>
                  <p></p>
              </div><!-- /.col-lg-4 -->
              <hr />
            </div>
            <div class="panel-footer">

            </div>
          </div>
      </div>
      <div class="col-md-4">
        <br>
        <div class="panel panel-info">
          <div class="panel-body">
            Menu
          </div>
        </div>
      </div>
    </div>
    <div class="row"><!-- Home Tabs + Sidebars -->
      <div class="col-md-8"> <!-- Home Tabs -->
        <div class="panel panel-default">
          <div class="panel-body">
            <div  class="col-sm-12">
             <div class="col-md-1 col-xs-2">
                 <!-- required for floating -->
                 <!-- Nav tabs -->
                 <div class="hidden-xs">
                   <ul class="nav nav-tabs tabs-left vertical-text">
                       <li class="active"><a href="#home-v" data-toggle="tab">Berita</a></li>
                       <li><a href="#profile-v" data-toggle="tab">Pengumuman</a></li>
                       <li><a href="#messages-v" data-toggle="tab">Data</a></li>
                       <li><a href="#settings-v" data-toggle="tab">Pegawai  </a></li>
                   </ul>
                 </div>
             </div>
             <div class="col-md-11 col-xs-12">
                 <!-- Tab panes -->
                 <div class="tab-content">
                     <div class="tab-pane active" id="home-v">
                       <h4>Berita Terbaru</h4>
                       include('post.mod.timeline')
                     </div>
                     <div class="tab-pane col-md-10" id="profile-v" >

                     </div>
                     <div class="tab-pane" id="messages-v">Messages Tab.</div>
                     <div class="tab-pane" id="settings-v">Settings Tab.</div>
                 </div>
             </div>
             <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <ul class="nav nav-tabs" role="tablist">
           <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">#</a></li>
           <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab">Popular</a></li>
           <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Commented</a></li>
           <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Forum</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">

            <div id="gpr-kominfo-widget-container"></div>
             <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
          </div>
          <div role="tabpanel" class="tab-pane" id="popular">
            include('post.mod.popular')
          </div>
          <div role="tabpanel" class="tab-pane" id="messages">
            include('post.mod.commented')
          </div>
          <div role="tabpanel" class="tab-pane" id="settings">...</div>
        </div>

      </div>

    </div>
	</div>
  </div>
@endsection
