<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $primaryKey = 'id_tanggapan';
    protected $table = "tanggapans";
    protected $fillable = ['id_pengaduan', 'tgl_tanggapan', 'tanggapan', 'id_petugas'];

    public function pengaduan()
    {
        return $this->belongsTo('App\Pengaduan', 'id_tanggapan', 'id_pengaduan');
    }

    public function petugas()
    {
        return $this->belongsTo('App\Petugas', 'id_petugas', 'id_petugas');
    }
}
