<?php

namespace App\Models\Tugas;

use Illuminate\Database\Eloquent\Model;

class ST extends Model
{
    protected $table = 'st';
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

    // Tugas Punya Satu Cost Sheet
    public function costsheet() 
      {
        return $this->belongsTo(CostSheet::class, 'costsheet_id');
      }

    public function kendaliMutu() 
      {
        return $this->belongsTo(KendaliMutu::class, 'kendali_mutu_id');
      }  

    // Tugas Punya Penanggung Jawab, Pengendali Mutu, Pengendali Teknis, Ketua Tim, Anggota Tim

      public function penanggungJawab() 
        {
          return $this->belongsTo('App\Models\Pegawai', 'penanggung_jawab_id');   
        }
    
      public function pengendaliMutu() 
        {
          return $this->belongsTo('App\Models\Pegawai', 'pengendali_mutu_id');   
        }

      public function pengendaliTeknis() 
        {
          return $this->belongsTo('App\Models\Pegawai', 'pengendali_teknis_id');   
        }

      public function ketuaTim() 
        {
          return $this->belongsTo('App\Models\Pegawai', 'ketua_tim_id');   
        }
              
      public function anggotaTim()
        {
          return $this->belongsToMany('App\Models\Pegawai', 'st_x_at', 'st_id', 'pegawai_id');
        }

      public function narasumber()
        {
          return $this->belongsToMany('App\Models\Pegawai', 'st_x_ns', 'st_id', 'pegawai_id');
        }

      public function fasilitator()
        {
          return $this->belongsToMany('App\Models\Pegawai', 'st_x_ft', 'st_id', 'pegawai_id');
        }


}
