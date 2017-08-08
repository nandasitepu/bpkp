<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <!-- Obrik Menu -->
                <router-link to="/admin/dashboard/obrik">
                    <span class="btn btn-default btn-sm"> Data &nbsp;
                        <span  role="button">
                         <i class="fa fa-fw fa-cubes"></i>
                        </span>
                    </span>
                </router-link>

                <router-link to="/admin/dashboard/obrik/table">
                <span class="btn btn-default btn-sm"> Table &nbsp;
                    <span  role="button">
                     <i class="fa fa-fw fa-line-chart"></i>
                    </span>
                </span>
                </router-link>

                <router-link to="">
                <span class="btn btn-default btn-sm"> Tambah Obrik &nbsp;
                    <span  role="button">
                    <i class="fa fa-fw fa-plus-circle"></i>
                    </span>
                </span>
                </router-link>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <div class="input-group">
                <div class="input-group-btn search-panel">
                    
                </div>
                <input type="text" class="form-control input-sm text-center bold" name="search" placeholder=".. Nama Obrik ..">
                <input type="hidden" name="search_param" value="all" id="search_param">
                <div class="input-group-btn search-panel">
                    <div class="input-group-btn" >
                    <a href="#">
                        <button class="btn btn-default btn-sm" type="button"> <i class="fa fa-search-plus"></i></button>
                    </a>
                    </div>
                </div>
                </div>
            </div> 
         </div>
         <br>
        <div class="row">
            <div class="col-md-12">
                <div class="table table-responsive" >
                <table class="table table-bordered table-condensed table-striped" style="background-color:#fff">
                    <thead>
                        <tr class="text-center bold">
                            <td>No</td>
                            <td>Obyek Pemeriksaan</td>
                            <td>Pimpinan</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <tbody>
                  

                    <tr>
                        <td class="text-center">1</td>
                        <td>Pemerintah Provinsi Sulawesi Barat</td>
                        <td></td>
                        <td class="text-center">
                            50 OPD
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Pemerintah Kabupaten Mamuju</td>
                        <td>Pimpinan</td>
                        <td class="text-center">
                            50 OPD
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Pemerintah Kabupaten Majene</td>
                        <td></td>
                        <td class="text-center">
                            50 OPD
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>Pemerintah Kabupaten Polewali Mandar</td>
                        <td></td>
                        <td class="text-center">
                            50 OPD
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td>Pemerintah Kabupaten Mamasa</td>
                        <td></td>
                        <td class="text-center">
                            50 OPD
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td>Pemerintah Provinsi Mamuju Tengah</td>
                        <td></td>
                        <td class="text-center">
                            50 OPD
                        </td>
                    </tr>
                     <tr>
                        <td class="text-center">7</td>
                        <td>Pemerintah Provinsi Mamuju Utara</td>
                        <td></td>
                        <td class="text-center">
                            50 OPD
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="col-md-12">
                <obrikChart></obrikChart>
            </div>
         </div>
    </div>
</template>
<style>

</style>
<script>
  import axios from 'axios'
  import moment from 'moment'
  import obrikChart from '../charts/obrikChart.vue'

  export default {
    data() {
      return {
        
        obrik:[],
        search:'',
        url:'/api/obrik'
      }
    },
    components: {
        'obrikChart': obrikChart
    },
    created:function(){
      this.fetchDataObrik()
    },
    methods:{
      fetchDataObrik() {
        var vm = this
       
        axios.get(this.url + '?search=' + this.search)
          .then(function(response){
             Vue.set(vm.$data, 'obrik', response.data.obrik )
          })
      },
      editIt(pId) {
        return this.editForm=pId;
      },
      showIt(pId) {
        if (this.editForm==pId) {
          return true;
        }
        return false;
      },
      // RENDER CHART
    watch: {
    // call again the method if the route changes
    '$route': 'fetchDataObrik'
    },


    },
    filters: {
      short: function(value) {
      return  value.length > length ?
        value.substring(0, 300) + "..." :
        value
      },
      capitalize: function (value){
        if (!value) return ''
         value = value.toString()
         return value.charAt(0).toUpperCase() + value.slice(1)
      },
       // Format Date
      date (date){
        moment.locale("id");
        return moment(date).format('LL');
      }
    }
  }


</script>
