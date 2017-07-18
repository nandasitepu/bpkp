<template>
  <div>
    <div class="text-center">
      <!-- Menu Tugas -->
      <router-link class="btn btn-primary btn-sm btn-outline" to="/tugas">
      &nbsp; Daftar Tugas &nbsp;<i class="fa fa-th-list"></i>
      </router-link>

      <router-link class="btn btn-primary btn-sm btn-outline" to="/tugas/show">
      &nbsp; Detail &nbsp; <i class="fa fa-star-o"></i>
      </router-link>

      <router-link class="btn btn-primary btn-sm btn-outline" to="/tugas/tambah">
      &nbsp; Tambah &nbsp;  <i class="fa fa-plus-circle"></i>
      </router-link>
    </div>
    <hr>
    <div class="panel panel-default" v-for="t in tugas.data">
      <div class="panel-heading">
        <strong>Penugasan:   <span class="label label-primary">{{t.no_st_nd }}</span> </strong>
        <hr>
        <p> Tanggal ST/ND : &nbsp;  <span class="label label-success">{{t.tanggal_st_nd | date }}</span></p>
        <p> Uraian Tugas  : &nbsp;  {{t.uraian}} </p>
      </div>
      <div class="panel-body">
          <strong>Data Pelaksanaan:</strong>
          <hr>
        <div class="row">

          <div class="col-md-4">
            <p>Pengendali Mutu:</p>
            <p>Pengendali Teknis : </p>
            <p>Ketua Tim:</p>
          </div>
          <div class="col-md-4">
            <p>Anggota Tim:</p>

            <p>Hari Penugasan:</p>
          </div>
          <div class="col-md-4">
            <p>Anggaran : </p>
            <p>Mulai : </p>
            <p>Selesai: </p>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <strong>Pelaporan:</strong>
        <hr>
        <p> Tanggal Laporan: &nbsp; {{t.tanggal_laporan | date}}</p>
        <p> Nomor Laporan: &nbsp; {{t.no_laporan }}</p>
        <p> Rekomendasi/Temuan:  </p>
      </div>
    </div>
  </div>
</template>

<script>
  import axios from 'axios'
  import moment from 'moment'

  export default {
    data() {
      return {
        tugas:[],
        loading:false,
        url:'../api/tugas',
      }
    },
    created:function(){
      this.indexTugas()
    },

    methods:{
      indexTugas() {
        var vm = this
        this.loading=true;
        axios.get(this.url)
          .then(function(response){
             Vue.set(vm.$data, "tugas" , response.data.tugas)
          })
        this.loading=false;
      },
    },

    filters: {
      short: function(value) {
        return  value.length > length ?
        value.substring(0, 300) + "..." :
        value
      },
      // Format Date
      date (date){
        moment.locale("id");
        return moment(date).format('DD MMMM YY');
      }
    }
  }
</script>
