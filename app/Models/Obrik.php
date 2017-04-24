<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obrik extends Model
{
  protected $table = 'obrik';
  protected $fillable = [
    'nama'
  ];

  public function spip()
  {
    return $this->hasMany(Spip::class);
  }
}
