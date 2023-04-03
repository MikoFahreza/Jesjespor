<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    use HasFactory;

    protected $table = 'kursi';
    protected $primaryKey = 'id_kursi';

    protected $fillable = [
        'id_gerbong',
        'nama_kursi'
    ];
}
