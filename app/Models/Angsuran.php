<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    use HasFactory;
    protected $table='angsuran';

    public function anggota(){
        return $this->belongsTo(Anggota::class);
    }
}
