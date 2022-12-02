<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;


    protected $fillable = ['jadwal' , 'jam_operasi', 'jam_akhir_operasi'];
    protected $hidden = [];

    protected $table = 'jadwal';

    // satu jadwal ==> mempunyai  1 tarif
    public function tarif(){
        return $this->hasOne(Tarif::class, 'jadwal_id', 'id');
    }
}
