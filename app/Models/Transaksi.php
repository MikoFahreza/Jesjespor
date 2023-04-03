<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
       'id_jadwal',
       'id_metode_pembayaran',
       'id_user',
       'tanggal' 
    ];

    protected $casts = [
        'tanggal' => 'datetime:d-m-Y H:i:s'
    ];
}
