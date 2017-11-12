<?php

namespace App\Models\Tugas;

use Illuminate\Database\Eloquent\Model;

class KM extends Model
{

    protected $table = 'km';


    // ST Punya Satu Cost Sheet
    public function st() 
    {
      return $this->belongsTo(ST::class, 'st_id');   
    }

    public function daltu() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'daltu_id');   
    }

    public function dalnis() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'dalnis_id');   
    }


    public function kt() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'kt_id');   
    }

    public function at1() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at1_id');   
    }

    public function at2() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at2_id');   
    }

    public function at3() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at3_id');   
    }

    public function at4() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at4_id');   
    }

    public function at5() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at5_id');   
    }

    public function at6() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at6_id');   
    }

    public function at7() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at7_id');   
    }

    public function at8() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at8_id');   
    }

    public function at9() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at9_id');   
    }

    public function at10() 
    {
      return $this->belongsTo('App\Models\Pegawai', 'at10_id');   
    }

}
