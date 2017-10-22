<template>
  <div>
  <div class="text-center">
      <!-- Menu Tugas -->
      <router-link class="btn btn-primary btn-sm btn-outline" :to="{ path: '/admin/dashboard/tugas' }" replace>
      &nbsp; List &nbsp;<i class="fa fa-th-list"></i>
      </router-link>

      <router-link class="btn btn-primary btn-sm btn-outline" :to="{ path: '/admin/dashboard/tugas/show' }" replace>
      &nbsp; Detail &nbsp; <i class="fa fa-star-o"></i>
      </router-link>

      <router-link class="btn btn-primary btn-sm btn-outline" :to="{ path: '/admin/dashboard/tugas/tambah'  }" replace>
      &nbsp; Tambah &nbsp;  <i class="fa fa-plus-circle"></i>
      </router-link>
    </div>
    <hr>
    <div class="panel panel-default">

      <div class="panel-body">
        <form class="" action="index.html" method="post" >
          <div class="row">
            <div class="col-md-12" >
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nama">No ST/ ND:</label>
                  <input type="text" class="form-control input-sm" id="" placeholder="No ST/ND">
                </div>
                <div class="form-group">
                  <label for="nama">Tanggal ST/ ND:</label>
                  <input type="text" class="form-control input-sm" id="" placeholder="Tanggal ST/ND">
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label for="uraian">Nama Penugasan:</label>
                  <textarea class="form-control" rows="4" placeholder="Uraian /Nama Penugasan"></textarea>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pimpinan">Pengendali Mutu:</label>
                  <input type="text" class="form-control input-sm" id="" placeholder="Pilih Pengendali Mutu">
                </div>
                <div class="form-group">
                  <label for="anggaran">Anggaran:</label>
                  <input type="text" class="form-control input-sm" id="" placeholder="Anggaran Penugasan / Cost Sheet">
                </div>

              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pimpinan">Pengendali Teknis:</label>
                  <input type="text" class="form-control input-sm" id="" placeholder="Pilih Pengendali Teknis">
                </div>
                <div class="form-group">
                  <label for="sel2">Anggota Tim:</label>
                  <select multiple class="form-control" id="sel2">
                    <option>Si A</option>
                    <option>Si B</option>
                    <option>Si C</option>
                    <option>Si D</option>
                    <option>Si E</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="pimpinan">Ketua Tim:</label>
                  <input type="text" class="form-control input-sm" id="" placeholder="Pilih Ketua Tim">
                </div>
                <div class="form-group">
                  <label for="tanggal_mulai">Tanggal Mulai:</label>
                  <input type="text" class="form-control input-sm" id="" placeholder="Tanggal Mulai Penugasan">
                </div>


              </div>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <label for="">Jenis Penugasan:</label><br>
                <label class="radio-inline"><input type="radio" name="optradio">Assurance</label>
                <label class="radio-inline"><input type="radio" name="optradio">Consulting</label>
                <label class="radio-inline"><input type="radio" name="optradio">Lainnya</label>
              </div>
              
              <div class="form-group">
                <label for="anggaran">Catatan:</label>
                <textarea type="text" class="form-control input-sm" id="" placeholder=""></textarea>
              </div>
             
            </div>
            <div class="col-md-4">
               <div class="form-group">
                <label for="lokasi">Lokasi:</label>
                 <select class="form-control" id="lokasi">
                   <option>Lokasi Penugasan</option>
                   <option>Provinsi Sulawesi Barat</option>
                   <option>Mamuju</option>
                   <option>Majene</option>
                   <option>Polewali Mandar</option>
                   <option>Mamasa</option>
                   <option>Mamuju Utara</option>
                   <option>Mamuju Tengah</option>
                 </select>
              </div>
              <div class="form-group">
                <label for="kontak">Hari Penugasan:</label>
                <input class="form-control">
              </div>
             
              <h4 class="text-right">
                <span class="label label-primary">Tambah Tugas&nbsp; <i class="fa fa-plus-circle fa-fw"></i></span>
              </h4>
            </div>

          </div>
              
          </form>
        </div>
      
      </div>
    </div>
  </div>

</template>

<script>

  export default {
      data() {
          return {
            obrikData: {
              nama: '',
              short: '',
              foto: '',
              pimpinan: '',
              anggaran: '',
              lokasi: '',
              keterangan: ''
            },
          errors: {}
          }
        },
      methods:{
        addNotebook() {
          axios.post('/notebook',this.notebookData)
          .then(response=>{
            this.notebookData="";
            this.errors="";
            this.$router.push('/');
          })
          .catch(error=>{

            this.errors=error.response.data;
          })
        }
      },
      mounted() {
        console.log('Component Mounted')
      }
    }
</script>

<style>

</style>
