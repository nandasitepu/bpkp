<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SPIP extends Model
{
  protected $table = 'spip';
  public $fillable = [
    'dokumen', 'catatan'
  ];

  public function obrik()
  {
    return $this->belongsTo(Obrik::class, 'obrik_id');
  }

  public function unsur_spip()
  {
    return $this->belongsTo(Unsur_Spip::class, 'unsur_spip_id');
  }

  public function sub_unsur_spip()
  {
    return $this->belongsTo(Sub_Unsur_Spip::class, 'sub_unsur_spip_id');
  }


}
