<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas';

    // Tugas Dilaksanakan Oleh Banyak Pegawai
    public function tim_pegawai ()
    {
      return $this->belongsToMany('App\Models\Pegawai', 'pegawai_tugas', 'tugas_id', 'pegawai_id');
    }
}
