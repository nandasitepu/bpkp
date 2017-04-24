<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unsur_SPIP extends Model
{
  protected $table = 'unsur_spip';
  protected $fillable = [
    'nama'
  ];

  public function spip()
  {
  return $this->belongsTo(Spip::class);  
  }

}
