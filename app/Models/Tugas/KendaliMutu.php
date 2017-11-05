<?php

namespace App\Models\Tugas;

use Illuminate\Database\Eloquent\Model;

class KendaliMutu extends Model
{
    public function tugas() 
    {
      return $this->hasOne(Tugas::class, 'tugas_id');   
    }
}
