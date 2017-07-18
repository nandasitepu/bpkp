<template>
  <div>
    <div class="table table-responsive">
      <table class="table table-condensed table-hover" style="background-color:#fff">
        <thead>
          <tr class="text-primary bold">
            <th>No</th>
            <th>Surat Tugas / Nota Dinas</th>
            <th>Tanggal</th>
            <th>Uraian</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="t in tugas.data">
            <td>{{t.id}}</td>
            <td>{{t.no_st_nd}}</td>
            <td>{{t.tanggal_st_nd}}</td>
            <td>{{t.uraian}}</td>
            <td class="col-md-2 col-xs-4">
              <div class="btn-group btn-group-sm">
                <button type="button" class="btn btn-default" @click="showTugas(t.id)">
                  <i class="fa fa-eye"></i>
                </button>
                <button type="button" class="btn btn-default" @click.prevent="editTugas(t)">
                  <i class="fa fa-edit"></i>
                 </button>
                <button type="button" class="btn btn-default" @click.prevent="deleteTugas(t)">
                  <i class="fa fa-trash-o"></i>
                 </button>
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
        tugas:[],
        loading:false,
        search:'',
        url:'/api/tugas',
        pagination: {
          total: 0,
          per_page: 2,
          from: 1,
          to: 0,
          current_page: 1
        },
        offset: 4,
        formErrors:{},
        formErrorsUpdate:{},
        newTugas : {
          'no_st_nd':'',
          'uraian':''
        },
        editTugas : {
          'id':'',
          'no_st_nd:': '',
          'uraian': ''
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
      showTugas() {
        if (this.editForm==obrId) {
          return true;
        }
        return false;
      },
      editTugas(tId) {
        var tugas = this.tugas.data
        tugas.forEach( (t,i) => {
          if(obr.id==obrId) {
            this.editTugas = obr

          }
        });

        return this.editForm=obrId;
      },
      deleteTugas(){

      }

    },

    filters: {
      Short: function(value) {
      return  value.length > length ?
        value.substring(0, 300) + "..." :
        value
      }
    }
  }
</script>
