<?php

namespace App\Models\APIP;

use Illuminate\Database\Eloquent\Model;

class APIP_Data extends Model
{
  protected $table = 'apip_data';
  public $fillable = [
    'nama', 'pimpinan', 'kontak',  'keterangan', 'total_pegawai', 'total_anggaran'
  ];
}
