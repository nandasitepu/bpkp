<template>

  <div>
    <div class="panel panel-default">
      <div class="panel panel-body">
    
        <div>
          <span class="label label-success" style="font-size:14px"><b>Daftar Pegawai</b></span>
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
        </div>

        <hr>

        <div>
          <div class="table table-responsive">
            <table class="table table-condensed table-hover table-bordered" style="background-color:#fff">
              <thead>
                <tr class="text-primary bold text-center">
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
                      <img v-bind:src="'/img/pegawai/all/' + p.foto" alt="" style="max-width:24px">
                    </div>
                  </td>
                </tr>
              
            
              </tbody>
            </table>
          </div>
        </div>

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
        pagination: {
          total: '',
          per_page: 5,
          from: '',
          to: '',
          current_page: 1
        },
        offset: 1,
        loading:false,
        url:'api/pegawai',
      }
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

    created:function(){
      this.fetchDataPegawai()
     },
    methods:{
      fetchDataPegawai(page) {
        var vm = this
        this.loading=true;
        axios.get('/api/pegawai?page=' + page)
          .then(function(response){
             Vue.set(vm.$data, 'pegawai', response.data.pegawai)
             Vue.set(vm.$data, 'pagination', response.data.pagination)
          })
        this.loading=false;
      },
      changePage: function (page) {
          this.pagination.current_page = page;
          this.fetchDataPegawai(page);
      }
     }
  }
</script>
