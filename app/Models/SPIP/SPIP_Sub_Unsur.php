<?php

namespace App\Models\SPIP;

use Illuminate\Database\Eloquent\Model;

class SPIP_Sub_Unsur extends Model
{
  protected $table = 'spip_sub_unsur';
  protected $fillable = [
    'nama'
  ];

    public function spip()
    {
      return $this->belongsTo(SPIP::class);
    }
}
