<template>
	<div class="panel panel-default">
    <div class="panel-body">
      <form class="" action="index.html" method="post" >
        <div class="row" >
					<div id="detail" v-for="t in tugas">
						<div class="col-md-8" >
							<!-- -->
							<div class="col-md-4">
								<div class="form-group">
									<label v-show="true" for="nama">No ST/ ND: {{t.id}}</label>
									<label v-show="false" for="nama">No ST/ ND:</label>
									<input v-show="false" type="text" class="form-control input-sm" id="" placeholder="No ST/ND">
								</div>
								<div class="form-group">
									<label v-show="true" for="nama">Tanggal ST/ ND:</label>
									<label v-show="false" for="nama">Tanggal ST/ ND:</label>
									<input v-show="false" type="text" class="form-control input-sm" id="" placeholder="Tanggal ST/ND">
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label 		 v-show="true" for="uraian">Nama Penugasan:</label>
									<label 		 v-show="false" for="uraian">Nama Penugasan:</label>
									<textarea  v-show="false" class="form-control" rows="4" placeholder="Uraian /Nama Penugasan"></textarea>
								</div>
							</div>
							<!-- -->
							<div class="col-md-4">
								<div class="form-group">
									<label v-show="true" for="pimpinan">Pengendali Mutu:</label>
									<label v-show="false" for="pimpinan">Pengendali Mutu:</label>
									<input v-show="false" type="text" class="form-control input-sm" id="" placeholder="Pilih Pengendali Mutu">
								</div>

								<div class="form-group">
									<label v-show="true" for="anggaran">Anggaran:</label>
									<label v-show="false" for="anggaran">Anggaran:</label>
									<input v-show="false" type="text" class="form-control input-sm" id="" placeholder="Anggaran Penugasan / Cost Sheet">
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label v-show="true" for="pimpinan">Pengendali Teknis:</label>
									<label v-show="false" for="pimpinan">Pengendali Teknis:</label>
									<input v-show="false" type="text" class="form-control input-sm" id="" placeholder="Pilih Pengendali Teknis">
								</div>
								<div class="form-group">
									<label  v-show="true" for="sel2">Anggota Tim:</label>
									<label  v-show="false" for="sel2">Anggota Tim:</label>
									<select v-show="false" multiple class="form-control" id="sel2">
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
									<label v-show="true" for="pimpinan">Ketua Tim:</label>
									<label v-show="false" for="pimpinan">Ketua Tim:</label>
									<input v-show="false" type="text" class="form-control input-sm" id="" placeholder="Pilih Ketua Tim">
								</div>

								<div class="form-group">
									<label v-show="true" for="tanggal_mulai">Tanggal Mulai:</label>
									<label v-show="false" for="tanggal_mulai">Tanggal Mulai:</label>
									<input v-show="false" type="text" class="form-control input-sm" id="" placeholder="Tanggal Mulai Penugasan">
								</div>


							</div>
						</div>
						<div class="col-md-4">

							<div class="form-group">
								<label v-show="true" for="">Jenis Penugasan:</label><br>
								<label v-show="false" for="">Jenis Penugasan:</label><br>
								<label v-show="false" class="radio-inline"><input type="radio" name="optradio">Assurance</label>
								<label v-show="false" class="radio-inline"><input type="radio" name="optradio">Consulting</label>
								<label v-show="false" class="radio-inline"><input type="radio" name="optradio">Lainnya</label>
							</div>
							<div class="form-group">
								<label  v-show="true"for="lokasi">Lokasi:</label>
								<label  v-show="false"for="lokasi">Lokasi:</label>
								<select v-show="false" class="form-control" id="lokasi">
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
								<label v-show="true" for="kontak">Hari Penugasan:</label>
								<label v-show="false" for="kontak">Hari Penugasan:</label>
								<input v-show="false" class="form-control">
							</div>

							<div class="form-group" v-show="false">
								<label    v-show="true" for="anggaran">Catatan:</label>
								<label    v-show="false" for="anggaran">Catatan:</label>
								<textarea v-show="false" type="text" class="form-control input-sm" id="" placeholder=""></textarea>
							</div>
							<h4 class="text-right">
								<span class="label label-primary">Edit Tugas&nbsp; <i class="fa fa-edit 	 fa-fw"></i></span>
							</h4>
						</div>
					</div>

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
        tugas:[],
        loading:false,
        url:'api/tugas',
      }
    },
    created:function(){
      this.detailTugas()
    },

    methods:{
      detailTugas() {
        var vm = this
        this.loading=true;
        axios.get(this.url)
          .then(function(response){
             Vue.set(vm.$data, 'tugas', response.data.tugas)
          })
        this.loading=false;
      },

      // Button Edit Form
      editTugas(editId) {
        this.tugas.data.forEach((t,i)=>{
          if(t.id==editId){
            this.editData=t;
          }
        });
        return this.editForm=editId;
      },

      // Show Edit Form Tugas
      formTugas(editId) {
        if(this.editForm==editId) {
          return true;
        }
        return false;
      },

      // Button Show Tugas
      showTugas(tugasId) {
        this.tugas.data.forEach((t,i)=>{
          if(t.id==tugasId){
            this.showData=t;
          }
        });
        return this.showSingle=tugasId;
      },

      // show Detail Tugas
      singleTugas(tugasId) {
        if(this.showSingle=tugasId) {
          return true;
        }
        return false;
      },

			// show Detail Tugas
      deleteTugas(tugasId){
        return true;
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
        return moment(date).format('DD MMMM YY');
      }
    }
  }
</script>
