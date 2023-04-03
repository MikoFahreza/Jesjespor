<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;

    protected $table  = 'kereta';
    protected $primaryKey = 'id_kereta';

    protected $fillable = [
        'total_kursi',
        'nama_kereta',
        'jenis_kereta'
    ];
}
