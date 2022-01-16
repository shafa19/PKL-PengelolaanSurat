<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = 'suratmasuk';
    //protected $fillable = ['no_surat', 'pengirim', 'perihal', 'klasifikasi_kode', 'status_surat', 'tujuan_disposisi', 'keterangan_disposisi', 'keterangan_tindaklanjut', 'file_surat'];

    // relasi tabel suratmasuk dengan tabel klasifikasi
    public function klasifikasi()
    {
        return $this->belongsTo('App\Klasifikasi');
    }
}
