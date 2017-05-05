<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_Unsur_SPIP extends Model
{
  protected $table = 'sub_unsur_spip';
  protected $fillable = [
    'nama'
  ];

    public function spip()
    {
      return $this->hasMany(SPIP::class);
    }
}
