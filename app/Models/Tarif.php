<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    protected $fillable = ['jadwal_id', 'rute_id', 'tarif'];
    protected $table = 'tarif';
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class , 'jadwal_id', 'id');
    }
    
    public function rute()
    {
        return $this->belongsTo(Rute::class , 'rute_id', 'id');
    }

}

//jadwal . rute , tarif