<?php

namespace App\Models\APIP;

use Illuminate\Database\Eloquent\Model;

class APIP extends Model
{
  protected $table = 'apip';
  public $fillable = [
    'pernyataan', 'dokumen', 'catatan',  'status'
  ];

  public function obrik()
  {
    return $this->belongsTo(Obrik::class, 'obrik_id');
  }

  public function apip_elemen()
  {
    return $this->belongsTo(APIP_Elemen::class, 'apip_elemen_id');
  }

  public function apip_level()
  {
    return $this->belongsTo(APIP_Level::class, 'apip_level_id');
  }
}
