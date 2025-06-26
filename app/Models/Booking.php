<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = [
        'id_penghuni',
        'id_kamar',
        'id_paket_kamar',
        'tanggal_mulai',
        'tanggal_selesai',
        'total_durasi',
    ];

    public function penghuni()
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function paketKamar()
    {
        return $this->belongsTo(PaketKamar::class, 'id_paket_kamar');
    }
}
