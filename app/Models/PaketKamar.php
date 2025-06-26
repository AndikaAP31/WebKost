<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketKamar extends Model
{
      protected $table = 'paket_kamar';

    protected $fillable = [
        'id_tipe_kamar',
        'jenis_paket',
        'kapasitas',
        'harga',
    ];

    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class, 'id_tipe_kamar');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class, 'id_paket_kamar');
    }
}
