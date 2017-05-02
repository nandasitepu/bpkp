<template>

    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-center">Berita // Perwakilan BPKP Provinsi Sulawesi Barat</h4>
            <h6 class="text-center">Made with
                <i class="fa fa-fw fa-heart text-danger"></i> by <a href="#" class="btn btn-primary btn-xs" target="_blank">Nanda Sitepu </a>
            </h6>
          </div>
        </div>
        <hr>

        <div class="row">
          <div class="col-md-4">
            <div class="berita-image">
              <img src="http://lorempixel.com/150/150?rand=1" class="img-thumbnail" alt="Image" width="100%">
            </div>
          </div>
          <div class="col-md-8">

              <div id="berita">
                <div class="berita-title">

                </div>
                <div class="berita-info">
                  <span class="label label-default">Uploader: NS</span>
                  <span class="label label-default"></span>
                  <span class="label label-default">Category: Berita</span>
                </div>
                <hr>
                <div class="berita-body">
                  <p>

                  </p>
                </div>
                <hr>
                <div class="berita-footer">
                  <div class="text-right">
                    <a href="#"><button class="btn btn-sm btn-default"><i class="fa fa-fw fa-eye"></i> Show</button></a>

                    <a href="#"><button class="btn btn-sm btn-primary"><i class="fa fa-fw fa-edit"></i> Edit</button></a>


                  </div>
                </div>
                <hr>
              </div>

          </div>
        </div>

        <div class="text-center">

        </div>
      </div>
    </div>

</template>
<script>
  import axios from 'axios'

  export default {
    data() {
      return {
        pegawai:[],
        search:'',
        url:'../api/pegawai'
      }
    },
    created:function(){
      this.fetchDataPegawai()
    },
    methods:{
      fetchDataPegawai() {
        var vm = this
        axios.get(this.url + '?search=' + this.search)
          .then(function(response){
             Vue.set(vm.$data, 'pegawai', response.data.pegawai)
          })
      }
    }
  }
</script>
