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
    <!--  Pagination -->
    <h5>Pagination</h5>
    <ul class="pagination pagination-sm pull-right">
      <li v-if="pagination.current_page > 1">
          <a href="#" aria-label="Previous"
             @click.prevent="changePage(pagination.current_page - 1)">
              <span aria-hidden="true">«</span>
          </a>
      </li>
      <li v-for="page in pagesNumber"
          v-bind:class="[ page == isActived ? 'active' : '']">
          <a href="#"
             @click.prevent="changePage(page)">{{ page }}</a>
      </li>
      <li v-if="pagination.current_page < pagination.last_page">
          <a href="#" aria-label="Next"
             @click.prevent="changePage(pagination.current_page + 1)">
              <span aria-hidden="true">»</span>
          </a>
      </li>
    </ul>
    <!-- Detail Penugasan -->
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
        pagination: {
          total: '',
          per_page: 5,
          from: '',
          to: '',
          current_page: 1
        },
        offset: 1,
        loading:false,
        resource_url: '/api/tugas',
      }
    },
    created:function(){
      this.indexTugas()
    },

    computed: {
        isActived: function () {
            return this.pagination.current_page;
        },
        pagesNumber: function () {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
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
