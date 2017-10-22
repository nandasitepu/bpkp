<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Nicolaslopezj\Searchable\SearchableTrait;

class Pegawai extends Model
{
    
    use SearchableTrait;  
    
    protected $table = 'pegawai';

     /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
      'columns' => [
          'pegawai.nama' => 2,
          'pegawai.nip' => 1,
      ]
    ];

    protected $fillable = ['nama','nip','pangkat','jabatan'];

    // Pegawai Bunyak Banyak Tugas
    public function t_anggotaTim()
    {
      return $this->belongsToMany('App\Models\Tugas', 'it_tugas_anggota_tim', 'pegawai_id', 'tugas_id');
    }

    public function t_narasumber()
    {
      return $this->belongsToMany('App\Models\Tugas', 'it_tugas_narasumber', 'pegawai_id', 'tugas_id');
    }

    public function t_fasilitator()
    {
      return $this->belongsToMany('App\Models\Tugas', 'it_tugas_fasilitator', 'pegawai_id', 'tugas_id');
    }

    //
    public function t_pj() 
    {
      return $this->hasMany(Tugas::class, 'tugas_id');    
    }

    public function t_daltu() 
    {
      return $this->hasMany(Tugas::class, 'tugas_id');    
    }

    public function t_dalnis() 
    {
      return $this->hasMany(Tugas::class, 'tugas_id');    
    }

    public function t_kt() 
    {
      return $this->hasMany(Tugas::class, 'tugas_id');    
    }

}
