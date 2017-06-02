<?php

namespace App\Models\SPIP;

use Illuminate\Database\Eloquent\Model;

class SPIP_Data extends Model
{
  protected $table = 'spip_data';

  public function spip()
  {
  return $this->belongsTo(SPIP::class);
  }
}
