<template>
  <div class="panel panel-default">
    <div class="panel-heading text-center">
      <h4>Daftar Pegawai BPKP</h4>
      <div class="input-group-sm">
        <span class="input-group-addon">Search by Name:</span>
        <input @keyup="fetchDataPegawai()" type="text" name="search" class="form-control" v-model="search">
      </div>

    </div>
    <div class="panel-body">

      <div class="table-responsive">
        <table class="table table-condensed">
          <thead class="text-center bold">
            <tr>
              <td>No</td>
              <td>Nama</td>
              <td>NIP</td>
              <td>Pangkat</td>
              <td>Jabatan</td>
              <td>Action</td>
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
                <a class="btn btn-default btn-sm" href="#">
                  <i class="fa fa-cog"></i> Details
                </a>
              </td>
            </tr>
          </tbody>
        </table>
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
