<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table='peminjaman';

    public function anggota(){
        return $this->belongsTo(Anggota::class);
    }
}
