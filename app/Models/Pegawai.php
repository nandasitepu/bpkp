<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = ['nama','nip','pangkat','jabatan'];

    // Pegawai Bunyak Banyak Tugas
    public function tim_tugas ()
    {
      return $this->belongsToMany('App\Models\Tugas', 'pegawai_tugas', 'pegawai_id', 'tugas_id');
    }
}
