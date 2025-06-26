<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penghuni extends Model
{
    protected $table = 'penghuni';

    protected $fillable = [
        'id_user',
        'status_penghuni',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'id_penghuni');
    }

}
