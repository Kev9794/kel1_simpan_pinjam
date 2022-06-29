<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    use HasFactory;
    protected $table='simpanan';
    protected $primaryKey = 'id_simpanan';

    protected $fillable = [
        'tgl_simpan',
        'jumlah',
        'saldo',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
