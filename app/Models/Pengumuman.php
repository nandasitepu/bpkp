<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
  protected $table = 'pengumuman';

  public $fillable = ['judul','isi','gambar', 'tanggal'];
}
