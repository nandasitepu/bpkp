<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spip extends Model
{
  protected $table = 'spip';
  protected $fillable = [
    'level_spip', 'dokumen', 'catatan'
  ];

  public function obrik()
  {
    return $this->belongsTo(Obrik::class, 'obrik_id');
  }

  public function sub_unsur_spip()
  {
    return $this->belongsTo(Sub_Unsur_Spip::class, 'sub_unsur_spip_id');
  }

}
