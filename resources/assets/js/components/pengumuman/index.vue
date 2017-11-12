<template>
  <div>
    <div class="panel panel-default">
      <div class="panel panel-body">
        <hr>
        <div>
          <div class="table table-responsive">
            <table class="table table-condensed table-hover table-bordered" style="background-color:#fff">
              <thead>
                <tr class="text-primary bold text-center">
                  <td>No</td>
  
                  <td>Pengumuman</td>
                  <td>Tanggal</td>
        
                  <td>Action</td>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr v-for="p in pengumuman.data">
                  <td>{{p.id}}</td>
                  <td>{{p.judul}}</td>
  
                  <td>{{p.tanggal | date}}</td>
            
                  <td class="col-md-2 col-xs-4">
                    <div class="btn-group btn-group-xs">
                      <button type="button" class="btn btn-default">
                        <i class="fa fa-eye fa-fw"></i>
                      </button>
                      <button type="button" class="btn btn-default">
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
        pengumuman:[],
        loading:false,
        search:'',
        url:'/api/pengumuman'
      }
    },
    created:function(){
      this.fetchDataPengumuman()
    },
    methods:{
      fetchDataPengumuman() {
        var vm = this
        this.loading=true;
        axios.get(this.url + '?search=' + this.search)
          .then(function(response){
             Vue.set(vm.$data, 'pengumuman', response.data.pengumuman)
          })
        this.loading=false;
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
