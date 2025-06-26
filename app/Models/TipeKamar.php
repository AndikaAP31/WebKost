<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeKamar extends Model
{
    protected $table = 'tipe_kamar';

    protected $fillable = [
        'tipe_kamar',
        'fasilitas',
    ];

    public function kamar()
    {
        return $this->hasMany(Kamar::class, 'id_tipe_kamar');
    }

    public function paketKamar()
    {
        return $this->hasMany(PaketKamar::class, 'id_tipe_kamar');
    }
}
