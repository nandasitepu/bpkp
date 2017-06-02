<?php

namespace App\Models\SPIP;

use Illuminate\Database\Eloquent\Model;

class SPIP_Dokumen extends Model
{
  protected $table = 'spip_dokumen';

  public function spip()
  {
  return $this->belongsTo(SPIP::class);
  }
}
