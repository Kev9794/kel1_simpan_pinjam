<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';

    protected $fillable = [
        'id_anggota',
        'nama',
        'email',
        'password',
        'no_telp',
        'alamat'
    ];

    public function simpanan(){
        return $this->hasMany(Simpanan::class);
    }

    public function pengambilan(){
        return $this->hasMany(Pengambilan::class);
    }

    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }

    public function angsuran(){
        return $this->hasMany(Angsuran::class);
    }
}
