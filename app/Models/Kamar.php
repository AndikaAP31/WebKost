<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $fillable = [
        'id_tipe_kamar',
        'status',
        'no_kamar',
        'foto_kamar1',
        'foto_kamar2',
        'foto_kamar3',
        'deskripsi',
    ];

    public function tipeKamar()
    {
        return $this->belongsTo(TipeKamar::class, 'id_tipe_kamar');
    }

    public function pengaduans()
    {
        return $this->hasMany(Pengaduan::class, 'id_kamar');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'id_kamar');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class, 'id_kamar');
    }
}
