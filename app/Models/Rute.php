<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    protected $fillable = ['jurusan','rute_pergi','rute_pulang'];
    protected $table = 'rute';

    public function tarif(){
        return $this->hasOne(Tarif::class, 'rute_id', 'ld');
    }
}
