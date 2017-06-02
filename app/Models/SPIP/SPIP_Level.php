<?php

namespace App\Models\SPIP;

use Illuminate\Database\Eloquent\Model;

class SPIP_Level extends Model
{
  protected $table = 'spip_level';
  protected $fillable = [
    'nama'
  ];

  public function spip()
  {
  return $this->belongsTo(SPIP::class);
  }
}
