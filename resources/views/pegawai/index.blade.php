@extends('main')

@section('stylesheets')
<style media="screen">
  .success-transition {
    transition: all .5s ease-in-out;
  }

  .success-enter, .success-leave {
    opacity: 0;
  }
</style>
@endsection

@section('scripts')
<script src="js/vue.js"></script>
<script type="text/javascript" src="js/pegawai.js"></script>
@endsection

@section('content')
<div class="container" id="vue">
    <div class="row">
      <div class="col-md-8">
        <div class="alert alert-danger" v-show="!isValid">
          <ul>
            <li v-show="!validation.nama">Nama Harus Ada</li>
            <li v-show="!validation.nip">NIP Harus Ada</li>
            <li v-show="!validation.pangkat">Pangkat Harus Ada</li>
            <li v-show="!validation.jabatan">Jabatan Harus Ada</li>
          </ul>
        </div>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-primary">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title F14">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Tambah Pegawai
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <form action="#" @submit.prevent="addPegawai" method="POST" >
                <div class="form-group">
                  <label for="nama">Nama:</label>
                  <input v-model="newPegawai.nama" name="nama" type="text" class="form-control" id="nama"  placeholder="nama">
                </div>
                <div class="form-group">
                  <label for="nip">NIP:</label>
                  <input v-model="newPegawai.nip" name="nip" type="text" class="form-control" id="nip" placeholder="nip">
                </div>
                <div class="form-group">
                  <label for="pangkat">Pangkat:</label>
                  <input v-model="newPegawai.pangkat" name="pangkat" type="text" class="form-control" id="pangkat" placeholder="pangkat">
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan:</label>
                  <input v-model="newPegawai.jabatan" name="jabatan" type="text" class="form-control" id="jabatan" placeholder="jabatan">
                </div>
                <div class="form-group">
                  <button :disabled="!isValid" class="btn btn-primary btn-sm btn-block" type="submit">
                     Simpan
                  </button>
                </div>
              </form>
            </div>

            </div>
          </div>
        </div>
        <hr>
        <div class="table table-responsive ">
          <table class="table-bordered table-condensed">
            <thead class="center">
              <th>ID</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Pangkat</th>
              <th>Jabatan</th>
              <th>Keterangan</th>
              <th width="100px">Action</th>
            </thead>
            <tbody>
              <tr v-for="p in pegawai">
                <td > @{{p.id}} </td>
                <td> @{{p.nama}}</td>
                <td> @{{p.nip}} </td>
                <td> @{{p.pangkat}} </td>
                <td> @{{p.jabatan}} </td>
                <td> @{{p.keterangan}} </td>
                <td>
                    <span class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i></a>
                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>  </a>
                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  </a>
                    </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading center F14">
            Menu
          </div>
          <div class="panel-body">
            <span class="btn-group" role="group" aria-label="Basic example">
              <a href="#" class="btn btn-default btn-xs">
                +  <a href="#" class="btn btn-primary btn-xs">Home</a>
              </a>
              <a href="#" class="btn btn-default btn-xs">

                + <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-primary btn-xs">Pegawai</a>
              </a>
            </span>


          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
