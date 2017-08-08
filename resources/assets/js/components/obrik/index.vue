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
    
    <div v-if="loading">
      Loading Data ...
    </div>
    <div class="row">
      <div id="obrik-grid" v-for="p in obrik.data">
        
        <div class="col-md-3">
          <div class="berita-image">
            <img v-bind:src="'/img/no-image.png'" class="img-thumbnail" alt="Image" width="100%">
          </div>
        </div>
        <div class="col-md-9">
            <span class="label label-primary">Editor: NS</span>
            <span class="label label-primary">Updated: {{p.updated_at | date}}</span>
              <div class="pull-right">
              <a :href="obrik +'/'+p.id"><button class="btn btn-xs btn-default cool"><i class="fa fa-fw fa-eye"></i> Detail</button></a>
              <a href="#"><button class="btn btn-xs btn-primary cool"><i class="fa fa-fw fa-edit"></i> Edit</button></a>
            </div>
            <p></p>
            <p><strong>Nama Obrik:</strong> &nbsp; <span class="text-capitalize"> {{p.nama }}</span></p>
            <p><strong>Pimpinan:</strong> &nbsp; {{p.pimpinan}}</p>
            <p><strong>Lokasi:</strong> &nbsp; Kabupaten X</p>
            
            <hr>
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
        loading: false,
        obrik:[],
        search:'',
        url:'/api/obrik'
      }
    },
    created:function(){
      this.fetchDataObrik()
    },
    methods:{
      fetchDataObrik() {
        var vm = this
        this.loading = true
        axios.get(this.url + '?search=' + this.search)
          .then(function(response){
             Vue.set(vm.$data, 'obrik', response.data.obrik )
          })
          this.loading = false
      },
      editIt(pId) {
        return this.editForm=pId;
      },
      showIt(pId) {
        if (this.editForm==pId) {
          return true;
        }
        return false;
      }
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
