<template>
  <div>
   <div class="text-center">
      <!-- Menu Tugas -->
      <router-link class="btn btn-primary btn-sm btn-outline" :to="{ path: '/admin/dashboard/tugas' }" replace>
      &nbsp; List &nbsp;<i class="fa fa-th-list"></i>
      </router-link>

      <router-link class="btn btn-primary btn-sm btn-outline" :to="{ path: '/admin/dashboard/tugas/show' }" replace>
      &nbsp; Detail &nbsp; <i class="fa fa-star-o"></i>
      </router-link>

      <router-link class="btn btn-primary btn-sm btn-outline" :to="{ path: '/admin/dashboard/tugas/tambah'  }" replace>
      &nbsp; Tambah &nbsp;  <i class="fa fa-plus-circle"></i>
      </router-link>
    </div>
    <br>
    <!--  Pagination -->
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
        pagination: {
          total: '',
          per_page: '',
          from: '',
          to: '',
          current_page: 1
        },
        offset: 1,
        loading:false,
        resource_url: 'api/tugas/show',
      }
    },
    props: {
      per_page: 1,
    },
    created:function(){
      this.fetchDataTugas()
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
      fetchDataTugas(page) {
        var vm = this
        this.loading=true;
        axios.get('/api/tugas/show?page=' + page)
          .then(function(response){
             Vue.set(vm.$data, 'tugas', response.data.tugas)
             Vue.set(vm.$data, 'pagination', response.data.pagination)
          })
        this.loading=false;
      },

      changePage: function (page) {
          this.pagination.current_page = page;
          this.fetchDataTugas(page);
      }
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
