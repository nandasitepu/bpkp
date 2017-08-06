<template>
  <div class="row">
      <div class="col-md-8">
        <div>
          <h4><strong>Aparat Pengawasan Intern Pemerintah <span class="label label-info"> (APIP)</span></strong>
          <br>
        
          </h4>
          <hr>
          <span></span>
          <div class="main">
            <p>Aparat Pengawasan Intern Pemerintah (APIP) adalah instansi pemerintah yang dibentuk dengan tugas melaksanakan pengawasan intern (audit intern) di lingkungan pemerintah pusat dan/atau pemerintah daerah,</p>
            <blockquote cite="http://www.bpkp.go.id">
              <small> terdiri dari:
                    <li>Badan Pengawasan Keuangan dan Pembangunan (BPKP)</li>
                    <li>Inspektorat jenderal kementerian, inspektorat/unit pengawasan intern pada kementerian negara, inspektorat utama/inspektorat lembaga pemerintah non kementerian, inspektorat/unit pengawasan intern pada kesekretariatan lembaga tinggi negara dan lembaga negara, </li>
                    <li>Inspektorat provinsi/kabupaten/kota; dan unit pengawasan intern pada badan hukum pemerintah lainnya sesuai dengan peraturan perundang-undangan</li>

              </small>
            </blockquote>
          </div>
        
        </div>
        
        <div class="text-center">
          <div class="col-md-5 col-xs-12">
            <a href="http://118.97.51.140:1001/">
              <img class="img-thumbnail"  v-bind:src="'/img/web/penilaian_apip.png'" alt="" height="100px" >
            </a>
          </div>
          <div class="col-md-4 col-xs-12">
            <a href="#"><img class="img-thumbnail"  v-bind:src="'/img/instansi/aaipi.jpg'"  alt="" height="100px" ></a>
          </div>
          <div class="col-md-3 col-xs-12">
            <a href="#"><img class="img-thumbnail"  v-bind:src="'/img/instansi/iia.jpg'"  alt="" height="100px" ></a>
          </div>

        </div>
      </div>
      <div class="col-md-4 text-center">
        <div class="panel panel-default">
          <div class="panel-body">
              <div class="text-center">
                 <span>
                  <a :href="'/app/apip/lvup'" class="btn btn-sm btn-default">Peningkatan Kapabilitas <i class="fa fa-fw fa-line-chart "></i></a>
                </span>
                <div class="col-md-12 col-xs-10">
                  <small>Sulbar</small>
                  <div class="">
                    <img class="img-thumbnail" v-bind:src="'/img/kab/sulbar.jpg'" height="75%" alt=""   >
                  </div>
                  <br>
                  <a :href="'/app/apip/data/' + '1' " class="btn btn-default btn-xs btn-block"><i class="fa fa-fw fa-external-link"></i></a>
                </div>
                <div class="col-md-4 col-xs-6 ">
                  <small>Mamuju</small>
                  <div class="">
                    <img class="img-thumbnail" v-bind:src="'/img/kab/mamuju.jpg'"  alt="" height="100px" >
                  </div>
                  <br>
                  <a :href="'/app/apip/data/' + '2' " class="btn btn-default btn-xs btn-block"><i class="fa fa-fw fa-external-link"></i></a>
                  <br>
                </div>
                <div class="col-md-4 col-xs-6 ">
                  <small>Majene</small>
                  <div class="">
                    <img class="img-thumbnail" v-bind:src="'/img/kab/majene.jpg'"  alt="" height="100px" >
                  </div>
                  <br>
                  <a :href="'/app/apip/data/' + '3' " class="btn btn-default btn-xs btn-block"><i class="fa fa-fw fa-external-link"></i></a>
                  <br>
                </div>
                <div class="col-md-4 col-xs-6 ">
                  <small>Polman</small>
                  <div class="">
                    <img class="img-thumbnail" v-bind:src="'/img/kab/polman.jpg'"  alt="" height="100px" >
                  </div>
                  <br>
                  <a :href="'/app/apip/data/' + '4' " class="btn btn-default btn-xs btn-block"><i class="fa fa-fw fa-external-link"></i></a>
                  <br>
                </div>
                <div class="col-md-4 col-xs-6 ">
                  <small>Mamasa</small>
                  <div class="">
                    <img class="img-thumbnail" v-bind:src="'/img/kab/mamasa.jpg'"  alt="" height="100px" >
                  </div>
                  <br>
                  <a :href="'/app/apip/data/' + '5' " class="btn btn-default btn-xs btn-block"><i class="fa fa-fw fa-external-link"></i></a>
                  <br>
                </div>
                <div class="col-md-4 col-xs-6 ">
                  <small>Matra</small>
                  <div class="">
                    <img class="img-thumbnail" v-bind:src="'/img/kab/matra.jpg'"  alt="" height="100px" >
                  </div>
                  <br>
                  <a :href="'/app/apip/data/' + '6' " class="btn btn-default btn-xs btn-block"><i class="fa fa-fw fa-external-link"></i></a>
                  <br>
                </div>
                <div class="col-md-4 col-xs-6 ">
                  <small>Mateng</small>
                  <div class="">
                    <img class="img-thumbnail" v-bind:src="'/img/kab/mateng.jpg'"  alt="" height="100px" >
                  </div>
                  <br>
                  <a :href="'/app/apip/data/' + '7' " class="btn btn-default btn-xs btn-block"><i class="fa fa-fw fa-external-link"></i></a>
                  <br>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  export default {
  }
</script>

<style lang="css">

</style>
