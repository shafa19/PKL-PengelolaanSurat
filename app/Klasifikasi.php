<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    protected $table = 'klasifikasi';
    protected $fillable = ['nama', 'kode'];

    // relasi tabel klasifikasi dengan tabel suratmasuk
    public function suratmasuk()
    {
        return $this->hasMany('App\SuratMasuk');
    }
}
