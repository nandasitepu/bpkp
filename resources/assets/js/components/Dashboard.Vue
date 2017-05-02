<template >
    <div class="container">
      
      <hr>
      <div class="row">
        <div class="col-md-9">
          TEST
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
        url:'../api/pegawai'
      }
    },
    created:function(){
      this.fetchDataPegawai()
    },
    methods:{
      fetchDataPegawai() {
        var vm = this
        axios.get(this.url + '?search=' + this.search)
          .then(function(response){
             Vue.set(vm.$data, 'pegawai', response.data.pegawai)
          })
      }
    }
  }
</script>
