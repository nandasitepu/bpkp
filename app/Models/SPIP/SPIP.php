<?php

namespace App\Models\SPIP;

use Illuminate\Database\Eloquent\Model;

class SPIP extends Model
{
  protected $table = 'spip';
  public $fillable = [
    'status', 'catatan'
  ];

  public function spip_data()
  {
    return $this->belongsTo(SPIP_Data::class,'spip_data_id');
  }

  public function obrik()
  {
    return $this->belongsTo(Obrik::class, 'obrik_id');
  }

  public function spip_unsur()
  {
    return $this->belongsTo(SPIP_Unsur::class, 'spip_unsur_id');
  }

  public function spip_sub_unsur()
  {
    return $this->belongsTo(SPIP_Sub_Unsur::class, 'spip_sub_unsur_id');
  }

  public function spip_level()
  {
    return $this->belongsTo(SPIP_Level::class, 'spip_level_id');
  }

  public function spip_dokumen()
  {
    return $this->belongsTo(SPIP_Dokumen::class, 'spip_dokumen_id');
  }


}
