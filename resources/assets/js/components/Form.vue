<template>
  <div class="panel panel-default">
    <div class="panel-body">
      <form class="" action="index.html" method="post" >
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-right"><span class="label label-primary">Tambah Obrik&nbsp; <i class="fa fa-plus-circle fa-fw"></i></span></h4>
          </div>
          <div class="col-md-8" >
            <div class="col-md-9">
              <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control input-sm" id="" placeholder="">
              </div>


            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="short">Short:</label>
                <input type="text" class="form-control input-sm" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <label for="pimpinan">Pimpinan:</label>
                <input type="text" class="form-control input-sm" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="anggaran">Anggaran:</label>
                <input type="text" class="form-control input-sm" id="" placeholder="">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group" id="editor">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" rows="5"></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="foto">Foto:</label>
              <input type="file" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
              <label for="lokasi">lokasi:</label>
              <input type="text" class="form-control" id="" placeholder="">
            </div>
            <div class="form-group">
              <label for="kontak">Kontak:</label>
              <textarea class="form-control" rows="1" id="kontak"></textarea>
            </div>
          </div>
        </div>
      </form>
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
