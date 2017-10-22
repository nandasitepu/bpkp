<template>

  <div>
    <div class="table table-responsive">
      <table class="table table-condensed table-striped table-bordered" style="background-color:#fff">
        <thead class="text-center bold">
          <tr>
            <td>No</td>
            <td>Nama</td>
            <td>NIP</td>
            <td>Pangkat</td>
            <td>Jabatan</td>
            <td>Foto</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="p in pegawai.data">
            <td>{{p.id}}</td>
            <td>{{p.nama}}</td>
            <td>{{p.nip}}</td>
            <td>{{p.pangkat}}</td>
            <td>{{p.jabatan}}</td>
            <td class="text-center">
              <div v-if="p.foto === null ">
                <img class="img-circle" v-bind:src="'/img/web/profil_img.png'" alt="" style="max-width:24px">
              </div>
              <div v-else>
                <img v-bind:src="'/img/pegawai/' + p.foto" alt="" style="max-width:24px">
              </div>
            </td>
          </tr>
        </tbody>
      </table>
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
        url:'/api/pegawai'
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
