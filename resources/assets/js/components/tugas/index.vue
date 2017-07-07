<template>
  <div>
      <div class="table table-responsive">
        <table class="table table-condensed table-hover" style="background-color:#fff">
          <thead>
            <tr class="text-primary text-center bold ">
              <td>No</td>
              <td>Surat Tugas / Nota Dinas</td>
              <td>Tanggal</td>
              <td>Uraian</td>
              <td>Action</td>
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
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-eye"></i>
                  </button>
                  <button type="button" class="btn btn-default">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button type="button" class="btn btn-default">
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
        url:'../api/tugas'
      }
    },
    created:function(){
      this.fetchDataTugas()
    },
    methods:{
      fetchDataTugas() {
        var vm = this
        this.loading=true;
        axios.get(this.url + '?search=' + this.search)
          .then(function(response){
             Vue.set(vm.$data, 'tugas', response.data.tugas)
          })
        this.loading=false;
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
