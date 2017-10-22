<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas';
    public $fillable = [
      'no_st_nd',
      'tipe', 
      'uraian', 
      'tanggal_st_nd',
      'tanggal_mulai',
      'tanggal_seleai',
      'penanggung_jawab',
      'pengendali_mutu',
      'pengendali_teknis',
      'ketua_tim',
      'anggota_tim',
      'lokasi',
      'beban',
      'total_biaya'
    ];

    // Tugas Dilaksanakan Oleh Banyak Pegawai
   



    // BELUM FIX

      public function penanggungJawab() 
        {
          return $this->belongsTo(Pegawai::class, 'penanggung_jawab_id');   
        }
    
      public function pengendaliMutu() 
        {
          return $this->belongsTo(Pegawai::class, 'pengendali_mutu_id');   
        }

      public function pengendaliTeknis() 
        {
          return $this->belongsTo(Pegawai::class, 'pengendali_teknis_id');   
        }

      public function ketuaTim() 
        {
          return $this->belongsTo(Pegawai::class, 'ketua_tim_id');   
        }
    



          
      public function anggotaTim()
        {
          return $this->belongsToMany('App\Models\Pegawai', 'it_tugas_anggota_tim', 'tugas_id', 'pegawai_id');
        }

      public function narasumber()
        {
          return $this->belongsToMany('App\Models\Pegawai', 'it_tugas_narasumber', 'tugas_id', 'pegawai_id');
        }

      public function fasilitator()
        {
          return $this->belongsToMany('App\Models\Pegawai', 'it_tugas_fasilitator', 'tugas_id', 'pegawai_id');
        }



 
}