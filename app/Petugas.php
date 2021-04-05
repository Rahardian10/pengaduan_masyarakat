<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Petugas extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $guard = 'petugas';
    protected $primaryKey = 'id_petugas';
    protected $table = "petugas";
    protected $dates = ['deleted_at'];
    protected $fillable = ['nama_petugas', 'username', 'email', 'password', 'telp', 'level'];

    public function tanggapan()
    {
        return $this->hasMany('App\Tanggapan', 'id_petugas');
    }
}
