<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
        'id_rute',
        'id_kereta',
        'id_admin',
        'tanggal'

    ];

    protected $casts = [
        'tanggal' => 'datetime:d-m-Y H:i:s'
    ];
}
