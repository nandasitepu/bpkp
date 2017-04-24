<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level_SPIP extends Model
{
  protected $table = 'level_spip';
  protected $fillable = [
    'nama'
  ];

  public function spip()
  {
  return $this->belongsTo(Spip::class);
  }
}
