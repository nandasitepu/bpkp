<template lang="html">
  <div>
    <div class="row">
      <div class="col-md-12">
        <h4>Bidang Pengawasan <span class="label label-primary">Program Pelaporan dan Pembinaan APIP (P3A)</span></h4>
      </div>
      <hr>
      </div>
      <div class="col-md-7">
        <div class="row">
          <div class="col-md-6">
            <br>  <br>
            <img v-bind:src="'../img/bid/korwasp3a.jpg'" alt="" width="100%">
          </div>

          <div class="col-md-6">
            <h5><b>Tim P3A</b></h5>
            <img v-bind:src="'../img/bid/bid_p3a.jpg'" alt="" width="100%">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="text-justify">
              <hr>
              <p>
                Bidang P3A mempunyai tugas memimpin, mengkoordinasikan, mengelola, melaksanakan kegiatan penyiapan bahan penyusunan rencana dan program kegiatan, penyiapan bahan laporan realisasi kegiatan, penyusunan laporan berkala atas hasil-hasil pengawasan serta program pembinaan APIP (termasuk pembinaan jabatan fungsional auditor/JFA di lingkungan Perwakilan dan APIP Daerah).
              </p>

              <h5>Berikut Produk Jasa Layanan Bidang P3A Sulawesi Barat:</h5>
              <ol>
                <li>Menyelenggarakan Diklat Teknis Substantif</li>
                <li>Menyelenggarakan Diklat Sertifikasi dan Pembinaan Jabatan Fungsional Auditor</li>
                <li>Pengolahan Data Hasil Pengawasan (Aplikasi SIM-HP)</li>
                <li>Pembinaan dan Peningkatan Tata Kelola APIP</li>
              </ol>
              <b>Plus : </b>
              Sistem Pengendalian Intern Pemerintah (SPIP)</div>
          </div>
        </div>
      </div>
      <div class="col-md-5 well">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            @include('charts.apip')
          </div>
          <div class="panel-footer">

          </div>
        </div>
        <div class="panel panel-warning">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            @include('charts.spip')
          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>

    </div>
  </div>


</template>
