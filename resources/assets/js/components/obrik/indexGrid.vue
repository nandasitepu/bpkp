<template>
  <div class="">
    <div class="panel panel-default" v-for='obr in obrik.data'>
      <div class="btn pull-right"><i class="fa fa-times"></i></div>
      <div @click="editIt(obr.id)" class="btn pull-right"><i class="fa fa-pencil"></i></div>
      <form>
        <div class="panel-body" >
          <h4>
            <span class="label label-primary" v-show="!showIt(obr.id)">{{obr.nama | eachWord}}</span>
          </h4>
          <label v-show="showIt(obr.id)">Nama Instansi</label>
          <input v-show="showIt(obr.id)" style="width:500px" type="text" class="form-control input-sm" v-model="editObrik.nama">
          <hr>

          <span v-show="!showIt(obr.id)">
            <span class="bold">Pimpinan:</span>
            &nbsp; &nbsp; {{obr.pimpinan}} &nbsp; | &nbsp;
          </span>
          <label v-show="showIt(obr.id)">Pimpinan</label>
          <input v-show="showIt(obr.id)" style="width:400px; padding:5px" type="text" class="form-control input-sm" v-model="editObrik.pimpinan">


          <span v-show="!showIt(obr.id)">
            <span class="bold">Anggaran:</span>
            &nbsp; &nbsp; {{obr.anggaran | decimal}} &nbsp; | &nbsp;
          </span>
          <label v-show="showIt(obr.id)">Anggaran</label>
          <input v-show="showIt(obr.id)" style="width:300px; padding:5px" type="text" class="form-control input-sm" v-model="editObrik.anggaran">

          <span v-show="!showIt(obr.id)">
            <span class="bold">Terakhir Diubah:</span>
            &nbsp; &nbsp;{{obr.updated_at | moment}} &nbsp; &nbsp;
          </span >
        </div>
        <div style="padding:15px" class="text-right">
          <button v-show="showIt(obr.id)" type="submit" class="btn btn-sm btn-info">Ok</button>
          <button @click.prevent="editForm=false" v-show="showIt(obr.id)" class="btn btn-sm btn-success">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
  import axios from 'axios'
  import moment from 'moment'

  export default {
    data() {
      return {
        obrik:[],
        search:'',
        editForm: "",
        editObrik: {nama:'', pimpinan:'', anggaran:''},
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
      addObrik() {
        axios.post('/notebook',this.notebookData)
        .then(response=>{
          this.notebookData="";
          this.errors="";
          this.$router.push('/');
        })
        .catch(error=>{
          this.errors=error.response.data;
        })
      },
      editIt(obrId) {
        var obrik = this.obrik.data
        obrik.forEach( (obr,i) => {
          if(obr.id==obrId) {
            this.editObrik = obr
          }
        });

        return this.editForm=obrId;
      },
      showIt(obrId) {
        if (this.editForm==obrId) {
          return true;
        }
        return false;
      }
    },
    filters: {
      // Text Shortener
      short: function(value) {
        return  value.length > length ?
        value.substring(0, 300) + "..." :
        value
      },
      // Capital First Letter
      capitalize: function (value){
        if (!value) return ''
         value = value.toString()
         return value.charAt(0).toUpperCase() + value.slice(1)
      },
      // Format Date
      moment: function (date) {
        moment.locale("id");
        return moment(date).format('LL');
      },
      decimal: function (num) {
        var p = parseFloat(num).toFixed(2).split(".");
        return "Rp" + p[0].split("").reverse().reduce(function(acc, num, i, orig) {
        return  num=="-" ? acc : num + (i && !(i % 3) ? "." : "") + acc;
      }, "") + "," + p[1];
      },
      eachWord: function (str){
        return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
      }
    }
  }
</script>
