<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table='peminjaman';
    protected $primaryKey = 'id_peminjaman';

    protected $fillable = [
        'tgl_pinjam',
        'jumlah',
        'tenggat_waktu',
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id_peminjaman');
    }
}