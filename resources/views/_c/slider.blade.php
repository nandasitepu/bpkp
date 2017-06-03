<style media="screen">
/* fade on slider */
  .carousel-fade .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
  -moz-transition-property: opacity;
  -o-transition-property: opacity;
  transition-property: opacity;
  }
  .carousel-fade .carousel-inner .active {
  opacity: 1 !important;
  }
  .carousel-fade .carousel-inner .active.left,
  .carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
  }
  .carousel-fade .carousel-inner .next.left,
  .carousel-fade .carousel-inner .prev.right {
  opacity: 1;
  }
  .carousel-fade .carousel-control {
  z-index: 2;
  }
</style>
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="border: 1px solid #000; box-shadow: 1px 1px 1px 2px #eee">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="/img/web/gedung-bpkp.jpg" style="width: 100%;height:400px" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <div style="background-color:#aaa; padding: 5px">
            <h4>Perwakilan BPKP Sulawesi Barat</h4>
            <p>\\ Selamat Datang//</p>

          </div>
          <br>
          <p><a class="btn btn-sm btn-primary" href="{{route('posting.bpkp')}}" role="button">Masuk &raquo;</a></p>
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
          <p><a class="btn btn-info btn-sm" href="#" role="button">Selengkapnya &raquo;</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="third-slide" src="/img/web/struktur.jpg" style="width: 100%;height:400px" alt="Third slide">
      <div class="container">
        <div class="carousel-caption">
          <div style="background-color:#aaa; padding: 5px">
            <h4>Tim BPKP</h4>
            <p>\\ Mengawal Pembangunan Nasional//</p>
          </div>
          <br>
          <p><a class="btn btn-success btn-sm" href="#" role="button">Lihat Galeri &raquo;</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="fourth-slide" src="/img/web/all.jpg" style="width: 100%;height:400px" alt="Fourth slide">
      <div class="container">
        <div class="carousel-caption">
          <div style="background-color:none; padding: 5px">
            <h4>Siap Melayani </h4>
            <p>\\ SulBar Hebat //</p>
          </div>
          <br>
          <p>
            <a class="btn btn-warning btn-sm " href="#" role="button">BPKP Provinsi Sulawesi Barat &raquo;</a>
          </p>
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
