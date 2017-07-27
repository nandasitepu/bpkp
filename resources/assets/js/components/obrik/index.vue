<template>
  <div>
    <div class="table table-responsive" >
      <table class="table table-bordered table-condensed table-striped" style="background-color:#fff">
        <thead>
          <tr class="text-center">
            <td>No</td>
            <td>Obrik</td>
            <td>Pimpinan</td>
            <td>Detail</td>
          </tr>
        </thead>
        <tbody>
          <tr v-for="p in obrik.data">
            <td class="text-center">{{p.id}}</td>
            <td>{{p.nama | capitalize}}</td>
            <td>{{p.pimpinan}}</td>
            <td class="text-center">
              <div class="btn-group btn-group-xs">
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
        obrik:[],
        search:'',
        url:'../api/obrik'
      }
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
      }
    }
  }
</script>
