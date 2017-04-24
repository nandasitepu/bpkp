<template>
  <div class="container">
      <div class="row">
          <div class="col-md-10">
              <div class="panel panel-default">
                <div class="panel-heading text-center">
                  <h4>Daftar Pegawai BPKP Oke</h4>
                  <div class="input-group-sm">
                    <span class="input-group-addon">Search by Name:</span>
                    <input @keyup="fetchDataPegawai()" type="text" name="search" class="form-control" v-model="search">
                  </div>

                </div>
                <div class="panel-body">

                  <div class="table-responsive">
                    <table class="table table-condensed">
                      <thead class="text-center bold">
                        <tr>
                          <td>No</td>
                          <td>Nama</td>
                          <td>NIP</td>
                          <td>Pangkat</td>
                          <td>Jabatan</td>
                          <td>Action</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr v-for="p in pegawai.data">
                          <td>{{p.id}}</td>
                          <td>{{p.nama}}</td>
                          <td>{{p.nip}}</td>
                          <td>{{p.pangkat}}</td>
                          <td>{{p.jabatan}}</td>
                          <td class="text-center">
                            <a class="btn btn-default btn-sm" href="#">
                              <i class="fa fa-cog"></i> Settings
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
          </div>
          <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-body text-center">
                <a class="btn btn-default btn-sm" href="#">
                  <i class="fa fa-lg fa-cog text-primary"></i>&nbsp; Dashboard
                </a>

                <div class="btn-group btn-group-sm">
                  <hr>
                  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i> User</a>
                  <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
                    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
                    <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
                  </ul>
                </div>
              </div>
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
        pegawai:{},
        search:'',
        url:'api/pegawai'
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
