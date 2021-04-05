<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $primaryKey = 'id_pengaduan';
    protected $table = "pengaduans";
    protected $fillable = ['tgl_pengaduan', 'nik', 'judul', 'isi_laporan', 'foto', 'level'];

    public function masyarakat()
    {
        return $this->belongsTo('App\Masyarakat', 'nik', 'nik');
    }

    public function tanggapan()
    {
        return $this->hasMany('App\Tanggapan', 'id_pengaduan');
    }
}
