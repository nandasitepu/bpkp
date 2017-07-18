<template>

</template>

<template>
  <div >
    <div class="panel panel-default">
      <div class="panel-heading">

        <strong>Detail Penugasan</strong>

      </div>
      <div class="panel-body">
        <div class="" v-show="showTugas(tugas.id)">

        </div>

      </div>
      <div class="panel-footer">
      </div>
    </div>
    <form class="" action="#" method="post">
      <div class="table table-responsive" >
        <table class="table table-condensed table-hover" style="background-color:#fff">
          <thead>
          <tr class="text-primary bold text-center">
            <td class="col-xs-">No</td>
            <td class="col-xs-3">ST/ND</td>
            <td class="col-xs-1">Tanggal</td>
            <td class="col-xs-3">Uraian</td>
            <td class="col-xs-3">Laporan</td>
            <td class="col-xs-2">Action</td>
          </tr>
        </thead>
          <tbody>
            <tr v-for="t in tugas.data">
              <td>{{t.id}}</td>

              <td v-show="!formTugas(t.id)">{{t.no_st_nd }}</td>
              <td v-show="formTugas(t.id)">
                <input type="text" name="" value="" class="form-control input-sm" v-model="editData.no_st_nd">
               </td>

              <td v-show="!formTugas(t.id)">{{t.tanggal_st_nd | moment}}</td>
              <td v-show="formTugas(t.id)">
                <input type="text" name="" value="" class="form-control input-sm" v-model="editData.tanggal_st_nd">
              </td>

              <td v-show="!formTugas(t.id)">{{t.uraian}}</td>
              <td v-show="formTugas(t.id)">
                <input type="text" name="" value="" class="form-control input-sm" v-model="editData.uraian">
              </td>

              <td v-show="!formTugas(t.id)">{{t.no_laporan}}</td>
              <td v-show="formTugas(t.id)">
               <input type="text" name="" value="" class="form-control input-sm" v-model="editData.no_laporan">
              </td>
              <td class="col-md-2 col-xs-4">
                <div class="btn-group btn-group-xs">
                  <button type="button" class="btn btn-default" @click.prevent="showTugas(t.id)">
                    <i class="fa fa-eye fa-fw"></i>
                  </button>
                  <button type="button" class="btn btn-default" @click.prevent="editTugas(t.id)">
                    <i class="fa fa-edit fa-fw"></i>
                   </button>
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-trash-o fa-fw"></i>
                   </button>
                   <button type="button" class="btn btn-default" @click.prevent="editForm=false " >
                     <i class="fa fa-times fa-fw"></i>
                    </button>
                </div>
               </td>

            </tr>

          </tbody>
        </table>
      </div>
    </form>

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
        url:'api/tugas',

        editForm: "",
        editData: {
          no_st_nd: '',
          tanggal_st_nd: '',
          uraian: '',
          no_laporan:'',
        },

        singleForm: "",
        singleData: {
          id: '',
          no_st_nd: '',
          tanggal_st_nd: '',
          uraian: '',
          daltu:'',
          dalnis:'',
          kt:'',
          penandatangan:'',
          pegawai_tim:'',
          no_laporan:'',
          tanggal_laporan:''
        }
      }
    },
    created:function(){
      this.indexTugas()
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
      editTugas(tugasId) {
        this.tugas.data.forEach((t,i)=>{
          if(t.id==tugasId){
            this.editData=t;
          }
        });
        return this.editForm=tugasId;
      },

      // Show Edit Form Tugas
      formTugas(tugasId) {
        if(this.editForm==tugasId) {
          return true;
        }
        return false;
      },

      // Button Show Tugas
      showTugas(tugasId) {
        this.tugas.data.forEach((t,i)=>{
          if(t.id==tugasId){
            this.singleData=t;
          }
        });
        return this.singleForm=tugasId;
      },

      // show Detail Tugas
      singleTugas(tugasId) {
        if (this.singleForm==tugasId) {
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
      moment: function (date) {
        moment.locale("id");
        return moment(date).format('DD MMM YY');
      },
    }
  }
</script>
