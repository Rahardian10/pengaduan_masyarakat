<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Masyarakat extends Authenticatable
{
    use Notifiable;
    protected $guard = 'warga';
    protected $keyType = 'string';
    public $incrementing = False;
    protected $primaryKey = 'nik';
    protected $table = "masyarakats";
    protected $fillable = ['nik', 'nama', 'username', 'email', 'password', 'telp'];


    public function pengaduan()
    {
        return $this->hasMany('App\Pengaduan', 'nik');
    }
}
