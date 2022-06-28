<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    use HasFactory;
    protected $table='angsuran';
    protected $primaryKey = 'id_angsuran';

    protected $fillable = [
        'tgl_angsur',
        'jumlah',
        'jumlah_sisa',
        'sisa_tenggat_waktu',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
