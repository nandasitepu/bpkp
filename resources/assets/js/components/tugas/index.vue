<template>
  <div>
    <div class="panel panel-default">
      <div class="panel panel-body">

        <div>
        <span class="label label-info" style="font-size:14px"><b>Daftar ST</b></span>
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
    <div class="text-center" style="margin:10px">
      <!-- Menu Tugas -->
      <router-link class="btn btn-primary btn-sm btn-outline" to="/tugas">
      &nbsp; List &nbsp;<i class="fa fa-th-list"></i>
      </router-link>

      <router-link class="btn btn-primary btn-sm btn-outline" to="tugas/show">
      &nbsp; Detail &nbsp; <i class="fa fa-star-o"></i>
      </router-link>
    </div>
    <hr>
    <form class="" action="#" method="post">
      <div class="table table-responsive">
        <table class="table table-condensed table-hover table-bordered" style="background-color:#fff">
          <thead>
          <tr class="text-primary bold text-center">
            <td class="col-xs-">No</td>
            <td class="col-xs-2">ST</td>
            <td class="col-xs-2">Tanggal</td>
            <td class="col-xs-4">Uraian</td>
            <td class="col-xs-2">Laporan</td>
            <td class="col-xs-2">Action</td>
          </tr>
        </thead>
          <tbody>
            <tr v-for="t in tugas.data">
              <i v-show="loading" class="fa fa-spinner fa-spin"></i>
              <td class="text-center">{{t.id}}</td>

              <td v-show="!formTugas(t.id)" class="text-center"><small>{{t.no_st }}</small></td>
              <td v-show="formTugas(t.id)">
                <input type="text" name="" value="" class="form-control input-sm" v-model="editData.no_st">
               </td>

              <td v-show="!formTugas(t.id)" class="text-center">{{t.tanggal_st | date}}</td>
              <td v-show="formTugas(t.id)">
                <input type="text" name="" value="" class="form-control input-sm" v-model="editData.tanggal_st">
              </td>

              <td v-show="!formTugas(t.id)">{{t.uraian}}</td>
              <td v-show="formTugas(t.id)">
                <input type="text" name="" value="" class="form-control input-sm" v-model="editData.uraian">
              </td>

              <td v-show="!formTugas(t.id)" class="text-center"><small>{{t.no_laporan}}</small></td>
              <td v-show="formTugas(t.id)">
               <input type="text" name="" value="" class="form-control input-sm" v-model="editData.no_laporan">
              </td>
              <td class="col-md-2 col-xs-4">
                <div class="btn-group btn-group-xs text-center">
                  <button type="button" class="btn btn-default" @click.prevent="showTugas(t.id)" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-eye fa-fw"></i>
                  </button>

                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
                    <i class="fa fa-edit fa-fw"></i>
                   </button>
                   
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-trash-o fa-fw"></i>
                   </button>
                </div>
               </td>

            </tr>
          </tbody>
        </table>
      </div>
    </form>
    <!-- -->

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <p>Some text in the modal.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
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
        url:'/api/tugas',

        editForm: "",
        editData: {
          no_st_nd: '',
          tanggal_st_nd: '',
          uraian: '',
          no_laporan:'',
        },

        showSingle: "",
        showData: {

        },
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
        axios.get(this.url + '?search=' + this.search)
          .then(function(response){
             Vue.set(vm.$data, 'tugas', response.data.tugas)
          })
        this.loading=false;
      },
      // Button Edit Form
      editTugas(editId) {
        this.tugas.data.forEach((t,i)=>{
          if(t.id==editId){
            this.editData=t;
          }
        });
        return this.editForm=editId;
      },

      // Show Edit Form Tugas
      formTugas(editId) {
        if(this.editForm==editId) {
          return true;
        }
        return false;
      },

      // Button Show Tugas
      showTugas(tugasId) {
        this.tugas.data.forEach((t,i)=>{
          if(t.id==tugasId){
            this.showData=t;
          }
        });
        return this.showSingle=tugasId;
      },

      // show Detail Tugas
      singleTugas(tugasId) {
        if(this.showSingle=tugasId) {
          return true;
        }
        return false;
      },



      deleteTugas(tugasId){
        return true;
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
        return moment(date).format('LL');
      }
    }
  }
</script>
