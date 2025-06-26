<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
     protected $table = 'pembayaran';

    protected $fillable = [
        'id_user',
        'id_kamar',
        'id_booking',
        'tanggal_pembayaran',
        'status_pembayaran',
        'jumlah_pembayaran',
        'bukti_pembayaran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'id_booking');
    }
}
